<?php session_start();
$user=$_SESSION['userid']; 
include_once("../shares/db/mydatabase.inc");
include("top.php")
?> 
<html>
<head>
<title>feedback</title>
<style>
input[type=text],input[type=textarea],select
{
  border-radius:4px;
  width:300px;
  height:40px;
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
    .card{
 
        left:45px;
  width:575px;
    height:450px;
        top: 50px;
  margin: auto;
  text-align: center;
  font-family: arial;
    box-sizing: border-box;
        background: rgba(0,0,0,0.7);
       color:white;      
}
   
table
    {
  height:400px;
    left: 50px;
}
              body {
	 background:url(feedbk.jpg) no-repeat top fixed ;
        background-size:cover;
                  
             
}
 </style>
    </head>
    
      <?php
$sql="select ret_name from tbl_customer where ret_email='$user'";
$tbl=getDatas($sql);
$ret_name=$tbl[0][0];
?>
<?php
$sql="select ifnull(max(fb_id),0)+1 from tbl_feedback";
$tbl=getDatas($sql);
?>
<body>
<center>
    <br>
    <br>
    <br>
&nbsp;<h1>FEEDBACK</h1>
    <div class="card" >
        
<form action="" method="post">
<table>
<tr>
<td><label>FEEDBACK ID:</label></td>
<td><input type="text" name="fb_id" value="<?php echo $tbl[0][0];?>"  readonly=""></td>
</tr>
<tr>
<td><label>RETAILER NAME:</label></td>
<td><input type="text" name="ret_name" value="<?php echo $ret_name;?>" readonly=""></td>
</tr>
<tr>
<td><label>FEEDBACK:</label></td>
<td><input type="textarea" name="fb_desc" required></td>
</tr>
</table>
<input type="submit" name="submit1" value="ADD">
</form>
    </div>
</center></body>

</html>
<?
if(isset($_POST['fb_id']))
 {
$a=$_POST['fb_id'];
$b=$_POST['ret_name'];
$c=$_POST['fb_desc'];
 

$sql="insert into tbl_feedback values('$a','$b','$c')";
setDatas($sql); 
    
msgbox("successfully added");    
	}
	/*else
	{
		echo "Invalid file";
	}
*/
?>