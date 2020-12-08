<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 100%;
                   margin-left:0px;
                   
               }
               th {
                   text-align: center;
    background-color: #17c3a2;
    color: white;
    height: 40px;
}
    td{
        text-align: center;
    }
tr{
    height: 50px;
    border-bottom: 1px solid #ddd;
}  
    .s1{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 600px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.5);
       color:burlywood; 
    }
     .s1{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 600px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.5);
       color:burlywood; 
    }
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:700px;
    height:800px;
  margin: auto;
  text-align:left;
  font-family: arial;
}

	body{
		background:url(../img/milk7.jpg) no-repeat top fixed ;
        background-size:cover;
	}
    </style>
 </head>
<?php
echo $user;
$sql="select staff_district from tbl_staff where staff_email='$user'";
$tbl=getDatas($sql);
$t=$tbl[0][0];
$sql="select * from tbl_cart where place='$t'";
$tbl=getDatas($sql);
if($tbl==null){
    echo "<div style='position:relative;top:250px;left:420px'><font color='red'>No Bookings</font></div>";
}
else{
?>
<h1 style="position:relative;left:620px;top:120px;">ORDERS</h1>
<center>
				<table border="1" style="position:relative;width:900px;left:50px;top:150px;">
					<thead>
						<tr>
							<th>PRODUCT</th>
                            <th>PRODUCT NAME</th>
                            <th>BRAND</th>
                            <th>QUANTITY</th>
                            <th>TOTAL </th>
                            <th>ORDER DATE</th>
							<th>DELIVERY STATUS</th>
							<TH>UPDATE STATUS</TH>
                           
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
						<td><img src="<?php echo $tbl[$i][7];?>"  width="75" height="75"/></td>
						<td><?php echo $tbl[$i][3];?></td>
                        <td><?php echo $tbl[$i][4];?></td>
                        <td><?php echo $tbl[$i][5];?></td>
                        <td><?php echo $tbl[$i][6];?></td>
                        
                        <td><?php echo $tbl[$i][9];?></td>
                        <td><?php echo $tbl[$i][11];?></td>
						
						<td><a href="?id=<?php echo $tbl[$i][0];?>">UPDATE</a></td>
                        
						
					<?php 
					}
}
					?>
					</tbody>
				
				</table>
</center>
		
	<!--user-->
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql="update tbl_cart set del_status='DELIVERED' where cart_id='$id'";
setDatas($sql);
nextpage('my_order.php');
}
?>