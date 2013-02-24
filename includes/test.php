<?php
$index = $_REQUEST['index_id'];
$friend = $_REQUEST['friend_id'];

if(isset($index) && isset($friend)) {
   return $index + $friend;
} else {
	return "Does not work!";
}
?>
