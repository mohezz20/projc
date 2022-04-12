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
        لاضافة طالب يرجي إختيار القسم ثم الفرقة
    </div>
    <div>
        <select name="parts" id="parts" onchange="fill_level()">
            {{colege_parts}}
        </select>
        <select name="level" id="level" onchange="fill_level()">
            
        </select>
    </div>
    <img src="./images/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
          <form action="" method="post" name="gooo">
                <input type="hidden" name="page" value="admin/ad_main.php">
          </form>
          <div id="noparts" style="visibility:hidden">
            <p>
                يبدو أنك لم تقم بإدخال اقسام لهذه الكلية 
                <br>
                يرجي إدخال الاقسام أولاً

            </p>
            <form action="" method="post" name="goback">
                <input type="hidden" name="page" value="admin/ad_add_part.php">
                <input type="submit" value="أضف فسم" >
            </form>
          </div>
<script src="./js/jquery.js"></script>
<script>
window.onload= checkparts;
    
    function fill_level(){
        x=document.getElementById('parts')
        //alert(x.value);
        //this.options[this.selectedIndex].value
        var levels = document.getElementById('level').options;
        var indexs = levels.length;
        while (indexs--) {
            document.getElementById('level').remove(indexs);
        }
        
        p={};
        p['part_id']=x.value;
        p['form_name']='get_levels';
        $.post("./index.php",p,function(datatext){
        //alert(datatext);
        ops=JSON.parse(datatext);
        for (let index = 0; index < ops.length; index++) {
            //const element = array[index];
            //alert(ops[index]['name']) ;
            opt = document.createElement("option");
            opt.value= ops[index]['id'];
            opt.innerHTML = ops[index]['name'];
            document.getElementById('level').appendChild(opt);
        }
        //alert(ops[0]['name'])

    });
    }
    function checkparts() {
        if(document.getElementById('parts').options.length <1 ){
            document.getElementById('parts').disabled = true;
            document.getElementById('level').disabled = true;
            document.getElementById('noparts').style.visibility = "visible";

        }
    }

</script>
</body>

</html>