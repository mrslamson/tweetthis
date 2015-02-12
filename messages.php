<?php

include("constants.php");

$result = mysql_query('SELECT * FROM messages ORDER BY id DESC');

if (!$result) {
	die("Noooooooooo".mysql_error());
}

$messages = array();

while ($row = mysql_fetch_assoc($result)) {
	$messages[] = $row;
}

echo json_encode($messages);

 

mysql_close($db);
