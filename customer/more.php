<?php 
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<head>
<style>
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 10 %;
           
             
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
    .aa{
        position: relative;
        width:100px;
        right:55px"
    }
    </style>

	<!-- banner -->
	<!-- more -->
		
<?php
	 if(isset($_GET['id']))
	 {
	
		$a=$_GET['id'];
		echo  $a; 
		
			
		$sql="select * from tbl_product where item_id='$a'";
		$tbl=getDatas($sql);

	
	
	?>
	<div style="position:relative;left:200px;top:150px;">
        
<div class="agileinfo_single">
<div style="position:relative;left:60px;top:-30px">
<font color="green">
<?php
				echo "<h1>". $tbl[0][1]."</h1>";
				?></font>
				</div>
				<div class="col-md-4 agileinfo_single_left" style="position:relative;left:50px;top:-0px;">
				<?php
					echo "<img  src='".$tbl[0][4]."'  width='250' height='200     ' />";
					?>
				</div>
				<div class="col-md-8 agileinfo_single_right" style="position:relative;top:-260px;left:450px">
					
					<div class="w3agile_description">
						<h4><font color="#d88c22">Brand Name :</font></h4><?php
						echo $tbl[0][2];
							?>
					</div>
					<br>
					<div class="w3agile_description">
						<h4><font color="#d88c22">Description :</font></h4><?php
						echo $tbl[0][5];
							?>
					</div>
					<br>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4><font color="#d88c22">Price :</font></h4><?php
							echo "<h4>".$tbl[0][7]."</h4>";
							?>
						
						</div>
                        <br>
                        <form action="cart.php" method="post">
                        <div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4><font color="#d88c22">Quantity:</font></h4>
                            <input type="number"  name="no" value="1"/>
                            <input type="text" hidden="" name="id" value="<?php echo $a; ?>"/>
						</div>
                           
						<br>
                            <div class="aa">
                        <input type="submit"  name="submit" value="Add to cart" class="button" />
                                </div>
					</div>
                             </form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	 <?php  }?>
       
		<div class="clearfix"></div>
		<!-- more -->


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