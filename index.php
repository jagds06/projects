<?php include ('config/setup.php'); ?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?= $site_title.' | '.$page_title ?> </title>
		
		<?php
			include ('config/css.php');
			include ('config/js.php');
		?>
		
	</head>

	<body>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact</a></li>	
					</ul>
				</div>
			</nav>		<!-- END nav -->


		<div class="container">
			<h1>Container Area</h1>
		</div>
		
		<footer id="footer">
			<div class="container">
				<p>This is my footer</p>
			</div>
			
		</footer>
	</body>

</html>