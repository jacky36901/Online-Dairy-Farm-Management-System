<?php include_once("../shares/db/mydatabase.inc"); 
include("top.php")?>
<html>
	
	<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
	<head>
	
    <style>
  
    
input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width:400px;;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 6px;
    resize: vertical;
}
 .s1{
        position: absolute;
        top: 300px;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 800px;
        height: 750px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.9);
       color:white; 
    }
        body
    {
        background:url(../img/milk3.jpg) no-repeat top fixed ;
        background-size:cover;
    }
		table{
			height: 600px;
		}
        </style>
	</head>
     <script src="maha.js"></script>
	
    <?php
$sql="select ifnull(max(ret_id),0)+1 from tbl_customer";
$tbl=getDatas($sql);
?>
    <body>
		<br><br><br>
    <div style="position:relative;top:120px;">
<center>
    <div class="s1">
        <br>
        <br>
<h1>CUSTOMER REGISTRATION</h1>
<br>
    
    <form action="" method="post">
<table>
<tr>
<td>
<label>CUSTOMER ID:</label></td> 
<td>    
    <input type="text" name="ret_id" value="<?php echo $tbl[0][0];?>" readonly="">
    </td></tr>
    <tr><td></td></tr>
<tr>
<tr>
<td>
<label>CUSTOMER NAME:</label></td> 
<td><input type="text" name="ret_name" onkeypress="return verifyText(event,'err')" id="name" required></td></tr>
   <tr><td></td>
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
    </script> </tr>
<tr><td></td></tr>
    <tr>
<td>
	
	
	
<label>DATE OF BIRTH:</label></td> 
<td><input type="date"  name="ret_dob" placeholder="mm/dd/yyyy"  /><br>
<span class="error"  id="lblError"></span></td></tr>
  <tr><td></td></tr>  
	
			
<script>
$(function(){
    $("#txtDate").datepicker({
        dateFormat :"mm/dd/yy",
        maxDate:0,
       // var day=minDate.getDay();
    });
});
</script>
	
	<tr>
<td>
<label>HOUSE NAME:</label></td>
 <td><input type="text" name="hname" required></td></tr>
	
    <tr><td></td></tr>
    <tr>
<td>
<label>PINCODE:</label></td>
 <td><input type="text" name="pincode" pattern=".{6}" title="Must contain 6 digits only" required></td></tr>
	
    <tr><td></td></tr>
<tr>
<td>
<label>STREET:</label></td>
 <td><input type="text" name="ret_street" required></td></tr>
	
    <tr><td></td></tr>
<tr>
<td>
<label>CITY:</label></td>
 <td><input type="text" name="ret_city" onkeypress="return verifyText(event,'err')" id="city" required></td></tr>
	 <tr>
	<td> <p id="p01" style="position:relative;color:red;"></p></td>
                 <script>
                 $("#city").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p01').hide();
    } else {
         $('#p01').show();
       $('#p01').text("* please enter a valid  name *"); 
         $('#city').focus(); 
    }
  
});
    </script> </tr>
   <tr><td></td></tr>
   <tr>
<td>
<label>DISTRICT:</label></td>
 <td><select name="ret_district" onkeypress="return verifyText(event,'err')" required>
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
        </tr>  <tr>
<td><label>E-MAIL:
    </label></td>
<td><input type="email" name="ret_email" data-error="Valid email is required." id="email" placeholder="myname@example.com" required></td></tr><tr><td></td>
<td>
	<p id="p81" style="color:red;height:20px"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p81').hide();
    } else {
         $('#p81').show();
       $('#p81').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script></td></tr> 
<tr><td></td></tr>
    <tr>
<td>
<label>PASSWORD:</label></td>
    <td><input type="password" name="password" id="pwd" placeholder="Password" required onblur="Validatepass()";>
        </td></tr><tr><td>
    </td><td>         <label class="errortext" style="display:none;color:red;font-size:10px;" id="psw_2"></label></td>
	<script>
												  function Validatepass()
												  {
													   var password = document.getElementById('pwd');
														 var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
														 if (!filter.test(password.value)) {
														  password.value="";
														  $("#psw_2").html('Must contain at least one number,one uppercase,one lowercase letter,and at least 8 or more characters ').fadeIn().delay(4000).fadeOut();
														   document.getElementById('pwd').style.border="1px solid red"; 
														  return false;
														  }

														  else
														  {

															 document.getElementById('pwd').style.border="1px solid green"; return true;
														  }

												  }

												  </script>

</tr>

<tr>
<tr><td></td></tr>
    <tr>
<td>
<label>CONFIRM PASSWORD:</label></td>
 <td><input id="confirmpassword" type="password" name="cpwd"  onblur="return Validate()";   required/></td>
	  <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("confirmpassword").value;
        var confirmPassword = document.getElementById("myInput").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
             document.getElementById("confirmpassword").value="";
            password.focus();
           
        }
        return true;
    }
</script>
</tr>
    <tr><td></td></tr>
<tr>
<td>
<label>PHONE NUMBER:</label></td> 
<td><input type="text" name="ret_ph" required=""pattern=".{10}"title="Must contain 10 digits only" required onkeypress="return verifyPhone(this,event,'err')"></td></tr> 
<tr><td></td></tr>
   

    
    <tr><td></td></tr>
    <tr>
    <td>
     </td>
    </tr>
</table>
    <center><input type="submit" name="submit1" value="SUBMIT">
        </center>
    </form>
    </div>
</center>
    </div>
</body>
</html>

<?php

 if(isset($_POST['ret_id']))
 {
$a=$_POST['ret_id'];
$b=$_POST['ret_name'];
$c=$_POST['ret_dob'];
//$d=$_POST['ret_licenseno'];
$e=$_POST['password'];
$f=$_POST['cpwd'];    
$g=$_POST['ret_street'];
$h=$_POST['ret_city'];
$i=$_POST['ret_district'];
$j=$_POST['ret_email'];
$k=$_POST['ret_ph'];  
    $hn=$_POST['hname'];
$pi=$_POST['pincode'];  
   $sql="select * from tbl_login where username='$j'";
$tbl=getDatas($sql);
     $em=$tbl[0][0];
    
if($e==$f)
{
     //msgbox("password missmatch");

if($em=='')
 {
    
$sql="insert into tbl_customer values('$a','$b','$c','$g','$h','$i','$j','$k','$hn','$pi')";
setDatas($sql);
$sql="insert into tbl_login values('$j','$e','customer','1')";
		setDatas($sql);
		msgbox('Successfully registerd');
}
    else{
            msgbox("Email id already existed");
    }

}
     else
     {
        msgbox("password missmatch");
 
     }
 
 }

?>
 