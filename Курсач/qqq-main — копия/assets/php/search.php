<?php
include('db.php');
$word  = '';
if (isset($_POST['word'])) {
    $word = $_POST['word'];
    $listContacts = mysqli_query($link, "SELECT * FROM `contacts` WHERE `name` LIKE '%$word%'");

    if (mysqli_num_rows($listContacts) > 0) {
        while ($result = mysqli_fetch_array($listContacts)) {
            echo $result['name'] . "<br/>";
        }
    } else {
        echo "<p style='color:red'>User not found...</p>";
    }
}
