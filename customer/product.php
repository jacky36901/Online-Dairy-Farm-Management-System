<?php
session_start();
$user=$_SESSION['userid'];

?>
<?php include("top.php");?>
<br><br><br><br><br><br><br><br><br><br><br>
<head>
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
    
    input[type=text]{
        border: none;
        border-radius: 4px;
        width: 350px;
        height: 50px;
        background-color:beige;
    }
    input[Type=submit]{
        border: none;
        border-radius: 50%;
        height: 50px;
        width:50px;
     cursor: pointer;
        background: green;
        color: white;
    }
    input[type=submit]:hover{
        background-color: darkgreen;
    }
</style>
</head>
<div style="position:relative;top:-100px;left:250px">
<form action="search.php" method="post">
<table>
    <tr>
        <td>
        <input type="text" name="search" placeholder="      search here........" /></td>
        <td>
        <input type="submit" value="ok"/>
        </td>
    </tr>
    </table>

</form>
</div>
<div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;top:-50px">
                  <div class="row">

<?php
if(isset($_GET['mode']))
{

 $m=$_GET['mode'];
 //echo $m;
 if($m=="tablet")
{
		$sql="select * from tbl_product where item_type='$m'";

}
else if($m=="powder")
{
            $sql="select * from tbl_product where item_type='$m'";
}

else{
        $sql="select * from tbl_product where item_type='$m'";
}
	$tbl=getDatas($sql);
	
			$msg = mysql_error();
			if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
}
?>


<?php
		
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
		?>
		
	</div></div>
		
		
		
		