<?php 
    $con = mysqli_connect("10.1.4.110", "root", "123456", "user");

    $user_id = $_POST["user_id"];
   
    $statement = mysqli_prepare($con, "SELECT user_id FROM tb_user1 WHERE user_id = ?");
    mysqli_stmt_bind_param($statement, "s", $user_id);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id);

    $response = array();
    $response["success"] = true;
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"]=false;
        $response["user_id"]=$user_id;
    }
   
    echo json_encode($response);

?>