<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php");
?>
<html>
<head>
<title>purchase</title>
<style>
      body {
	 background:url(../img/milk5.jpg) no-repeat top fixed ;
        background-size:cover;
      }
   
    input[type=date],input[type=text],input[type=email],input[type=password],textarea,select
{
	
	border-radius:4px;
	width:300px;
	height:40px;
}
label,h1
{
	color:white;
}
   

    .s1{
        position: absolute;
        top: 20%;
        left: 30%;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 637px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.9);
       color:burlywood; 
    }
input[type=submit],input[type=reset]
{
	background-color:tomato;
	color:white;
	border:none;
	border-radius:4px;
	height:30px;
	width:50px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:red;
}
table
{
    top: 180px;
	height:400px;
}
</style>
</head>
    <?php
    if(isset($_GET['id'])){
$a=$_GET['id'];
           $q=$_GET['q'];
$sql="select * from tbl_product where item_id='$a'";
$tbl=getDatas($sql);
        $vid=$tbl[0][9];
        $am= $tbl[0][7];
    }
$sql="select ifnull(max(pur_id),0)+1 from tbl_purchase_child";
$tbl=getDatas($sql);
?>
     
<body>
    <div style="position:relative;top:450px;">
<center>
    <div class="s1">
<h1>PURCHASE</h1>
<form action="" method="post" enctype="multipart/form-data">

<table style="position:relative;top:35px;">
 <tr>
<td>
<label>PURCHASE ID:</label></td> 
<td>    
    <input type="text" name="pur_id" value="<?php echo $tbl[0][0];?>" readonly="" required>
    </td></tr>
<tr>
    <tr>
<td>
<label>PRODUCT ID:</label></td> 
<td>    
    <input type="text" name="item_id" value="<?php echo $a;?>" readonly="" required>
    </td></tr>
     <tr>
<td>
<label>VENDOR ID:</label></td> 
<td>    
    <input type="text" name="ven_id" value="<?php echo $vid;?>"  readonly="" required>
    </td></tr>
<tr>
<td>
<label>AMOUNT/ITEM:</label></td> 
<td><input type="text" name="amnt" value="<?php echo $am;?>" readonly></td></tr>
    <tr>
		
<td>
<label>QUANTITY:</label></td> 
<td><input type="text" name="quantity" required></td></tr>
   
</table>
    <br><br>
<input type="submit" name="submit1" value="ADD">
    </form>
    </div>
    </center>
    </div>
    
  
    </body>
          
</html>
    		
		<?php
	
			if(isset($_POST['pur_id']))
 {
$a=$_POST['pur_id'];
$b=$_POST['item_id'];
$c=$_POST['ven_id'];
$d=$_POST['amnt'];
$e=$_POST['quantity'];
$qu=$q+$e;
     $p=$qu*$d;
	$sql="update tbl_product set quantity='$qu' where item_id='$b'";
		setDatas($sql);
 
    $sql="INSERT INTO `tbl_purchase_child`(`vendor_id`, `product_id`, `quantity`, `price`) VALUES ('$c','$b','$qu','$p')";
	 setDatas($sql);
msgbox("successfully added");    
 }
?>