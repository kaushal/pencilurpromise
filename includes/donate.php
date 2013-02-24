<?php
	$query = mysql_query("SELECT * FROM TransTable")
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width"/>

	<title>Pencil UR Promise</title>

	 <!-- Included CSS Files -->
    <link type="text/css" rel="stylesheet" href="css/templates.css" />
    <link type="text/css" rel="stylesheet" href="css/class.css" />
    <link type="text/css" rel="stylesheet" href="css/override.css" />
    <link type="text/css" rel="stylesheet" href="css/lightbox.css" />

    <!-- Included JavaScript Files -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-json.js"></script>
    <script type="text/javascript" src="js/templates.js"></script>
    <script type="text/javascript" src="js/pop.js"></script>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
</head>
<body>

	<div class="row">
		<div class="twelve columns">
			<!--Includes Navigation-->
			<?php include("nav.php") ?>
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">
	<form method="post" action="index.php">
				<!-- Main Content -->
		<div class="row">

					<!-- Create new group -->
			<div class="six columns">
				<div class="row">
				<input type="text" placeholder="Please enter donation Amount"/>
				</div>
				<div class="row">
					<a href="../index.php"><input type="submit" class="button-resize small round button" value="Submit"/></a>
				</div>
			</div>

		</div>
	</form>
	</div>
	</div>
	
	<div class="row text-center">
		<p class=copy>Copyright &copy; 2013, Code 4 Good!</p>
	</div>


</body>

