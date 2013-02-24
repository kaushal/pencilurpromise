<?php
	//$people = mysql_query("SELECT * FROM TransTable");
?>

<div class="row">
	<div class="twelve columns">
		<?php
			while($peeps = mysql_fetch_array($people)){
				echo "Person: ".$peeps['Pname']." , ID: ".$peeps['FBID'];
			}
		?>
	</div>
</div>