
<html >

<head>
    <style>
        #chatbox {
    width: 600px;
    height: 400px;
    background-color: rgb(193, 252, 227);
    margin: 0 auto;
    }
    
    input[type='text'] {
        display: block;
        margin: 10px auto;
        width: 600px;
        height: 30px;
    
    }
    
    input[type='submit'] {
        display: block;
        margin: 0px auto;
        width: 600px;
        height: 30px;
        background-color: forestgreen;
        border: 1px solid forestgreen;
        color: white;
    }
    input[type='submit']:hover{
        background-color: transparent;
        color: forestgreen;
    }

    </style>
    
    <title>Student chat</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        $(document).ready (function () {
          function getdata(){

            $.ajax({
              url:"senddata.php",
              type:"post",
              data:{n:name,m:msg},
            });
       

          }
          $('#sendbtn').click(function (e) {
              e.preventDefault();            /* //   لعدم عمل لريفريش عند الضغط علي زرار ارسال */

/* //   استدعاء القيمة الموجوده في الرسالة والاسم */
              var name =$('#nickname').val();
              var name =$('#msg').val();
              $.ajax({
              url:"senddata.php",
              type:"post",
              data:{n:name,m:msg},
              success: function(text){
                  alert(text);
              }
              });
              $('#msg').val("")
            
        });
    });

    </script>
    
</head>
<body>
    
   <h1 style="text-align: center"> Student chatroom</h1>
        
        <div id="chatbox">
            
        </div>
       
   <form >
    <input type="text" id="nickname" placeholder="ادخل اسمك">
    <input type="text" id="msg" placeholder="ادخل الرسالة">
    <input type="submit" id="sendbtn" value="ارسال">

   </form>
</body>
</html>