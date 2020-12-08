<?php

include("top.php");
?>
<html>
<head>  
 <style>  
     table{
         width: 800px;
         height: 300px;
     }
         label
         {
             color: red;
         }
     input[type=submit],input[type=reset]{
         background-color:bisque;
         color: green;
         height:50px;
         width: 50px;
         border: none;
         border-radius: 4px;
     }
     input[type=submit]:hover,input[type=reset]:hover{
         background-color: beige;
     }
    </style>   
<title>PAYMENT FORM
</title>
</head>
<body>
<form action="" method="post">
<h1 style="position:relative;left:400px;top:100px;color:blue";>PAYMENT FORM</h1>
<table style="position:relative;left:400px;top:100px">
<tr>
    <td><label>payment type</label></td>
    <td>
    <a href="online payment.php?id=<?php echo $tbl[$i][0];?>">online payment</a></td>
    <td>
    <a href="cash on delievery.php?id=<?php echo $tbl[$i][0];?>">cash on delievery</a></td>
    </tr>
    <tr>
    <td><input type="submit" value="Submit"></td>
    <td><input type="reset" value="Reset"></td>
    </tr>
    
    </table>
    </form>
    </body>
    </html>



    
     
            

































