<?php
$db = mysql_connect('localhost', 'janedoe', 'password');
if (!$db) {
    die('Could not connect: ' . mysql_error());
}
else {
	
	mysql_select_db('tweet_this', $db);
}



