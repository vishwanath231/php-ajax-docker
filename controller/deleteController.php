<?php

include '../config/db.php';

$id = $_REQUEST['id'];


$sql = "DELETE FROM users WHERE id=$id";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo " Data Deleted!";
}else {
    echo "fail to delete";
}


?>