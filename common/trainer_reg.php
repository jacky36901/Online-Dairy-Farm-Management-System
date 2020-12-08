<?php include_once("../shares/db/mydatabase.inc"); ?>
<?php include("common_top.php") ?>
<html>
<head>
<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}

.container2 {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 50%;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 60px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
</style>
<script src="maha.js"></script>
</head>
<?php
$sql="select ifnull(max(tid),0)+1 from trainer_reg";
$tbl=getDatas($sql);

?>

    <body>
        <h1 style="position:relative;left:560px;top:125px;"> TRAINER REGISTRATION</h1>
		<div id="err" style="color: red;height: 20px"></div>
        <form action="" method="post">
            <div class="container2" style="position:relative;top:150px;left:380px;">
                <div class="row">
                    <div class="col-25">
                        <label>TRAINER ID</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="tid" value="<?php echo $tbl[0][0];?>" required="">
                    </div>
                    </div>
                <div class="row">
                    <div class="col-25">
                        <label>NAME</label>
                        
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" required="" onkeypress="return verifyText(event,'err')">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>GENDER</label>
                        
                    </div>
                    <div class="col-75">
                        <input type="radio" name="radio" value="male" checked>male
                        <input type="radio" name="radio" value="female">female
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>ADDRESS</label>
                    </div>
                    <div class="col-75">
                        <textarea name="address"></textarea>
                    </div>
                </div>
                
              
                <div class="row">
                    <div class="col-25">
                        <label>EMAIL_ID</label>
                    </div>
                    <div class="col-75">
                        <input type="email" name="email" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label> PASSWORD</label>
                  
                    </div>
                    <div class="col-75">
                        <input type="password" name="password" required="">
                    </div>
                </div>
                     <div class="row">
                    <div class="col-25">
                        <label>CONFIRM PASSWORD</label>
                  
                    </div>
                    <div class="col-75">
                        <input type="password" name="cpwd" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>
                            PHONE_NO</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="phno" required="" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-25">
                        <label>
                            EXPERIENCE</label>
                    </div>
                    <div class="col-75">
                        <select name="exp">
						<option value="">-------------</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						</select>
                    </div>
                     </div>
					 
					 <div class="row">
                    <div class="col-25">
                        <label>
                            DATE OF JOINING</label>
                    </div>
                    <div class="col-75">
                        <input type="date" name="date" required="">
                    </div>
                     </div>
               
                
                <div class="row">
                        <div  style="position:relative;right:100px; top:10px">                         
                        <input type="reset" name="reset" value="Cancel">
                        </div>                        
                        <div  style="position:relative;right:150px; top:10px">                         
                         <input type="submit" name="submit" value="Register"> 
                        </div>
                        </div>
            </div>
        </form>
    </body>
</html>
<?php

if(isset($_POST['tid']))
{
$a=$_POST['tid'];
echo $a;
$b=$_POST['name'];
echo $b;
$c=$_POST['radio'];
$d=$_POST['address'];
$e=$_POST['email'];
$f=$_POST['password'];
$g=$_POST['cpwd'];
$h=$_POST['phno'];
$k=$_POST['exp'];
$m=$_POST['date'];
if($f==$g)
{
$sql="insert into trainer_reg values('$a','$b','$c','$d','$e','$f','$h','$k','$m')";
setDatas($sql);
$sql="insert into login values('$e','$f','trainer','0')";
		setDatas($sql);
		msgbox('Successfully registerd');
}
else
{
  echo "password missmatch";
}
}

?>
