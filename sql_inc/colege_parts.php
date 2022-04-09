<?php
$sql="select parts.id as '{{p_id}}' , parts.name as '{{p_name}}' from parts , collages 
where parts.collage_id =  collages.id and collages.admin_id=  ". $_SESSION['user_id']
?>