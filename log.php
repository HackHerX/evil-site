<?php
$file = 'logs.txt';
$data = $_GET['data'] . "\n";
file_put_contents($file, $data, FILE_APPEND);
?>
