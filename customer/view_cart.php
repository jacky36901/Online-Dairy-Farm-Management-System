<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>


<html>
<head>
<style>
  
   
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){
    color: white;
    background-color:navy;}

#customers tr:hover {background-color: powderblue;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:navy;
  color: white;
}
  s2
    {
        color: red;
    }
    body
    {
         background:url(../img/milk3.jpg) no-repeat top fixed ;
        background-size:cover;
    }
    h3
    {
        color:navy;
        font-size: 40px;
    }
    
</style>
</head>
<br><br><br><br><br>

    <br>
    <br>

<?php
$db= "select sum(t_amnt),sum(num) from tbl_cart where buyer='$user' and pay_status='null'  and del_status='PENDING' ";
$t=getDatas($db);
	
	$pp=$t[0][0];
		if($pp==''){
echo "<h1 style='position:relative;color:blue;top:150px;left:750px;'>CART EMPTY</h1>";
	}
	
	else{
for($i=0;$i<count($t);$i++)
		{
			
			for($j=0;$j<count($t[$i]);$j++)
			{
			
			}
$total= $t[$i][0];
            $number= $t[$i][1];
		}
		

?>
	<h3 style="position: relative;top:10px;left:450px;">VIEW CART </h3> 
    <div style="position:relative;left:20px;">
				<center><table id="customers" style="position;relative;top:80px;width:800px;">
					<thead>
						<tr>
							
							<th>PRODUCT</th>
							<th>PRODUCT NAME</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
							<th>REMOVE</th>
						</tr>
					</thead>

<?php
		$db="select *,sum(t_amnt),sum(num) from tbl_cart where buyer='$user' and pay_status='null'  group by p_name";
$tbl=getDatas($db);
for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
		
			
	?>
	
				<tbody><tr class="rem1">
						<td class="invert-image"><?php echo "<img src='".$tbl[$i][7]."'style='position:relative;width:50px;height:50px;'"?></td>
						<td class="invert"><?php echo $tbl[$i][3];?></td>
						<td class="invert"><?php echo $tbl[$i][13];?></td>
						<td class="invert">
							 <?php echo $tbl[$i][12];?>
						</td>
						<td><a href="rmv_prd.php?id=<?php echo $tbl[$i][0];?>"><font color="red">DELETE</font> </a></td>
						
						</tr>
	
	<?php 
					}
		
					?>
					<tr><td></td><td></td><td>TOTAL</td><td><?php echo $total;?> </td></tr>
                    <tr ><td></td><td></td><td></td><td><a href="confirm.php?tot=<?php echo $total;?> & no=<?php echo $number;?>"><B><font color="black">BUY NOW</font></B></a></td></tr>
					



<?php
	}
	?>
</tbody>
			
                    
                    </table></center>
			
