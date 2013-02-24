<?php

	if(isset($_POST['fb_name']) && isset($_POST['fb_id'])){
		$fb_name = $_POST['fb_name'];
		$fb_id = $_POST['fb_id'];
		mysql_query("INSERT INTO Trans (Pname, FBID)
		VALUES('$fb_name', '$fb_id')");
	}
?>