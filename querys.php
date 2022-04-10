<?php
    $q=[];
    $q['login']="select * from users where email= '$email' and pass=PASSWORD('$pass')";
    $q['levels']="select name , id from levels where part_id = ". $_POST['part_id'];
?>