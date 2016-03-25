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
<?php include_once 'includes/database.php';
include_once 'model/Post.php'; 


$selectQuery = "select Id, Text from post where PageId = 1 limit 0,1;";
$result = $conn->query($selectQuery);
$post = new Post();

while($rec = $result->fetch_assoc()){
	$post->setId($rec['Id']);
	$post->setText($rec['Text']);
	
}

?>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Malatelier wiwize</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Malatelier</a></li>
					<li><a href="#">Maltherapie</a></li>
					<li><a href="#">&Uuml;ber mich</a></li>
					<li><a href="#">Kontakt</a></li>
					<li><a href="#">Anl&auml;sse</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="opacity">
				<div class="cover-container">
					<div class="inner cover">
						<h1 class="cover-heading"><?php echo $post->getText(); ?></h1>
						<p class="lead">Ich freue mich &uuml;ber Ihr Interesse. In meinem
							Malatelier biete ich intuitives Malen und Zeichnen, sowie
							Maltherapie an.</p>
						<p class="lead">
							<a href="#" class="btn btn-lg btn-default">Mehr erfahren</a>
						</p>
					</div>

					<div class="mastfoot">
						<div class="inner">
							<p>
								Cover template for <a href="http://getbootstrap.com">Bootstrap</a>,
								by <a href="https://twitter.com/mdo">@mdo</a>.
							</p>
						</div>
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
