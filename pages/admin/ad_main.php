<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="rtl" align="center">
    <style>
        .card{
            display: block;
        }
    </style>
    
        <div class="card" data-page="admin/ad_add_stu.php">إدخال طالب</div><br/><br/>
        <div class="card" data-page="admin/ad_add_dr.php">إدخال عضو هيئة التدريس</div><br/><br/>
        <div class="card" data-page="admin/ad_add_level.php">إدخال الفرقة</div><br/><br/>
        <div class="card" data-page="admin/ad_add_part.php">إدخال القسم</div><br/><br/>
        <div class="card" data-page="admin/ad_add_subj.php">إدخال المادة</div><br/><br/><br/><br/>

        <form action="" method="post" name="gooo">
        <input type="hidden" name="page" >
        <input type="hidden" name="collage_id" value="{{collage_id}}">
    </form>
    <script>
        cards= document.getElementsByClassName('card');
        
        for (const iterator of cards) {
            
            iterator.addEventListener("click", submitit);
        }
    function submitit(){
        document.forms.gooo.elements.page.value=this.dataset.page;
        document.forms.gooo.submit();
    }
    
    </script>
</body>
</html>