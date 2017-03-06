<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Development | Hannah Shrimpton</title>

        <!-- Bootstrap -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
        <link href="css/portfolio.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container-fluid">

            <!-- navbar -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">

                    <!-- nav toggling on mobile -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#top">Hannah Shrimpton</a>
                    </div>
                    <!-- /.navbar-header -->

                    <!-- nav content -->
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#portfolio"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>Portfolio</a></li>
                            <li><a href="#about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
                            <li><a href="#contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.collapse /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

            <!-- heading/about -->
            <header class="row">
                <div class="col-sm-9 col-md-9">
                    <h1>Hi! I'm Hannah.</h1>
                    <h1>I write code for the web.</h1>
                </div>
                <!-- /.col-sm-9 /.col-md-9 -->
                <div class="col-sm-3 col-md-3">
                    <img src="img/headshot.jpg" alt="Headshot" />
                </div>
                <!-- /.col-sm-3 /.col-md-3 -->
            </header>
            <!-- /.row -->

            <!-- main page content -->
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                    <!-- portfolio -->
                    <div class="row" id="portfolio">
                        <div class="col-md-3">
                            <h2>My work.</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumbnail">
                                        <h4>Trivia</h4>
                                        <a href="trivia/" target="_blank">
                                            <img src="img/screenshots/trivia.png" alt="Trivia game">
                                        </a>
                                        <p>HTML, CSS, Bootstrap, JavaScript, jQuery, PHP (<a href="https://github.com/hannahcodes/portfolio/tree/master/trivia" target="_blank">GitHub</a>)</p>
                                    </div>
                                    <!-- /.thumbnail -->
                                </div>
                                <div class="col-md-6">
                                    <div class="thumbnail">
                                        <h4>Worcester, MA</h4>
                                        <a href="worcester/" target="_blank">
                                            <img src="img/screenshots/worcester.png" alt="Worcester, Massachusetts">
                                        </a>
                                        <p>HTML, CSS, Bootstrap (<a href="https://github.com/hannahcodes/portfolio/tree/master/worcester" target="_blank">GitHub</a>)</p>
                                    </div>
                                    <!-- /.thumbnail -->
                                </div>
                                <div class="col-md-6">
                                    <div class="thumbnail">
                                        <h4>Portfolio</h4>
                                        <a href="#">
                                            <img src="img/screenshots/portfolio.png" alt="Portfolio">
                                        </a>
                                        <p>HTML, SCSS, Bootstrap, Javascript, jQuery (<a href="https://github.com/hannahcodes/portfolio" target="_blank">GitHub</a>)</p>
                                    </div>
                                    <!-- /.thumbnail -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.col-md-9 -->

                    </div>
                    <!-- /.row -->

                    <!-- about -->
                    <hr />
                    <div class="row" id="about">
                        <div class="col-md-3">
                            <h2>About me.</h2>
                        </div>
                        <div class="col-md-9">
                            <p>I've worked in the tech industry for over five years, but I first made <a href="img/fuzzydotnet.jpg" target="_blank">a website</a> in the late '90s. I love animals, learning, food and yoga.</p>
                            <p>Music recommendation: <a href="https://play.spotify.com/album/2wXhxuVsez14KLEoxMHjyg" target="_blank">"West Kirby County Primary"</a> by Bill Ryder-Jones.</p>
                            <p>Book recommendation: <a href="https://www.goodreads.com/book/show/22822858-a-little-life" target="_blank"><cite>A Little Life</cite></a> by Hanya Yanagihara.</p>
                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <!-- /.row -->

                    <!-- contact -->
                    <hr />
                    <div class="row" id="contact">
                        <div class="col-md-3">
                            <h2>Reach out.</h2>
                        </div>
                        <div class="col-md-6">
                            <a href="https://github.com/hannahcodes" target="_blank" class="btn btn-default btn-lg btn-block contact-logo github">GitHub</a><br />
                            <a href="https://www.linkedin.com/in/hannahshrimpton" target="_blank" class="btn btn-default btn-lg btn-block contact-logo linkedin">LinkedIn</a><br />
                            <a href="https://twitter.com/hannahcodes" target="_blank" class="btn btn-default btn-lg btn-block contact-logo twitter">Twitter</a>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->

                    <!-- footer -->
                    <hr />
                    <?php include_once("footer.php") ?>

                </div>
                <!-- /.col-xs-10 /.col-xs-offset-1 /.col-sm-8 /.col-sm-offset-2 /.col-md-8 /.col-md-offset-2 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/portfolio.min.js"></script>

    </body>

</html>
