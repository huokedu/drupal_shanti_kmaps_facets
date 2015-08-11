<?php
$url = 'http://subjects.kmaps.virginia.edu/features/fancy_nested.json';
$cnt = file_get_contents($url);
header('Content-Type: application/json'); 
print '[{"key": "1", "title": "Subjects", "children": ' . $cnt . '}]';
?>
