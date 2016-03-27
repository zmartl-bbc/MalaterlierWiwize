<?php
$result = "";
$errorName = "";
$errorEmailAdresse = "";
$errorNachricht = "";
if ($_POST) {
	if (isset ( $_POST ['name'] )) {
		if (isset ( $_POST ['email'] )) {
			if (isset ( $_POST ['nachricht'] )) {
				$name = htmlentities ( $_POST ['name'] );
				$email = htmlentities ( $_POST ['email'] );
				$nachricht = htmlentities ( $_POST ['nachricht'] );
				$to = "y.escher@bluewin.ch";
				$from = "Kontakformular malatelier-wiwize.ch";
				$subject = "Kontaktanfrage von malatelier-wiwize.ch";
				$mailbody = "Von: $from\n Email: $email\n Nachricht: $nachricht\n";
				if (mail ( $to, $subject, $mailbody, $from )) {
					$result = '<div class="alert alert-success"><strong>Erfolgreich gesendet!</strong> Vielen Danke f&uuml;r ihre Email</div>';
				} else {
					$result = '<div class="alert alert-danger"><strong>Achtung!</strong> Es ist ein Fehler aufgetreten. Versuchen Sie es sp&auml;ter erneut.</div>';
				}
			} else {
				$errorNachricht = "Bitte eine Nachricht eingeben!";
			}
		} else {
			$errorEmailAdresse = "Bitte eine korrekte Email Adresse eingeben!";
		}
	} else {
		$errorName = "Bitte Vor- und Nachname eingeben!";
	}
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Luca Marti">

<title>Malatelier Wiwize</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="css/modern-business.css" rel="stylesheet"> -->
<!-- Custom CSS -->
<link href="css/cover.css" rel="stylesheet">
<link href="css/app.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
</head>

</head>

<body>
<?php
include_once 'includes/navigation.php';
?>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="opacity content">
				<div class="cover-container">
					<div class="inner cover">
						<h1 class="cover-heading">Kontakt</h1>
						<?php
						if ($result != "") {
							echo $result;
						}
						?>
						<form class="form-horizontal" method="post" action="kontakt.php">
							<div class="form-group">
								<label for="name" class="col-md-2 control-label">Name</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="name" name="name"
										placeholder="Vor- und Nachname" required>
										<?php
										
										if ($errorName != "") {
											echo "<div class='alert alert-danger'>$errorName</div>";
										}
										?>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-2 control-label">Email</label>
								<div class="col-md-10">
									<input type="email" class="form-control" id="email"
										name="email" placeholder="Email Adresse" required>
										<?php
										
										if ($errorEmailAdresse != "") {
											echo "<div class='alert alert-danger'>$errorEmailAdresse</div>";
										}
										?>
								</div>
							</div>
							<div class="form-group">
								<label for="nachricht" class="col-md-2 control-label">Nachricht</label>
								<div class="col-md-10">
									<textarea class="form-control" placeholder="Nachricht"
										rows="10" name="nachricht" required></textarea>
									<?php
									
									if ($errorNachricht != "") {
										echo "<div class='alert alert-danger'>$errorNachricht</div>";
									}
									?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-2">
									<input id="submit" name="submit" type="submit" value="Send"
										class="btn btn-primary">
								</div>
							</div>
						</form>
					</div>

					<div class="mastfoot">
						<?php include_once 'includes/footer.php';?>
					</div>

				</div>
			</div>
		</div>

	</div>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>
