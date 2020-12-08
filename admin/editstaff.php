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
  text-align: center;
  font-family: arial;
}
</style>
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from tbl_item where item_id='$id'";
    $tbl=getDatas($sql);
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1>EDIT PROFILE</h1></div>



<form action="" method="POST" >
            <table   style="position: relative;left:100px;top:5px">
			<div id="err" style="color: red;height: 10px"></div>

            
           <tr><td></td></tr>
                <tr>
                    <td>
                        <label> First Name</label>
                    </td>
                    <td>
                       <input type="text" name="staff_fname" value="<?php echo $tbl[0][1];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                      <tr>
                    <td>
                        <label> Last Name</label>
                    </td>
                    <td>
                       <input type="text" name="staff_lname" value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                <tr><td></td></tr>
                 
                  <tr>
                    <td>
                        <label> Street:</label>
                    </td>
                    <td>
                       <input type="text" name="staff_street" value="<?php echo $tbl[0][5];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                <tr>
                    <td>
                        <label> City:</label>
                    </td>
                    <td>
                       <input type="text" name="staff_city" value="<?php echo $tbl[0][6];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                
                <tr>
                    <td>
                        <label> District:</label>
                    </td>
                    <td>
                       <input type="text" name="staff_district" value="<?php echo $tbl[0][7];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                     <tr>
                    <td>
                        <label> Email:</label>
                    </td>
                    <td>
                       <input type="text" name="staff_email" value="<?php echo $tbl[0][10];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label> Date of Joining:</label>
                    </td>
                    <td>
                       <input type="text" name="staff_doj" value="<?php echo $tbl[0][4];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr>                       
                 <tr>
                    <td>
                        <label>Mobile Number:</label>
                    </td>
                    <td>
                          <input type="text" name="staff_ph" value="<?php echo $tbl[0][9];?>" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);"/>
                      </td>
                </tr> 
                      <tr>
                    <td>
                        <label> Date of Birth:</label>
                    </td>
                    <td>
                       <input type="text" name="staff_dob" value="<?php echo $tbl[0][3];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                
            </table>
            <br>
             <input type="submit" value="UPDATE"><br><br>
                    
    </form>  
            </div>
            
       
                                   </div>
                <div class="clearfix"></div>
		

<?php
		
		
		if(isset($_POST['staff_fname'])){
		
		$b=$_POST['staff_fname'];
	
		$c=$_POST['staff_lname'];
       
        $f=$_POST['staff_street'];
        $g=$_POST['staff_city'];
        $h=$_POST['staff_district'];
        $i=$_POST['staff_email'];
        $j=$_POST['staff_doj'];        
        $m=$_POST['staff_ph'];
        $n=$_POST['staff_dob'];
			

		
		$sql="update tbl_staff set staff_fname='$b',staff_lname='$c',staff_dob='$n',staff_doj='$j',staff_street='$f',staff_city='$g',staff_district='$h','',staff_ph='$m',staff_email='$i', where staff_id='$id'";
		setDatas($sql);
		msgbox("updated");
		}
		
		?>
<!-- Bootstrap Core JavaScript -->
<script src="../temp/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="../temp/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>

