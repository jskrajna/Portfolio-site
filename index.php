<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Formularz kontaktowy'; 
		$to = 'jskrajna@gmail.com'; 
		$subject = 'Wiadomość z formularza kontaktowego ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";


if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<h1>Dziękuję za zainteresowanie! Odezwę się w ciągu 24 godzin.</h1>';
	} else {
		$result='<h1>Ups! Coś poszło nie tak. Spróbuj ponownie później.</h1>';
	}
}
	}
?>

    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moje portfolio</title>
        <meta name="description" content="Personal website">
        <meta name="keywords" content="front-end, portfolio, developer, job">
        <link href="https://fonts.googleapis.com/css?family=Glegoo:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
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
                        <li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i><br />HOME</a></li>
                        <li><a href="#about"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><br />O mnie</a></li>
                        <li><a href="#portfolio"><i class="fa fa-desktop fa-lg" aria-hidden="true"></i><br />Portfolio</a></li>
                        <li><a href="#skills"><i class=" fa fa-cubes fa-lg" aria-hidden="true"></i><br />Umiejętności</a></li>
                        <li><a href="#contact"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="side">
            <div id="mainbg" class="img-responsive">
            </div>
        </div>
        <div id="content">
            <div>
                <header class="row">
                    <h1 id="home" class="col-xs-11 col-12-sm col-md-7 col-md-offset-5"><span>Cześć!<br/></span> Mam na imię <span>Justyna</span>. Chcesz dowiedzieć się o mnie więcej<span>?</span><br/>
                        <a href="#about"><img class="arrow" src="images/arrowexp2.png" alt=""></a>
                    </h1>
                </header>
            </div>
            <section id="about">
                <div class="page-header">
                    <h2>Na wstępie powiem, że...</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>moją przygodę z front-endem zaczęłam stosunkowo niedawno. Niemniej jednak zaczęła ona szybko stanowić moje codzienne zajęcie. Lubię zajmować się zarówno kodowaniem projektu jak i jego projektowaniem graficznym. Staram się nadawać swoim pracom odrobinę charakteru.</p>
                    </div>
                </div>
            </section>
            <section id="portfolio">
                <div class="page-header">
                    <h2>Co do tej pory zrobiłam?</h2>
                </div>
                <div class="row">
                    <div class="item col-xs-12 col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <a href="project1.php" target="_blank"><img src="images/project-1.png" alt=" "></a>
                            <div class="caption">
                                <h3>Projekt 1</h3>
                                <p>Projekt o tematyce fotograficznej.</p>
                                <a href="project1.php" target="_blank" class="btn btn-primary">Więcej</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <a href="project2.php" target="_blank"><img src="images/project-2.png" alt=" "></a>
                            <div class="caption">
                                <h3>Projekt 2</h3>
                                <p>Druga strona- moje własne portfolio.</p>
                                <a href="project2.php" target="_blank" class="btn btn-primary">Więcej</a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <a href="project3.php" target="_blank"><img src="images/project-3.png" alt=" "></a>
                            <div class="caption">
                                <h3>Projekt 3</h3>
                                <p>Od tego zaczęłam ...</p>
                                <a href="project3.php" target="_blank" class="btn btn-primary">Więcej</a>
                            </div>
                        </div>
                    </div>
                    <div class="last col-xs-12 col-sm-6 col-md-6">
                        <a href="#contact" id="blank" class="thumbnail">Napisz do mnie<br/><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a>
                        <div class="row">
                            <div class="rowfix">
                                <img class="pull-right arrow" src="images/arrowexp3.png" alt="">
                                <p id="extra">To miejsce możemy zapełnić wspólnie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="skills">
                <div class="page-header">
                    <h2>Co potrafię?</h2>
                </div>
                <div>
                    <div class="row element">
                        <div class="col-xs-12">
                            <p>Przedstawione poniżej umiejętności posiadam na poziomie podstawowym. Schemat pokazuje ich proporcje.</p>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    HTML5/CSS3
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    BOOTSTRAP
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    RWD
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    WORDPRESS (ADMINISTRACJA)
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    JS(JQUERY)
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    PHOTOSHOP
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100">
                                    SQL
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100">
                                    GIT
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a id="cv" class="btn btn-primary" href="images/JustynaSkrajna_CV.pdf" download="JustynaSkrajna_CV.pdf">Pobierz CV</a>
                </div>
            </section>
            <section id="contact">
                <div class="page-header">
                    <h2>Napisz do mnie!</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Jeżeli zainteresowała Cię moja strona i chciałbyś nawiązać ze mną współpracę, zachęcam do skorzystania z poniższego formularza. Napisz, zapytaj, wyraź opinię!</p>
                    </div>
                    <div class="col-xs-12">
                        <form class="form-horizontal" method="post" action="result.php">
                            <div class="form-group">
                                <label for="name" class="col-xs-3">Imię</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-3">Nazwisko</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="lastName" name="lastName" required value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-xs-3">Email</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-xs-3">Wiadomość</label>
                                <div class="col-xs-9">
                                    <textarea class="form-control" rows="15" name="message" id="message" required><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-9 col-xs-offset-3">
                                    <input id="submit" name="submit" type="submit" value="Wyślij" class="btn btn-primary">
                                    <button type="reset" class="btn btn-default">Wyczyść</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div id="socialMedia">
                        <a href="https://www.facebook.com/justyna.skrajna?ref=bookmarks" target="_blank">
                            <span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x"></i>
</span></a>
                        <a href="https://github.com/jskrajna" target="_blank">
                            <span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-github fa-stack-1x"></i>
</span></a>
                    </div> <br>
                    <div id="additionalInfo">
                        <a href="mailto:jskrajna@gmail.com"><span>Email:</span> jskrajna@gmail.com</a><br><span>Telefon:</span> 512 700 877</div>
                </div>
            </div>
        </footer>
        <script src="https://use.fontawesome.com/60556353aa.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="scripts/script.js"></script>

    </body>

    </html>
