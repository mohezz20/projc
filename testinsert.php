<?php
include './autoInsert.php';

$ins =new autoInsert();
$ins->iConnect('root','');
$ins->iSelect('test');
//$ins->iInsert('stu',$_POST);

$ins->iUpdate('stu',$_POST,' id = 9 ')

?>