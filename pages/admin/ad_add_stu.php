<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body align="center" dir="rtl">
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
    <form action="">
        الاسم الحقيقي
        <input type="text" name="name" value="">
        إيميل الطالب
        <input type="email" name="email" value=""><br /><br />
        الفرقة

        <select name="level_name">
            <option value="">الأولي</option>
            <option value="">الثانية</option>
            <option value="">الثالثة</option>
            <option value="">الرابعة</option>
        </select>

        الرقم السري
        <input type="password" name="password">
        <input type="hidden" name="role" value="stu">
        <input type="hidden" name="form_name" value="creat_stu">

        <br /><br /><br />
        <input type="submit" name="send" value="إرسال">
    </form>
    <input type="submit" name="view" value="">
</body>

</html>