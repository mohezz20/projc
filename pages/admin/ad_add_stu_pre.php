<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        لاضافة طالب يرجي إختيار القسم والفرقة
    </div>
<script src="./js/jquery.js"></script>
<script>
    p={};
    p['part_id']
    $.post("./index.php",p,function(datatext){
        alert(datatext);
    });
</script>
</body>

</html>