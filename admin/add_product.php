<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php");
?>
<html>
<head>
<title>medicine</title>
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
    top: 80px;
	height:500px;
}
</style>
</head>
    <?php
$sql="select ifnull(max(item_id),0)+1 from tbl_product";
$tbl=getDatas($sql);
?>
     
<body>
    <div style="position:relative;top:450px;">
<center>
    <div class="s1">
<h1>ADD PRODUCT</h1>
<form action="" method="post" enctype="multipart/form-data">

<table style="position:relative;top:35px;">
 <tr>
<td>
<label>PRODUCT ID:</label></td> 
<td>    
    <input type="text" name="item_id" value="<?php echo $tbl[0][0];?>" readonly="">
    </td></tr>
<tr>
<td>
<label>PRODUCT NAME:</label></td> 
<td><input type="text" name="item_name" onkeypress="return verifyText(event,'err')"  required></td></tr>
   <tr>
<td>
<label>PRODUCT BRAND:</label></td> 
    <?php   
    $sql="select brand_name from tbl_brand";
    $tbl=getDatas($sql);
    ?>
<td><select name="item_brand"  required>
    <option>--Select Brand--</option>
    <?php   
    foreach($tbl as $row){
        
        ?>

<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php  }
    ?>
</select>
       </td></tr>
<tr>
<td>
<label>PRODUCT TYPE:</label></td> 
    <?php   
    $sql="select cat_type from tbl_category";
    $tbl=getDatas($sql);
    ?>
<td><select name="item_type" required>
    <option>--Select type--</option>
    <?php   
    foreach($tbl as $row){
        
        ?>

<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php  }
    ?>
</select>
</td>
    </tr>
<tr>
<td>
<label>PRODUCT WEIGHT:</label></td> 
<td><input type="text" name="dosage" onkeypress="return verifyText(event,'err')"  required></td></tr>
<tr>
<td>
<label>DESCRIPTION:</label></td> 
<td><input type="text" name="item_dtls" required></td></tr>
<tr>
<td>
<label>AMOUNT/ITEM:</label></td> 
<td><input type="text" name="amnt" required></td></tr>
    <tr>
	
<td>
<label>IMAGE</label></td> 
<td><input type="file" name="file" required></td></tr>
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
	$fldr = "../uploads";
	$allowedExts = array("jpg", "gif", "jpeg","mp4");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	$f=$_FILES["file"]["name"];
	
	//echo "upload/$f";

	
	$size = $_FILES["file"]["size"];
	if($_FILES["file"]["size"] > 5000000)
	{
		die("File Size is ".($size/1000000)."MB, Maximum allowed size is 5MB");
	}
	if ((($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "video/mp4"))
	
	&& ($_FILES["file"]["size"] <= 50000000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " .$_FILES["file"]["error"]. "<br />";
		}
		else
		{
		if (file_exists("$fldr/" .$_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"$fldr/" . $_FILES["file"]["name"]);
			

			$mv_name = $_FILES["file"]["name"];		
			$mv_type = $_FILES["file"]["type"];
				$fname=$fldr."/".$mv_name;
			$mv_size = $_FILES["file"]["size"];
		}
			if(isset($_POST['item_id']))
 {
$a=$_POST['item_id'];
$b=$_POST['item_name'];
$c=$_POST['item_type'];
$d=$_POST['item_dtls'];
$e=$_POST['dosage'];
$f=$_POST['amnt']; 
//$f=$_POST['amnt']; 
     $g=$_POST['item_brand']; 
	 // $i=$_POST['qua']; 
	 $sql="select pur_id from tbl_purchase_master where  vendor_cmpny='$g'";
	 $tbl=getDatas($sql);
     $bid=$tbl[0][0];
	 echo $bid;
$sql="insert into tbl_product values('$a','$b','$g','$c','$fname','$d','$e','$f','0','$bid')";
setDatas($sql); 
  //  $sql="INSERT INTO `tbl_purchase_child`(`vendor_id`, `product_id`, `quantity`, `price`) VALUES ('$bid','$a','0','$f')";
	// setDatas($sql);
msgbox("successfully added");    
 }
		}
        
		}
	
	/*else
	{
		echo "Invalid file";
	}
*/
?>