<?php

    ini_set("allow_url_fopen", 1);

    $trivia = file_get_contents('https://www.opentdb.com/api.php?amount=3&difficulty=easy&type=multiple');

    header("Content-type: application/json");
    print(json_encode($trivia, JSON_PRETTY_PRINT));

?>
