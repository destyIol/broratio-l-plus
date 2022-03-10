<?php

$keys = array('happybirthdaysuckmycock',); 
$users = array('2805555134',); 
$ip = array('2a0d:6fc0:135:c600:44f2:ed55:e3d9:8f67',); 
$sub = $_GET["key"];
$subuser = $_GET["user"];
$subip = $_SERVER['REMOTE_ADDR'];
if (in_array($sub,$keys,TRUE)) if (in_array($subuser,$users,TRUE)) if (in_array($subip,$ip,TRUE)) {
print('~ True ~');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>
