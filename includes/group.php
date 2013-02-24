<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width"/>

	<title>Pencil UR Promise</title>

	 <!-- Included CSS Files -->
    <link type="text/css" rel="stylesheet" href="includes/css/templates.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/class.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/override.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/lightbox.css" />

    <!-- Included JavaScript Files -->
    <script type="text/javascript" src="includes/js/jquery.js"></script>
    <script type="text/javascript" src="includes/js/jquery-json.js"></script>
    <script type="text/javascript" src="includes/js/templates.js"></script>
    <script type="text/javascript" src="includes/js/pop.js"></script>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
</head>
<body>

	<div class="row">
		<div class="twelve columns">
			<!--Includes Navigation-->
			<?php include("nav.php") ?>
		</div>
	</div>

	<form>
	<!-- Main Content -->
	<div class="row">

		<!-- Create new group -->
		<div class="six columns">
			
				<input type="text" placeholder="Enter Group Name"/>
				<input type="text" placeholder="Donation Amount"/>
				<form method="post" action="index.php">
			        <select id="customDropdown1" name="gender" style="width:75%">
			            <option value="">Choose a Country to View</option>
			            <option value='1'>Guatemela</option>
			            <option value='2'>Laos</option>
			            <option value='3'>Nicaragua</option>
			        </select>
        <hr>
        <input type="submit" class="button-resize small round button" value="Submit"/>
		</div>

		<!-- Choose from existing groups -->
		<div class="six columns">

			<label for="customDropdown">View an existing project</lable>
			<select style="display:none;" id="customDropdown">
				<option SELECTED>Project Guata</option>
				<option>Help Nicaragua!</option>
				<option>Laos needs help!</option>
			</select>
		</div>
	</div>
	</form>

</body>

