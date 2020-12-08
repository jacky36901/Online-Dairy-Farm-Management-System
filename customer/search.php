<?php
session_start();
$user=$_SESSION['userid'];

?>
<?php include("top.php");?>
<br><br><br><br><br><br><br><br><br><br><br>
<head>
	
	
	<script type="text/javascript">
	function preback()(window.history.forward();)
	setTimeout("preback()",0);
	window.unload=function()(null);
	</script>
	
	
	
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

	
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  
}
  
</style>
</head>

<div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;top:-50px">
                  <div class="row">

<?php
if(isset($_POST['search']))
{
    $s=$_POST[search];
	//echo $s;
$sql="select * from tbl_purchase_child where item_name like '$s%'";
    $tbl=getDatas($sql);
    if($tbl==null){
        
        echo "<div style='position:relative;top:250px;left:420px;'><font color='red'>Not Available.....</font></div>";
    }
    else
    {
        

		for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
			?>
			
			<div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
		 
			 <div class="men-thumb-item">
			<?php
			
	echo "<center><img src='".$tbl[$i][4]."' style='position:relative;width:150px;height:200px;left:0px'></center>";
?>
</div>
<div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
<?php
	echo "
	&emsp;&emsp;&emsp;&emsp;<center><font color='red' size='5'>".$tbl[$i][1]."</font></center>
	
&emsp;&emsp;&emsp;&emsp;<center><font color='green'>Price:</font>".$tbl[$i][7]."/-</center>";
	?>
	&emsp;&emsp;&emsp;&emsp;<center><a href="more.php?id=<?php echo $tbl[$i][0];?>"><font color="blue">MORE</font></a></center>
	</div></div></div> <div class="clearfix"></div></div>
	</div></div></div>

 <?php
 	
        }
         }
}
                      
		?>
		
	</div></div>
		