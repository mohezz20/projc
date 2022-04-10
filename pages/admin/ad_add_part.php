<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="rtl" align="center">
    <div>
        أقسام كلية 
        {{collage_name}}
    </div>
    <form action="" method="POST">
        <div>
            <input type="text" name="name">
        </div>
        <br/><br/>  
        <input type="hidden" name="collage_id" value="{{collage_id}}">
        <input type="hidden" name="form_name" value="add_part">
        <input type="hidden" name="page" value="admin/ad_add_part.php">
        <input type="submit" name="send" value="إرسال" >
    </form>  
          <input type="submit" name="view" value="عرض" > 
          <img src="./images/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
          <form action="" method="post" name="gooo">
          <input type="hidden" name="page" value="admin/ad_main.php">
          </form>

</body>
</html>