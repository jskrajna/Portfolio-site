<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal website">
    <meta name="keywords" content="front-end, portfolio, developer, job">
    <title>Rezultat formularza</title>
    <link href="https://fonts.googleapis.com/css?family=Glegoo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <script src="https://use.fontawesome.com/4e0e204e30.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
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


if (!$errName && !$errlastName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<h1>Świetnie! Twój mail został wysłany.</h1>';
	} else {
		$result='<h1>Ups! Coś poszło nie tak. Spróbuj ponownie później.</h1>';
	}
}
	}
?>

    <body id="result">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 type">
                    <?php echo $result ?>
                </div>
                <div class="col-xs-12  home-icon">
                    <a href="index.php">Wróć do strony głównej <i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </body>

</html>
