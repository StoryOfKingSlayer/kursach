<?php
include_once('db.php');
$word  = '';
if (isset($_POST['word'])) {
    $word =  $_POST['word'];
}
filter($link, $word);
function filter($link, $word)
{
    $listContacts = mysqli_query($link, "SELECT * FROM `contacts` WHERE `name` LIKE '%{$word}'");
    
    while ($result = mysqli_fetch_array($listContacts)) {
        echo $result['name'];
    }
}
