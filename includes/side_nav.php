<?php
	//$data = mysql_query("SELECT * FROM GroupTable") or die(mysql_error());
	//$data = mysql_query("SELECT * FROM People") or die(mysql_error());

?>
<div class="three pull-nine mobile-four columns">
	<ul class="nav-bar vertical">
		<li>
			<a href="donate.php"> Make a Promise</a>
		</li>
		<li>
			<a href="group.php">View/Create Groups</a>
		</li>
		<form method="post" action="index.html" id="CountryForm">
			<li class="has-flyout">
				<a href="#">Choose a Country</a>
				<ul class="flyout">
					<?php

						while($info = mysql_fetch_array($data)){
							echo "<li>".$info['PID']."</li>";
						}
					?>
				</ul>
			</li>
		</form>
	</ul>

	<hr>
	<!--FACEBOOK INTEGRATION -->

	<div class="row">
		<?php include 'side_fb.php' ?>
	</div>

	<!-- goes in index -->
</div>