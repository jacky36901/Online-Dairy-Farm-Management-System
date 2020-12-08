<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php")?>
<html>
<head>
	
	<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<title>vendor</title>
<style>
input[type=date],input[type=text],input[type=email],input[type=password],input[type=number],textarea,select
{
	
	border-radius:3px;
	width:300px;
	height:40px;
}

input[type=submit],input[type=reset]
{
	background-color:white;
	color:black;
	border:none;
	border-radius:4px;
	height:30px;
	width:70px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:red;
}
body
    {
        background:url(../img/milk5.jpg) no-repeat top fixed ;
        background-size:cover;
    }
    table
{
	height:600px;
}
    .s1{
        position: absolute;
right: 175px;
    top: 420px;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 650px;
    border-radius:10px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.7);
       color:white; 
    }
</style>
</head>
    <?php
$sql="select ifnull(max(pur_id),0)+1 from tbl_purchase_master";
$tbl=getDatas($sql);
$vid=$tbl[0][0];

?>
<body>
    <div class="s1">
    <div style="position:relative;top:10px;">
<center>
<h1>ADD VENDOR</h1>
<form action="" method="post">
<table>
<tr>
<td>
<label>VENDOR ID:</label></td> 
<td>    
    <input type="text" name="vendor_id" value="<?php echo $vid;?>" readonly="">
    </td></tr>

    <tr>
<tr>
<td>
<label>VENDOR NAME:</label></td> 
<td><input type="text" name="vendor_name" placeholder="Enter your First Name here" id="name" required></td></tr>
	
<tr>	<td> <p id="p0" style="position:relative;color:red;"></p></td>
                 <script>
                 $("#name").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#name').focus(); 
    }
  
});
    </script>  </tr>

<tr>
	<td>
		Select Brand</td>
		
		<?php 
     $sql="select brand_name from tbl_brand ";
        $tbl=getDatas($sql);
    ?>
<td><select name="brand_name" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
    <tr>
<td>
<label>STREET:</label></td>
 <td><input type="text" name="v_street" required></td></tr>
<tr>
<td>
<label>CITY:</label></td>
 <td><input type="text" name="v_city" required></td></tr>
    <tr>
<td>
<label>DISTRICT:</label></td>
 <td><input type="text" name="v_district" required></td></tr>
     <tr>
<td>
<label>PINCODE:</label></td>
 <td><input type="text" name="pincode" pattern=".{6}"title="Must contain 6 digits only" required onkeypress="return verifyPhone(this,event,'err')" required></td></tr>
<tr>
<td>
<label>PHONE NUMBER:</label></td> 
<td><input type="text" name="vendor_ph"  placeholder="Enter your mobile number here" pattern=".{10}"title="Must contain 10 digits only" required onkeypress="return verifyPhone(this,event,'err')" ></td></tr>
<tr>
<td>
<label>EMAIL:</label></td>
<td><input type="email" name="vendor_email" data-error="Valid email is required." id="email" placeholder="myname@example.com" required></td></tr><tr>
<td>
	<p id="p8" style="color:red;height:20px"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script></td>
</tr>
	
    <tr>
    <td>
    <input type="submit" name="submit" value="ADD">
        </td>
    </tr>
</table>
    </form>
</center>
   </div>
    </div>
</body>
</html>

<?php
 if(isset($_POST['vendor_id']))
 {
$a=$_POST['vendor_id'];
$b=$_POST['vendor_name'];    
$c=$_POST['v_street'];
$d=$_POST['v_city'];
$e=$_POST['v_district'];
$g=$_POST['vendor_email'];
$f=$_POST['brand_name']; 
 $h=$_POST['vendor_ph'];
 $pi=$_POST['pincode'];
      date_default_timezone_set('Asia/Calcutta');
    $time = date('h:i', time());// current time
    $date=date('Y-m-d');
     
	 //$i=$_POST['date']; 
    echo $f;
	  $sql="select vendor_cmpny from tbl_purchase_master where vendor_cmpny='$f'";
	 $tbl=getDatas($sql);
	 $cm=$tbl[0][0];
     $sql="select vendor_email from tbl_purchase_master where vendor_email='$g'";
	 $tbl=getDatas($sql);
     $em=$tbl[0][0];
     if($em==''){
	
	 if($cm==''){
$sql="insert into tbl_purchase_master values('$a','$b','$f','$c','$d','$e','$h','$g','$pi','$date')";
		setDatas($sql);
		 
		msgbox('Successfully added');
}
	 else{
		 msgbox('vendor details exist...');
	 }
     }
     else{
         		 msgbox('Email exist...');

     }
 }
?>
