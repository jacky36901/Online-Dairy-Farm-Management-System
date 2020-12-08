<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
               th {
    background-color:white;
    color: black;
    height: 50px;
}
tr{
    height: 70px;
    border-bottom: 1px solid #ddd;
}
body { background:url(../img/milk6.jpg) no-repeat top fixed ;
        background-size:cover;
      }
        .card{
  box-sizing: border-box;
        background: rgba(0,0,0,0.7);
        top:150px;
            left: 200px;
  width:950px;
    height:800px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
    td,h1
    {
        color: white;
    }
    .s:link, .aa:visited {
  background-color: #ccc;
  color: red;
  padding: 10px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
    </style>
 </head>
	<!--user--->
	
	

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
	
<h1 style="position:relative;left:620px;top:120px;"><font blue="blue">PRODUCT VIEW</font></h1>

<div class="card" style="position:relative;left:-20px;">
				<table border="1" style="position:relative;width:900px;left:10px;top:10px;">
					<thead>
						<tr>
							<th>ITEM ID</th>
                            <th>ITEM NAME</th>
                            <th>BRAND</th>
                            <th>ITEM TYPE</th>
                            <th>ITEM IMAGE</th>
                            <th>ITEM DETAILS</th>
                            <th>QUANTITY</th>
                            <th>AMOUNT</th>
                            <th>TOTAL AMOUNT</th>
                            
                            <th>UPDATE</th>
                             <th>PURCHASE</th>
                            <th>DELETE</th>
                       
				       </tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						<td><?php echo $tbl[$i][0];?></td>
						<td><?php echo $tbl[$i][1];?></td>
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][3];?></td>
                        <td><img src="<?php echo $tbl[$i][4];?>"  height="50" width="50"></td>
                        <td><?php echo $tbl[$i][5];?></td>
						<td><?php echo $tbl[$i][8];?></td>
                        <td><?php echo $tbl[$i][7];?></td>
                        <td> <?php
                            $k=$tbl[$i][8]*$tbl[$i][7];
                        echo $k;
                            ?></td>
						<td><a href="update_product.php?id=<?php echo $tbl[$i][0];?>&q=<?php echo $tbl[$i][8]?>"><b>UPDATE</b></a></td>
<td><a href="purchase.php?id=<?php echo $tbl[$i][0];?>&q=<?php echo $tbl[$i][8]?>"><b><font color="red">PURCHASE</font></b></a></td>
						</td>
<td><a href="delete.php?id=<?php echo $tbl[$i][0];?>"><b><font color="green">DELETE</font></b></a></td>
						
					<?php 
					}
					?>
					</tbody>
				
				</table>
</div>
	<!--user-->
