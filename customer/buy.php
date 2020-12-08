<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>


<head>
<style>
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 15%;
           
             
            }
            label{
                color:black;
                font-size: 20sspx;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 400px;
            }
	 body{
        background:url(../img/milk1.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}
    </style>
</head>
<body>
<div style="position:relative;top:100px;">

<?php

date_default_timezone_set('Asia/Calcutta');
$date1 = date("m/d/y");// current date
		$quantity=$_POST['quantity'];
		
		$price=$_POST['price'];
		
		$type=$_POST['radio'];
		
		
		echo $t;
		$d = date("Y-m-d");
		$s=strtotime("+10 day");
       $k=date("M-d-y", $s) . "<br>";
		$m=$_POST['image'];
		$sql="select ret_name from tbl_customer where ret_email='$user'";
	$tbl=getDatas($sql);
	$cust=$tbl[0][0];
		
	if($type=="cod")
	{
        $sql="update tbl_cart set pay_status='cod',o_date='$d' where buyer='$user' and pay_status='null' and o_date='null'";
        setDatas($sql);
        
		
		echo "
		    <div style='position:relative;left:450px;top:120px;'>
			<font color='red'>Buyer Name:</font>$cust<br>
			
			<font color='red'>Quantity :</font>$quantity<br>
			<font color='red'>Price:</font>$price<br>
			
			<font color='red'>Order Date:</font>$d<br>
			we will get back to you shortly!!!!! Thank You.
			</div>
		";
	}	
	if($type=='credit')
	{
				
			 $sql="update tbl_cart set pay_status='credit',o_date='$d' where buyer='$user' and pay_status='null' ";
        setDatas($sql);
        
	
?>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_right">
<!-- payment -->
		<div class="privacy about">
            <center><h3>PAY<span>MENT</span></h3></center>
			
	         <div class="checkout-right">
				<!--Horizontal Tab-->
        <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
                <center><li>Credit/Debit</li></center>
               
                
            </ul>
            <div class="resp-abs-container hor_1">

				
                <div>
                    <form action="thankyou.php" method="post" style="position:relative;width:520px;left:320px;" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
											
												<div class="controls">
													<label class="control-label">Quantity</label>
													<input class="billing-address-name form-control" type="text" name="quantity" value="<?php echo $quantity;?>" readonly>
												</div>
												<div class="controls">
													<label class="control-label">Total Price</label>
													<input class="billing-address-name form-control" type="text" name="price" value="<?php echo $price;?>" readonly>
												</div>
												
												<div class="controls">
													<label class="control-label">Customer Name:</label>
													<input class="billing-address-name form-control" type="text" name="bname" value="<?php echo $user;?>" readonly>
												</div>
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" required>
												</div>
												
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="number" pattern=".{16}"
																		  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required>
														</div>
													</div>
													
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Order Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="date" value="<?php echo $d;?>" readonly>
												</div>
											</div>
											<input type="submit" value="PAYMENT">
										</div>
									</section>
								</form>

                </div>

                
                
            </div>
        </div>
		<?php
		
	}
		
		?>
			</div></div></div></div></div> </body>
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
</body>
</html>