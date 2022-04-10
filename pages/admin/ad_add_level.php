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
        لادخال فرقة لكلية 
        {{collage_name}}
        وذلك لقسم 
        {{part_name}}
        يرجي ادخال اسم الفرقة
    </div>
    <form action="" method="post">
        <div>
            <label for="">اسم الفرقة</label>
            <input type="text" name="name">
            <input type="hidden" name="part_id" value="from_post{{part_id">
            <input type="hidden" name="page" value="admin/ad_add_level.php">
            <input type="hidden" name="form_name" value="add_level">
        </div>
        <br /><br />
        <input type="submit" name="send" value="ارسال">
    </form>
    <img src="./images/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
          <form action="" method="post" name="gooo">
          <input type="hidden" name="page" value="admin/ad_main.php">
          </form>
</body>

</html>