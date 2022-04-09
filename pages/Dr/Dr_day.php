<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>
     تقرير حضور الطلاب اليومي
    </title>
</head>
 <body dir="rtl" align="center">

    <h1> <p align="center">
           <u> تقرير حضور طلاب الفرقة(        ) اليومي</u> 
     </p> </h1>
     <div>
       <p dir="rtl"  >
         <span>  <h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;التاريخ: <input type="date" name="date" value="التاريخ"> </h3></span> 
       <h3> &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;المادة : <input type="text" name="name"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        دكتور المادة: <input type="text" name="name"> </h3>
         <!-- ستكتب هنا معادلات الجمع والطرح  -->


        <span> <h3> عددالحاضرين : <input type="text" name="nnumber"></span>
         <span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              عدد الغائبين: <input type="text" name="number"> </h3></pre></span>
            <span>  <h3> &nbsp;&nbsp;
               &nbsp;&nbsp;المجموع الكلي: <input type="text" name="number"> </h3></span>
          <h3>  </h3>
        </p> </div>
        
     
        <table border="4" width="40%" height="40%" align="center" >
       

         <thead>
             <tr>
                 
                 <th>أسماء الطلاب الحاضرين </th>
                 
                 <th>أسماء الطلاب الغائبين </th>
                 <tbody>
                  {{rc.dd}}
                 </tbody>
         </thead>
         
  <div>
    <span>  <h3> نسبة الحاضرين : <input type="text" name="number"></span>
      <span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          نسبة الغائبين: <input type="text" name="number"> </h3></pre></span>
      <span>  <h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        النسبة الكلية: <input type="text" name="number"> </h3></span>
      <h3>  </h3></div>
    </p> 
</body>
</html>