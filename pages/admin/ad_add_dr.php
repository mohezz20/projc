<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body dir="rtl" align="center">
    <form action="" method="post">

        الاسم الحقيقي
        <input type="text" name="name" value="">
        الرقم السري 
        <input type="password" name="pass" value="">

        إيميل
        <input type="email" name="email" value="">
        <br /><br />
        <input type="hidden" name="role" value="dr">
        <input type="hidden" name="collage_id" value="{{collage_id}}">
        <input type="submit" name="send" id="" value="ارسال">
        <input type="hidden" name="page" value="admin/ad_add_dr.php">
        <input type="hidden" name="form_name" value="create_dr">

    </form>
    <img src="./images/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()">
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" value="admin/ad_main.php">
    </form>
</body>

</html>