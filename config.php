<?php

 //DB 정보를 입력합니다
//  define('HOST','IP또는HOSTNAME:PORT(생략시3306)');
 define('HOST','10.1.4.110');
 define('USER','root');
 define('PASS','123456');
 define('DB','user');
 
 //DB에 접속합니다.
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('DB에 연결할 수 없습니다.');
?>
