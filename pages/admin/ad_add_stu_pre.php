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
        
            <select name="level" id="level">

            </select>
            <div id="divlevel">

                <select name="level" id="templ">

                </select>
            </div>
            <img src="./images/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()">
            <form action="" method="post" name="gooo">
                <input type="hidden" name="page" value="admin/ad_main.php">
            </form>
            <script src="./js/jquery.js"></script>
            <script>
                function fill_level() {
                    let opt;
                    var opts = document.getElementById('level').options;
                    for ( opti of opts) {
                        //alert(opts);
                        //document.getElementById('level').removeChild(opts[index]);
                        opti.remove();
                    }
                    
                    x=document.getElementById('parts'); 
                    p = {};
                    p['part_id'] = x.value;
                    p['form_name'] = 'get_levels';
                    $.post("./index.php", p, function(datatext) {
                        console.log(datatext);
                        ops = JSON.parse(datatext);
                        
                        if(ops.length>0){
                            console.log(opt);
                            
                            for ( op of ops ) {
                                //const element = array[index];
                                //alert(ops[index]['name']) ;
                                 opt = document.createElement("option");
                                opt.value = op['id'];
                                opt.innerText = op['name'];
                                //newselect.appendChild(opt);
                                document.getElementById('level').appendChild(opt);
                            }
                            
                        }
                        
                        //alert(ops[0]['name'])
                        
                    });
                    
                }
            </script>
</body>

</html>