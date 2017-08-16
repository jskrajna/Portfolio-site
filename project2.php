<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charser="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal website">
    <meta name="keywords" content="front-end, portfolio, developer, job">
    <title>Projekt 2</title>
    <link href="https://fonts.googleapis.com/css?family=Glegoo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font-mfizz/font-mfizz.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="subpage">
    <div class="mainModal modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="false">
        <div class="modal-dialog" data-dismiss="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body"><img src="images/project-2.png" alt=""></div>
            </div>
        </div>
    </div>
    <nav>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div id="sidebar" class="collapse navbar-collapse">
                <ul class="nav navbar-inverse">
                    <li><a href="index.php#home"><i class="fa fa-home" aria-hidden="true"></i><br>HOME</a></li>
                    <li><a href="index.php#about"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><br>O mnie</a></li>
                    <li><a href="index.php#portfolio"><i class="fa fa-desktop fa-lg" aria-hidden="true"></i><br>Portfolio</a></li>
                    <li><a href="index.php#skills"><i class=" fa fa-cubes fa-lg" aria-hidden="true"></i><br>Umiejętności</a></li>
                    <li><a href="index.php#contact"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br>Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="side">
        <img src="images/project-2.png" alt="" class="picture">
    </div>
    <div id="content">
        <section class="introduction">
            <div class="page-header">
                <h2>Projekt 2</h2>
            </div>
            <div class="row">
                <div class="col-xs-11">
                    <p>Moje portfolio.</p>
                    <h5>Użyte technologie:</h5>
                    <ul class="fa-ul">
                        <li><i class="fa fa-html5" aria-hidden="true"></i> HTML5</li>
                        <li><i class="fa fa-css3" aria-hidden="true"></i> CSS3</li>
                        <li><i class="icon-jquery"></i> JQUERY</li>
                        <li><i class="icon-php"></i> PHP</li>
                    </ul>
                    <div class="webbtns">
                        <a href="http://jskrajna.ct8.pl/" class="btn btn-primary" target="_blank">STRONA</a>
                        <a href="https://github.com/jskrajna/photographer-site" class="btn btn-primary" target="_blank">KOD</a>
                        <a href="#" class="btn btn-primary preview">PODGLĄD</a>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <footer>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div id="socialMedia"><a href="https://www.facebook.com/justyna.skrajna?ref=bookmarks" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x"></i>
</span></a>
                    <a href="https://github.com/jskrajna" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-github fa-stack-1x"></i>
</span></a> </div> <br/>
                <div id="additionalInfo">
                    <a href="mailto:jskrajna@gmail.com"><span>Email:</span> jskrajna@gmail.com</a><br/><span>Telefon:</span> 512 700 877</div>
            </div>
        </div>

    </footer>
    <script src="https://use.fontawesome.com/60556353aa.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="scripts/projects.js"></script>


</body>

</html>
