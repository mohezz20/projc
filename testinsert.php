<?php
include './autoInsert.php';

$ins =new autoInsert();
$ins->iConnect('root','');
$ins->iSelect('test');
//$ins->iInsert('stu',$_POST);

$ins->iUpdate('stu',$_POST,' id = 9 ');
$res = mysqli_query($ins->db_conn,"SELECT PASSWORD('123456') as pass ");
$x= $res->fetch_assoc()['pass'];
var_dump($x);
?>
