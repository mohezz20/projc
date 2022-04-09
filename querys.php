<?php
    $q=[];
    $q['login']="select * from users where email= '$email' and pass=PASSWORD('$pass')";
?>