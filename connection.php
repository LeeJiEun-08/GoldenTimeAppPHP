<?php

define('hostname', '10.1.4.110');
define('user', 'root');
define('password', '123456');
define('databaseName', 'user');


$connect = mysqli_connect(hostname, user, password, databaseName);

mysqli_query($connect,'SET NAMES utf8');

?>