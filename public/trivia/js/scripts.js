(function ($) {
    var gameContent = '',
        triviaData = [],
        numCorrect = 0;

    $('#start').click(function () {
        startGame();
    });

    function startGame() {
        var q = 0; // stores current question #
        loadSpinner();
        getData(q);
    }

    function loadSpinner() {
        gameContent = '<div class="loader"></div>';
        $('#question').html(gameContent);
        $('#answer').html('');
    }

    // get json data and start game
    function getData(q) {
        var data = $.getJSON('../trivia/questions.php').done(function() {
            triviaData = JSON.parse(data.responseJSON);
            nextQuestion(q);
        });
    }

    function nextQuestion(q) {
        getQuestion(q);
        getChoices(q);
    }

    function getQuestion(q) {
        gameContent = '<h3 class="text-center">Question #' + (q + 1) + '</h3><p class="text-center">' + triviaData.results[q].question + '</p>';
    }

    function getChoices(q) {
        var answerChoices, numChoices, choice;

        // sort answers alphabetically
        answerChoices = triviaData.results[q].incorrect_answers;
        answerChoices.push(triviaData.results[q].correct_answer);
        answerChoices.sort();

        // print questions and answer choices
        numChoices = answerChoices.length;
        gameContent += '<form><fieldset>';
        for (choice = 0; choice < numChoices; choice++) {
            gameContent += '<input type="button" class="choice btn btn-block" value="' + answerChoices[choice] + '"/><br/>';
        }
        gameContent += '</fieldset></form>';
        $('#question').html(gameContent);

        // hover effect on answer choices
        $('.choice').hover(function() {
            $(this).addClass('btn-info');
        }, function() {
            $(this).removeClass('btn-info');
            }
        );

        // check answers when answer selected
        $('.choice').click(function() {
            var selectedAnswer = $(this).val();
            $('.choice').attr('disabled', true);
            checkAnswer(selectedAnswer, q);
        });
    }

    function checkAnswer(selectedAnswer, q) {
        var correctAnswer = triviaData.results[q].correct_answer,
            correct = false,
            answerContent = '';

        // compare selected answer to correct answer
        if (selectedAnswer == correctAnswer) {
            correct = true;
            numCorrect++;
        }

        colorize(correctAnswer, selectedAnswer, correct);

        // print to answers div
        answerContent = '<div class="panel ';
        if (correct) {
            answerContent += 'panel-success"><div class="panel-heading"><h3 class="panel-title">You got it right!</h3></div>';

        } else {
            answerContent += 'panel-danger"><div class="panel-heading"><h3 class="panel-title">You got it wrong.</h3></div><div class="panel-body">The correct answer was "' + correctAnswer + '."</div>';
        }
        answerContent += '</div><button id="next" class="btn btn-primary ">Next <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span></button>';
        $('#answer').html(answerContent);

        $("#next").click(function() {
            next(q);
        });
    }

    function next(q) {
        var gameLength = triviaData.results.length - 1;
        // go to next question
        if (q < gameLength) {
            q++;
            nextQuestion(q);
        // if no questions left, game over
        } else {
            calcScore(numCorrect, q);
        }
        $('#answer').html('');
    }

    function calcScore(numCorrect, q) {
        var score = Math.round((numCorrect / (q + 1)) * 100);
        printScore(score);
    }

    function printScore(score) {
        gameContent = '<h3 class="text-center">';
        if (score == 100) {
            gameContent += 'Congratulations!</h3><p class="text-center">You got a perfect score.</p>';
        } else if (score >= 80) {
            gameContent += 'Great job!</h3><p class="text-center">You got a ' + score + '%.</p>';
        } else {
            gameContent += 'Game over!</h3><p class="text-center">You got a ' + score + '%.</p>';
        }
        $('#question').html(gameContent);

        // reset score for next game
        score = 0;
        numCorrect = 0;
    }

    function colorize(correctAnswer, selectedAnswer, correct) {
        var right = 'input[value="' + correctAnswer + '"]';
        $(right).removeClass('btn-info').addClass('btn-success');

        if (!correct) {
            var wrong = 'input[value="' + selectedAnswer + '"]';
            $(wrong).removeClass('btn-info').addClass('btn-danger');
        }
    }
}(jQuery));
