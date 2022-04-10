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
<script src="./js/jquery.js"></script>
<script>
    
    function fill_level(){
        x=document.getElementById('parts')
        //alert(x.value);
        //this.options[this.selectedIndex].value
        
        p={};
        p['part_id']=x.value;
        p['form_name']='get_levels';
        $.post("./index.php",p,function(datatext){
        alert(datatext);
        ops=JSON.parse(datatext);
        alert(ops[0]['name'])

    });
    }
</script>
</body>

</html>