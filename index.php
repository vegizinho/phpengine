<?php 

include "core/engine.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Luxura Bootstrap Template Prototype</title>

<!-- Bootstrap -->

<link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div class="fullwidth">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Luxura</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://www.mikro.hr">Mikro početna</a></li>
						<li class="dropdown"><a href="index.php">Luxura početna</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Proizvodi<span class="caret"></span>
						</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?qs=layout2">Luxura X10</a></li>
								<li><a href="index.php?qs=layout3">Luxura X5</a></li>
								<li><a href="index.php?qs=layout2">Luxura X3</a></li>
								<li><a href="index.php?qs=layout3">Luxura V10</a></li>
								<li><a href="index.php?qs=layout2">Luxura V7</a></li>
								<li><a href="index.php?qs=layout3">Luxura V5</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="index.php?qs=kontakt">Kontakt</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</div>

	
	
	
	
<!-- START Main part of the content -->
	<?php $web -> getPage($input); ?>
<!-- END Main part of the content -->
	
	
	
	
	<div class="fullwidth">
		<div class="container footer">
			<div class="row">
				<div class="col-md-12">
					<strong>Copyright
					<?php echo date('Y'); ?>
					. &copy; Mikro d.o.o. Sva prava pridržana.</strong> Zabranjeno kopiranje i
					prenošenje informacija sa stranice bez prethodne dozvole.
				</div>
			</div>
		</div>
	</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
