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
            label{
                color: green;
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
    color: #ff9900;
    text-transform: uppercase;
    position: relative;
    margin-top: 0;
}
input[type=submit]:hover,
{
	background-color: #ff9900;
    color: white;
}
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:700px;
    height:800px;
  margin: auto;
  text-align:left;
  font-family: arial;
}
</style>
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from tbl_purchase_master where pur_id='$id'";
    $tbl=getDatas($sql);
}?>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1>EDIT VENDOR</h1></div>

<form action="" method="POST" >
    
    <table   style="position: relative;left:100px;top:5px">
			<div id="err" style="color: red;height: 10px"></div>

            
           <tr><td></td></tr>
                <tr>
                    <td>
                        <label>Vendor Name</label>
                    </td>
                    <td>
                       <input type="text" name="vendor_name" value="<?php echo $tbl[0][1];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/jquery-ui.css"    rel="stylesheet" type="text/css">
           <tr><td></td></tr>
                 
                      <tr>
                    <td>
                        <label>Company Name</label>
                    </td>
                    <td>
                       <input type="text" name="vendor_cmpny" value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                <tr><td></td></tr>       
                
                <tr>
                    <td>
                        <label>Street</label>
                    </td>
                    <td>
                       <input type="text" name="v_street" value="<?php echo $tbl[0][3];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                     <tr>
                    <td>
                        <label>City</label>
                    </td>
                    <td>
                       <input type="text" name="v_city" value="<?php echo $tbl[0][4];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>District</label>
                    </td>
                    <td>
                       <input type="text" name="v_district" value="<?php echo $tbl[0][5];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                   <tr>
                    <td>
                        <label>Phone Number</label>
                    </td>
                    <td>
                       <input type="text" name="vendor_ph" value="<?php echo $tbl[0][6];?>"onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);" />
                      </td>
                </tr>
        <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                       <input type="text" name="vendor_email" value="<?php echo $tbl[0][7];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        
                
                
            </table>
            <br>
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['vendor_name']))
        {
		$a=$_POST['vendor_name'];
        $b=$_POST['vendor_cmpny'];
		$c=$_POST['v_street'];
        $d=$_POST['v_city'];
        $e=$_POST['v_district'];
         $f=$_POST['vendor_ph'];
         $g=$_POST['vendor_email'];
            
		$sql="update tbl_purchase_master set vendor_name='$a',vendor_cmpny='$b',v_street='$c',v_city='$d',v_district='$e',vendor_ph='$f',vendor_email='$g' where pur_id='$id'";
		setDatas($sql);
		msgbox("updated");
        }
        
        ?>