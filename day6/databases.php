<pre>
<?php
class Tweet{}

$db= new mysqli('127.0.0.1','root','','sait_twitter');
// $result=$db->query('SELECT * From tweets');
// var_dump ($db);
$id='1';
$result=$db->query('select content from tweets WHERE id='.$id);
// var_dump($result, $db->error);
$tweets=[];
foreach($result as $row)
{
    $tweet=new Tweet();
    $tweet->content=$row['content'];
    // $tweet->date=$row['date'];
    $tweets[]=$tweet;
    // var_dump($row);
}
var_dump($tweets);