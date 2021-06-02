<?php

include_once 'dbh.inc.php';

$first =$_POST['first'];
$last =$_POST['last'];
$registration =$_POST['registration'];
$stream =$_POST['stream'];
$city =$_POST['city'];

$sql = "insert into details(fname, lname, regno, stream, city) values( '$first', '$last', '$registration' , '$stream', '$city');";

mysqli_query($conn, $sql);

header("Location: ../insert_data.php?signup=success")

?>
