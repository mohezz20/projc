<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            text-align: center;
            font-size: 250%;
            border: 0.1px solid rgb(71, 200, 219);
            margin: 35px;
            text-shadow: 20px;
        }

        .card {
            box-shadow: 0 10px 8px 0 rgba(153, 232, 238, 0.2);
            transition: 0.3s;
            width: 20%;
            padding: 20px;
            margin: 50px;
            border-radius: 10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            cursor: pointer;

        }

        .container {
            padding: 2px 16px;
        }
        
    </style>
</head>


<body>
   
    <div>
        
        <div>

            <p>
                الفرقة الرابعة تكنولوجيا 
                مرحبا بك يا دكتور
            </p>
            <!-- <div>
                <h1>{{welcom}}</h1>   
            </div> -->
        </div>
        <div class="div" style="display: flex;">
            <div class="card" data-page="how" name="my1card">
                <img src="lovepik-classroom-png-image_400511310_wh1200.png" alt="" width="100%" height="60%">
                <div class="container">
                    <center>
                         <a href="">
                        <h3><b padding="50px" margin="25px">محاضرة جديدة</b></h4>
                    </center>
                   
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="images.jpg" alt="" width="100%" height="60%">
                <div class="container">
                    <center> 
                        <a href="">
                        <h3><b>التقرير الشهري</b></h4>
                    </center>
                   </a>
                        
                </div>
            </div>
            <div class="card">
                <img src="download.png" alt="reports" width="100%" height="60%">
                <div class="container">
                    <center>
                         
                        <h3><b>التقرير اليومي</b></h4>
                    </center>
                   
                        
                    
                </div>
            </div>
        </div>

    </div>
    </div>
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" id="">
    </form>

    <script>
        cards= document.getElementsByClassName('card');
        
        for (const iterator of cards) {
            iterator.addEventListener("click", submitit);
        }
    function submitit(){
        //alert(this.dataset.page);
        document.forms.gooo.elements.page.value=this.dataset.page;
        document.forms.gooo.submit();
    }
    
    </script>
</body>
</html>
