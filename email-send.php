<?php
// Get JSON as a string
$json_str = file_get_contents('php://input');

// Convert the JSON string to an object
$json_obj = json_decode($json_str);

// Now you can access values from the JSON object:
$value = $json_obj;

echo 'Here is the JSON received';
echo $value;
?>
