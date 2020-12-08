<?php session_start();
 include_once("../shares/db/mydatabase.inc"); 
 ?>
 <?php include("top.php"); ?>
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

    body {
	 background:url(../img/milk3.jpg) no-repeat top fixed ;
        background-size:cover;
}
    
input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] ,input[type=reset]{
    background-color:#02646F;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover,input[type=reset]:hover {
    background-color: skyblue;
}

.container2 {
    border-radius: 2px;
    background-color:mintcream;
    padding: 20px;
    width: 50%
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

    h1
    {
          color: white;
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
</head>

<body>    
    <h1 style="position:relative;left:900px;top:150px;">LOGIN</h1>
        <form action="" method="post">
            <div class="container2" style="position:relative;top:200px;left:600px;">
                <div class="row">
                    <div class="col-25">
                        <label>USERNAME</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="username"  required="">
                    </div>
                    </div>
                <div class="row">
                    <div class="col-25">
                        <label>PASSWORD</label>
                        </div>
                    <div class="col-75">
                        <input type="password" name="pwd" required="">
                        
                    </div>
                </div>
				   <div class="row">
                       <div  style="position:relative;left:200px; top:10px">                         
                         <input type="submit" name="submit" value="Login"> 
                        </div>
                        <div  style="position:relative;left:250px; top:10px">                         
                        <input type="reset" name="reset" value="Cancel">
                        </div>                        
                        
                        </div>
            </div>
        </form>
    </body>
</html>
<?php
		if(isset($_POST['username']))
		{
		   $a=$_POST['username'];
		   $b=$_POST['pwd'];
		   
		   $sql="select usertype from tbl_login where username='$a' and password='$b'";
		   $tbl=getDatas($sql);
		   $msg=mysql_error();
		   if($tbl<0)
		   {
			   $msg="inavlid login";
			   echo "<font color='white'>".$msg."</font>";	
		   }
		   if($msg=="")
		   {
			   if(count($tbl)>0)
			   {
				   if($tbl[0][0]==customer)
				   {
				   $_SESSION['userid']=$a;
				  nextPage( '../'.$tbl[0][0].'/index.php');
			   
				   }
				   
				  else if($tbl[0][0]==staff)
				   {
				   $_SESSION['userid']=$a;
				  nextPage( '../'.$tbl[0][0].'/index.php');
			 
				   }
				   else{
					 $_SESSION['userid']=$a;
				  nextPage( '../'.$tbl[0][0].'/index.php');
			   }
			   
			   }
			   else{
				   
				   $msg="invalid";
				   echo"<script>alert('Invalid login !!!');</script>";
				echo "<script> parent.location.href='top.php'; </script>";
			   }
				
		   
		}
		}
		
		?>