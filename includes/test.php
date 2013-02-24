<?php
$index = $_REQUEST['index_id'];
$friend = $_REQUEST['friend_id'];

if(isset($index) && isset($friend)) {
   
   echo $name;
   echo $friend;
   return $name;
} else {
	return "Does not work!";
}
?>
