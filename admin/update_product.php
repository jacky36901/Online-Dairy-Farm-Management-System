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
                height: 200px;
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
    height:500px;
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
    $q=$_GET['q'];
   
}?>
<br><br><br><br><br><br><br>
<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
	<h1>UPDATE STOCK</h1></div>

<form action="" method="POST" >
    
    <table   style="position: relative;left:100px;top:5px">
			<div id="err" style="color: red;height: 10px"></div>

            
           <tr><td></td></tr>
                <tr>
                    <td>
                        <label>Stock</label>
                    </td>
                    <td>
                       <input type="text" name="quantity"  required/>
                      </td>
                </tr>
       
           <tr><td></td></tr>
                 
                      <tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                       <input type="text" name="price"  required/>
                      </td>
                </tr>
                <tr><td></td></tr>       
                
              
                
                
            </table>
            <br>
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['quantity']))
        {
		$a=$_POST['quantity'];
        $b=$_POST['price'];
		$c=$q+$a;
            
		$sql="update tbl_product set quantity='$c',amnt='$b' where item_id='$id'";
		setDatas($sql);
			$sql="update tbl_purchase_child set quantity='$c',price='$b' where product_id='$id'";
		setDatas($sql);
			//nextpage('view_med.php');
		msgbox("updated");
        }
        
        ?>