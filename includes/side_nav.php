<?php
	//$data = mysql_query("SELECT * FROM People") or die(mysql_error());
?>
<div class="three pull-nine mobile-four columns sidenav_custom">
	<br>
	<!--Donate-->
	<div class="row">
		<a class="button-resize small round button" href="donate.php">Make a Promise</a>
	</div>

	<hr>
	<!--View/Create Groups-->
	<div class="row">
		<a class="button-resize small round button" href="group.php">View/Create a Group</a>
	</div>

	<hr>
	<!--Country Selection -->
	<div class="row">
		<div href="#" class="button-resize small round button dropdown">
			Choose a Country
			<ul>
		   		<!-- php queries for country -->
		   	</ul>
		</div>
	</div>	

	<br> 
	<!--School Selection-->
	<div class="row">
		<div href="#" class="button-resize small round button dropdown">
			Choose a Project
			<ul>
		   		<!-- php queries for country -->
		   	</ul>
		</div>
	</div>

	<hr>
	<!--FACEBOOK INTEGRATION -->

	<div class="row">
		<?php include 'side_fb.php' ?>
	</div>

	<!-- goes in index -->
</div>