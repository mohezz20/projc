<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body align="center" dir="rtl">
<!--
    <div>
        <select name="colege" id="col1" onchange="dd()">
            <option value="1">jvfdm k,udm</option>
            <option value="1"> mid</option>
        </select>
        <select name="part" id="p1">

        </select>
    </div>
    <script>
        function dd() {
            po = document.createElement('option')
            po.innerHTML = '<option value="50">تكنولوجيا</option>'
            document.getElementById('p1').appendChild(po);
        }
    </script>
    -->
    <form action="" method="post">
        الاسم الحقيقي
        <input type="text" name="name" value="" required>
        إيميل الطالب
        <input type="email" name="email" value="" required><br /><br />
       <!-- 
           الفرقة

        
        <select name="level_name">
            <option value="">الأولي</option>
            <option value="">الثانية</option>
            <option value="">الثالثة</option>
            <option value="">الرابعة</option>
        </select>
        -->
        الرقم السري
        <input type="password" name="password">
        <input type="hidden" name="role" value="stu">
        <input type="hidden" name="level_id" value="from_post{{level_id">
        <input type="hidden" name="form_name" value="create_stu">
        <input type="hidden" name="page" value="admin/ad_add_stu.php">
        <br /><br /><br />
        <input type="submit" name="send" value="إرسال">
    </form>
    <input type="submit" name="view" value="">
    <img src="./images/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()">
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" value="admin/ad_main.php">
    </form>
</body>

</html>