<?php
    $con = mysqli_connect("10.1.4.110", "root", "123456", "user");
    mysqli_query($con,'SET NAMES utf8');

    @$user_id = $_POST["user_id"];
    @$user_pw = $_POST["user_pw"];
    @$user_nm = $_POST["user_nm"];

    $statement = mysqli_prepare($con, "INSERT INTO tb_user1 VALUES (?,?,?)");
    mysqli_stmt_bind_param($statement, "sss", $user_id, $user_pw, $user_nm);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;


    echo json_encode ($response);

?>