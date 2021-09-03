<?php
$text =  $_POST['text'];

$text1 = preg_replace("/\r\n|\r|\n| |　/", "", $text);
$text2 = str_replace('{', " {\n  ", $text1);
$text3 = str_replace(';', ";\n  ", $text2);
$text4 = str_replace('}', "}\n\n", $text3);
$text5 = str_replace('*/', "*/\n", $text4);
$text6 = str_replace(':', ": ", $text5);
echo str_replace(',', ", ", $text6);

exit;
?>