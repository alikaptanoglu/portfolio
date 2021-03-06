<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Trivia</title>

        <!-- Bootstrap, fonts and custom -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif%7cOpen+Sans%7cVarela+Round" rel="stylesheet">
        <link href="css/trivia.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            <header class="row page-header">
                <h1 class="text-center">Trivia <small>10 questions</small></h1>
            </header>

            <div class="row">
                <div id="main" class="col-md-8">
                    <button id="start" type="button" class="btn btn-lg btn-primary center-block">
                        Start New Game
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </button>
                    <div id="question"></div>
                    <div id="answer"></div>
                </div>

                <aside class="col-md-2">
                    <p class="text-center">
                        <em>Trivia game developed using the <a href="https://opentdb.com/" target="_blank">Open Trivia Database</a>.</em>
                    </p>
                </aside>
            </div>

            <?php include_once("../footer.php") ?>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendor/he/he.js"></script>
        <script src="js/trivia.min.js"></script>
    </body>

</html>
