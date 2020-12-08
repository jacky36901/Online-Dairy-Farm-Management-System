<?php include_once("../shares/db/mydatabase.inc");
include("top.php")
?>    
<html>
<head>
<title>category</title>
<style>

  body {background:url(../img/milk2.jpg) no-repeat top fixed ;
        background-size:cover;
      }
     
input[type=text],textarea,select
{
  border-radius:4px;
  width:300px;
  height:40px;
 }
  
    .s1{
        position: absolute;
        top: 50%;
        left: 70%;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 300px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.6);
       color:burlywood; 
    }    
label,h1
{
  color:white;
}
input[type=submit]
{
  background-color:white;
  color:black;
  border:none;
  border-radius:4px;
  height:30px;
  width:50px;
}
input[type=submit]:hover
{
  background-color:red;
}
table
{
    
  height:200px;
}
 </style>
</head>
	
  <?php
$sql="select ifnull(max(brand_id),0)+1 from tbl_brand";
$tbl=getDatas($sql);
?>   
<body>
<center>
     <div class="s1">
    
<h1>BRAND</h1>
<form action="" method="post" enctype="multipart/form-data">
<table>
     <tr>
<td>
<label>BRAND ID:</label></td> 
<td>    
    <input type="text" name="cat_id" value="<?php echo $tbl[0][0];?>" readonly="">
    </td></tr>
<tr>
<td><label>BRAND NAME</label></td>
<td> <input type="text" name="cat_type" onkeypress="return verifyText(event,'err')" required>
</td>
</tr>
</table>
<input type="submit" name="submit" value="ADD">
</form>
    </div>
</center></body>
</html>
<?
if(isset($_POST['cat_id']))
 {
$a=$_POST['cat_id'];
$b=$_POST['cat_type'];
$sql="select brand_name from tbl_brand where brand_name='$b' ";
	 $tbl=getDatas($sql);
	 $c=$tbl[0][0];
	 if($c==''){
		 
$sql="insert into tbl_brand values('$a','$b')";
setDatas($sql); 
    
msgbox("successfully added"); 
         nextpage('view_brand.php');
	 }
   else{
	   msgbox("Brand exist"); 


   }
 }
		
	
	/*else
	{
		echo "Invalid file";
	}
*/
?>