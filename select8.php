<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	createStudent();
}


function createStudent()
{
	global $connect;
	
    $user_id = $_POST["user_id"];
    $kid_nm = $_POST["kid_nm"];
    $kid_gend = $_POST["kid_gend"];
    $kid_bir = $_POST["kid_bir"];
    $kid_guard_nm = $_POST["kid_guard_nm"];
    $kid_guard_tel1 = $_POST["kid_guard_tel1"];
    $kid_guard_tel2 = $_POST["kid_guard_tel2"];
    $kid_img_url = $_POST["kid_img_url"];


    $query = "Insert into tb_kid_copy(user_id, kid_nm, kid_gend, kid_bir, kid_guard_nm, kid_guard_tel1, kid_guard_tel2, kid_img_url) VALUES ('$user_id', '$kid_nm', '$kid_gend', '$kid_bir', '$kid_guard_nm', '$kid_guard_tel1', '$kid_guard_tel2', '$kid_img_url');";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);

	
}

$response = array();
$response["success"] = true;


echo json_encode ($response);



?>