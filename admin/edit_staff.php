<?php
include_once("../shares/db/mydatabase.inc");
 include("top.php");
?>
<head>
	<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<script src="maha.js"></script>
<style>
       
input,textarea,select,.ab{
                border: 2px solid;
             border-radius: 7px;
          
             
            }
            label,input[type=radio]{
                color: white;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 500px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}

input[type=submit],.ab {
    margin: auto;
    padding: 10px 25px;
    margin-top: 25px;
    background-color: #146eb4;
    color: white;
	border:none;
	outline:none;
    letter-spacing: 1px;
    outline: 0;
    cursor: pointer;
}
.heading h1 {
    font-weight: 600;
    letter-spacing: .5px;
    font-size: 40px;
    margin-bottom: .9em;
    text-align: center;
    color: deepskyblue;
    text-transform: uppercase;
    position: relative;
    margin-top: 0;
}
    body
    {
        background-image: url(viiew_stf.jpg);
        background-size: 1575px;
        background-repeat: no-repeat;
    }
input[type=submit]:hover,
{
	background-color: #ff9900;
    color: white;
}
.card{
 box-sizing: border-box;
        background: rgba(0,0,0,0.3);
  width:700px;
    height:750px;
    top: 100px;
  margin: auto;
  text-align:left;
  font-family: arial;
}
</style>
    <script src="maha.js"></script>
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from tbl_staff where staff_id='$id'";
    $tbl=getDatas($sql);
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1>EDIT STAFF</h1></div>

<form action="" method="POST" >
    
    <table   style="position: relative;left:100px;top:-20px;">
			<div id="err" style="color: red;height: 10px"></div>

                <tr>
                    <td>
                        <label>FIRST NAME</label>
                    </td>
                    <td>
                       <input type="text" name="staff_fname" value="<?php echo $tbl[0][1];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
            <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/jquery-ui.css"    rel="stylesheet" type="text/css">
           <tr><td></td></tr>
                 
                      <tr>
                    <td>
                        <label>SECOND NAME</label>
                    </td>
                    <td>
                       <input type="text" name="staff_lname"  required="" value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                <tr><td></td></tr>
                 
                 
           <tr><td></td></tr> 
                
                
                <tr>
                    <td>
                        <label>STREET</label>
                    </td>
                    <td>
                       <input type="text" name="staff_street"  required="" value="<?php echo $tbl[0][5];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                     <tr>
                    <td>
                        <label>CITY</label>
                    </td>
                    <td>
                       <input type="text" name="staff_city"  required="" value="<?php echo $tbl[0][6];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>DISTRICT</label>
                    </td>
                    <td>
                       <input type="text" name="staff_district" required="" value="<?php echo $tbl[0][7];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                <tr>
<td>
<label>GENDER:</label></td>
<td><input type="radio" name="staff_gender" value="female">Female
<input type="radio" name="staff_gender" value="male">Male
</td></tr>
                      <tr>
                    <td>
                        <label>PHONE NUMBER</label>
                    </td>
                    <td>
                       <input type="text" name="staff_ph"  required="" value="<?php echo $tbl[0][9];?>" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);"/>
                      </td>
                </tr>
        <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>EMAIL</label>
                    </td>
                    <td>
                       <input type="text" name="staff_email" required="" value="<?php echo $tbl[0][10];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        
                
                
            </table>
            <br>
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['staff_fname']))
        {
		$a=$_POST['staff_fname'];
        $b=$_POST['staff_lname'];
		$c=$_POST['staff_dob'];
        $d=$_POST['staff_doj'];
        $e=$_POST['staff_street'];
        $f=$_POST['staff_city'];
        $g=$_POST['staff_district']; 
		$h=$_POST['staff_gender'];
         $i=$_POST['staff_ph'];
         $j=$_POST['staff_email'];
            
		$sql="update tbl_staff set staff_fname='$a',staff_lname='$b',staff_street='$e',staff_city='$f',staff_district='$g',staff_gender='$h',staff_ph='$i' where staff_id='$id'";
		setDatas($sql);
		msgbox("updated");
        }
        
        ?>