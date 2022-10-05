<?php

include '../config/db.php';

$data = json_decode(file_get_contents("php://input"));

$name = $data->username;
$email = $data->email;


$sql = "INSERT INTO users(name,email) VALUES('$name', '$email')";
$query = mysqli_query($conn,$sql);

if ($query) {
    echo "Data inserted!";
}else{
    echo "fail to insert";
}



?>