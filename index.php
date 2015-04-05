<?php 

include "core/engine.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Special Web Service PHP Engine (Bootstrap)</title>

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
					<a class="navbar-brand" href="index.php">Brand name</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a href="#">Link 1</a></li>
						<li class="dropdown"><a href="#">Link 2</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Services<span class="caret"></span>
						</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?qs=layout2">Service 1</a></li>
								<li><a href="index.php?qs=layout3">Service 2</a></li>
								<li><a href="index.php?qs=layout2">Service 3</a></li>
								<li><a href="index.php?qs=layout3">Service 4</a></li>
								<li><a href="index.php?qs=layout2">Service 5</a></li>
								<li><a href="index.php?qs=layout3">Service 6</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="index.php?qs=kontakt">Contact Us</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</div>

	
	
	
	
<!-- START Main part of the content -->
	<?php //$web -> getPage($input); ?>
	
	<div class="container">
		<div class="row">
		
			<?php $web -> getZone('bigImage')?>
			
			<div class="col-md-6">
				<h2>Some title 1</h2>
				<p>Just a simple paragraph text. Just a simple paragraph text. Just
					a simple paragraph text. Just a simple paragraph text. Just a
					simple paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text.</p>
				<h2>Some title 2</h2>
				<p>Just a simple paragraph text. Just a simple paragraph text. Just
					a simple paragraph text. Just a simple paragraph text. Just a
					simple paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text. Just a simple
					paragraph text. Just a simple paragraph text.</p>
			</div>
			<div class="col-md-3">
				<div class="list-group movedown1">
					<a href="#" class="list-group-item active">Some Model</a>
					<a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right moveright1"></span>Features</a>
					<a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right moveright1"></span>Technical data</a>
					<a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right moveright1"></span>Maintenence</a>
					<a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right moveright1"></span>Photo gallery</a>
					<a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right moveright1"></span>Brochures</a>
				</div>
			</div>
		</div>
</div>
	
	
<!-- END Main part of the content -->
	
	
	
	
	<div class="fullwidth">
		<div class="container footer">
			<div class="row">
				<div class="col-md-12">
					<strong>Copyright
					<?php echo date('Y'); ?>
					. &copy; TECHLAB LLC All Rights Reserved.</strong> Legal notice and Terms of Use.
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
