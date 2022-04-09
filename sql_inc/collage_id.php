<?php
$sql = "select id as '{{col_id}}' from collages where admin_id = ".$_SESSION['user_id']
?>