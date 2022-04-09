<?php
session_start();
include './load.php';
$db = new mysqli('localhost', 'root', '', 'our_project');
$load = new myload;
$load->db1 = $db;
//var_dump($db);
if (isset($_POST['form_name'])) {
    if (function_exists($_POST['form_name'])) {
        $_POST['form_name']();
        /* $func();
   exit(); */
    } else {
        echo 'there is wrong something';
        exit;
    }
}
if (isset($_POST['page'])) {
    $x = file_get_contents('./pages/' . $_POST['page']);
    $load->load($x);
    //echo $x;
} else {
    $x = file_get_contents('./pages/index1.php');
    $load->load($x);
    //echo $x;
}

function login()
{
    global $db;
    var_dump($db);
    extract($_POST);
    include './querys.php';
    echo $q['login'];
    $res=$db->query($q['login']);
    //var_dump($res);
    if($res->num_rows > 0){
        $row= $res->fetch_assoc();
        $_SESSION['user_id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['role']=$row['role'];
        //var_dump($_SESSION);
        include './roles.php';

        $_POST['page']=$rolelist[$_SESSION['role']].'/'.$_SESSION['role'].'_main.php';

    }else{
        $_POST['page']='login.php';
    }
}
