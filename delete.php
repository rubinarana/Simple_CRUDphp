<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM userform WHERE id = $id ";

$query = mysqli_query($con, $q);

header('location:display.php');

?>