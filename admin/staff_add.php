<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php");
?>
<html>
<head>
	<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<title>pharmacist</title>
<style>
body
    {
       background:url(../img/milk3.jpg) no-repeat top fixed ;
        background-size:cover;
    }
    input[type=date],input[type=text],input[type=email],input[type=password],textarea,select
{
	
	border-radius:4px;
	width:500px;
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
    align-items: center;
}
 .s1{
        position: absolute;
right: 150px;
    top: 325px;
        transform: translate(-50%,-50%);
        width: 900px;
        height: 955px;
    border-radius:10px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.7);
       color:white; 
    }
	table{
		height: 800px;
	}
    input[type=submit],input[type=reset]
{
	background-color:white;
	color:black;
	border:none;
	border-radius:4px;
	height:30px;
	width:70px;
    align-items: center;
}
</style>
     <script src="maha.js"></script>
</head>
<?php
$sql="select ifnull(max(staff_id),0)+1 from tbl_staff";
$tbl=getDatas($sql);
?>
<body>
	
    <div class="s1" style="position:relative;left:620px;top:600px;">
		
		
<center>
<h1>ADD STAFF</h1>


<form action="" method="post">
    <table>
<tr>
<td>
<label>STAFF ID:</label></td> 
<td><input type="text" name="staff_id"value="<?php echo $tbl[0][0];?>" readonly=""></td></tr>
	<tr>	
<td>

<label>FIRST NAME:
	
	</label></td>
 <td><input type="text" name="staff_fname" placeholder="Enter your First Name here" id="name" required></td></tr><tr><td></td>
	
	<td> <p id="p0" style="position:relative;color:red;"></p></td>
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
    <div id="err" style="color:red;height:20px"></div>
<tr><td>
    <label>LAST NAME:
   </label></td>
    <td><input type="text" name="staff_lname"  placeholder="Enter your Last Name here" id="lname" required ></td>
    </tr><tr><td></td>
	<td> <p id="p1" style="position:relative;color:red;"></p></td>
                 <script>
                 $("#lname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid  name *"); 
         $('#lname').focus(); 
    }
  
});
    </script>  
	</tr>
<tr>
<td>
<label>DATE OF BIRTH:</label></td> 
<td><input type="date" name="staff_dob"  placeholder="dd/mm/yyyy" required></td></tr>
<tr>
<td>
<label>JOIN DATE:</label></td> 
<td><input type="date" name="staff_doj" placeholder="dd/mm/yyyy" required></td></tr>
<tr>
<td>
<label>GENDER:</label></td>
<td><input type="radio" name="staff_gender" value="female" checked>Female
<input type="radio" name="staff_gender" value="male">Male
</td></tr>
        <tr>
<td>
<label>HOUSE NAME:</label></td>
 <td><input type="text" name="hname"  required></td></tr>
        <tr>
<td>
<label>PINCODE:</label></td>
 <td><input type="text" name="pincode" pattern=".{6}" title="Must contain 6 digits only"  required></td></tr>
<tr>
<td>
<label>STREET:</label></td>
 <td><input type="text" name="staff_street"  required></td></tr>
<tr>
<td>
<label>CITY:</label></td>
 <td><input type="text" name="staff_city" onkeypress="return verifyText(event,'err')" required></td></tr>
<tr>
<td>
<label>DISTRICT:</label></td>
 <td><select name="staff_district" onkeypress="return verifyText(event,'err')" required>
<option>--Select category--</option>
<option value="ernakulam">ERNAKULAM</option>
<option value="kottayam">KOTTAYAM</option>
<option value="thrissur">THRISSUR</option>
<option value="kozhikode">KOZHIKODE</option>
<option value="malapuram">MALAPURAM</option>
<option value="kollam">KOLLAM</option>
<option value="alapuzha">ALAPUZHA</option>
<option value="kasargod">KASARGOD</option>
<option value="wayanad">WAYANAD</option>
<option value="thiruvananthapuram">THIRUVANANTHAPURAM</option>
<option value="idukki">IDUKKI</option>
<option value="palakkad">PALAKKAD</option>
<option value="kollam">PATHANAMTHITTA</option>
<option value="kannur">KANNUR</option>
</select>
</td>
        </tr>                                       
<tr>
<td>
<label>PHONE NUMBER:</label></td> 
<td><input type="text" name="staff_ph" required="" pattern=".{10}" title="Must contain 10 digits only"  onkeypress="return verifyPhone(this,event,'err')"></td></tr>
<tr>
<td>
<label>EMAIL:</label></td>
<td><input type="email" name="staff_email" data-error="Valid email is required." id="email" placeholder="myname@example.com" required></td></tr><tr>
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
<label>PASSWORD:</label></td>
 <td><input type="password" name="password" id="pwd" placeholder="Password" required onblur="Validatepass()";>
                        <label class="errortext" style="display:nne; color:red" id="psw_2"></label></td>
	<script>
												  function Validatepass()
												  {
													   var password = document.getElementById('pwd');
														 var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
														 if (!filter.test(password.value)) {
														  password.value="";
														  $("#psw_2").html('Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters ').fadeIn().delay(4000).fadeOut();
														   document.getElementById('pwd').style.border="1px solid red"; 
														  return false;
														  }

														  else
														  {

															 document.getElementById('pwd').style.border="1px solid green"; return true;
														  }

												  }

												  </script></tr>

        <br>
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
</body></html>
<script>
$(function(){
    $("#my_cal").datepicker({
        dateFormat :"dd/mm/yy",
        maxDate:0,
       // var day=minDate.getDay();
    });
});
</script>
<script>
$(function(){
    $("#my_cal1").datepicker({
        dateFormat :"dd/mm/yy",
        minDate:0,
       // var day=minDate.getDay();
    });
});
</script>
<?php
 if(isset($_POST['staff_id']))
 {
$a=$_POST['staff_id'];
$b=$_POST['staff_fname'];
$c=$_POST['staff_lname'];
$d=$_POST['staff_dob'];
$e=$_POST['staff_doj'];
$f=$_POST['staff_gender'];    
$g=$_POST['staff_street'];
$h=$_POST['staff_city'];
$i=$_POST['staff_district'];
$j=$_POST['staff_email'];
$k=$_POST['staff_ph']; 
$l=$_POST['password'];
$hn=$_POST['hname']; 
$pi=$_POST['pincode'];
     $sql="select username from tbl_login where username='$j'";
     $tbl=getDatas($sql);
     $em=$tbl[0][0];
        
$sql="select staff_ph from tbl_staff where staff_ph='$k'";
$tbl=getDatas($sql);
$mob=$tbl[0][0];
     
     if($em!=''){
         
      msgbox('Email Already exist!!!');
     }
     elseif($mob!='')
     {
           msgbox("This mobile number already existed");
     }
     else{
$sql="insert into tbl_staff values('$a','$b','$c','$d','$e','$g','$h','$i','$f','$k','$j','$hn','$pi')";
setDatas($sql);
$sql="insert into tbl_login values('$j','$l','staff','1')";
		setDatas($sql);
         msgbox('Successfully registerd');
     }

}

?>