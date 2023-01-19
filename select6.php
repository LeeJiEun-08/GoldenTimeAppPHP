<?php
    $con = mysqli_connect("10.1.4.110", "root", "123456", "user");
    mysqli_query($con,'SET NAMES utf8');

    @$user_id = $_POST["user_id"];
    @$user_pw = $_POST["user_pw"];

    $statement = mysqli_prepare($con, "SELECT * FROM tb_user1 WHERE user_id = ? AND user_pw = ?");
    mysqli_stmt_bind_param($statement, "ss", $user_id, $user_pw);
    mysqli_stmt_execute($statement);


    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $user_pw, $user_nm);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["user_id"] = $user_id;
        $response["user_pw"] = $user_pw;
        $response["user_nm"] = $user_nm;
    }

    echo json_encode($response);



?>