<pre>
<?php
class User{}
class Tweet{}

$db= new mysqli('127.0.0.1','root','','sait_twitter');
$result=$db->query('SELECT * From tweets');
$result=$db->query('SELECT * From tweets');
// var_dump ($db);
$id='1';