<?php
require_once 'TinyPNG.php';
$key = 'ugcxuJOycqbZWShsOCalUz7TepcXrlq5'; //Get from https://tinypng.com/developers

$image_url = '1.jpg';
$tinified_url = get_tinified_url($image_url,$key);

// now save the image
$compressed_file_name = '2.jpg';
file_put_contents($compressed_file_name,file_get_contents($tinified_url));