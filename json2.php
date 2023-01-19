<?php
header("Content-Type:application/json");
// DB연결설정파일
$con = mysqli_connect("10.1.4.110", "root", "123456", "user");
mysqli_query($con,'SET NAMES utf8');
 
 
$query = "select * from tb_kid order by user_id desc limit 2";
$res   = mysqli_query($con, $query) or die("selecting error!");
if ($res) {
 
    $arr2 = array();
 
        $arr = array();
        while ($row = mysqli_fetch_object($res)) {
            
            $t = new stdClass();
            $t->kid_sn = $row->kid_sn;
            $t->user_id = $row->user_id;
            $t->kid_nm = $row->kid_nm;
            $t->kid_gend = $row->kid_gend;
            $t->kid_bir = $row->kid_bir;
            $t->kid_guard_nm = $row->kid_guard_nm;
            $t->kid_guard_tel1 = $row->kid_guard_tel1;
            $t->kid_guard_tel2 = $row->kid_guard_tel2;
           // $t->kid_img_url = $row->kid_img_url;
 
            $arr[] = $t;
            unset($t);
        }
 
    $arr2['kid'] = $arr;
 
} else {
    $arr2 = array(0 => 'empty');
}
 
 
echo json_encode($arr2,JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
?>