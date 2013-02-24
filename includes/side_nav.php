<?php
	$data = mysql_query("SELECT ProjID, Country FROM ProjTbl") or die(mysql_error());
?>
<div class="three pull-nine mobile-four columns">
	<ul class="nav-bar vertical">
		<li>
			<a href="donate.php"> Make a Promise</a>
		</li>
		<li>
			<a href="group.php">View/Create Groups</a>
		</li>
	</ul>
		<hr>
		<form method="post" action="index.php">
			<select id="customDropdown1" name="gender">
					<option value="">Choose a Country to View</option>
					<?php
						while($info = mysql_fetch_array($data)){
							echo "<option value='".$info['ProjID']."'>".$info['Country']."</li>";
						}
					?>
			</select>
			<hr>
			<input type="submit" class="button-resize small round button" value="submit"/>
			<br>
		</form>

	<!--FACEBOOK INTEGRATION -->

	<div class="row">
		<?php include 'side_fb.php' ?>
	</div>

	<!-- goes in index -->
</div>