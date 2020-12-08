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
    background-color:darkblue;
    color: white;
    height: 50px;
}
   body
    {
        background:url(../img/milk7.jpg) no-repeat top fixed ;
        background-size:cover;
    }
    td{
        text-align: center;
    }
tr{
    height: 70px;
    border-bottom: 1px solid #ddd;
}

    </style>
 </head>
<?php
echo $user;
$sql="select * from tbl_cart where buyer='$user'";
$tbl=getDatas($sql);
if($tbl==null){
    echo "<div style='position:relative;top:250px;left:400px'><font color='red'>No Bookings</font></div>";
}
else{
?>
<h1 style="position:relative;left:520px;top:120px;">ORDER REPORT</h1>
<center>
				<table border="1" style="position:relative;width:900px;left:-10px;top:150px;">
					<thead>
						<tr>
							<th>PRODUCT</th>
                            <th>PRODUCT NAME</th>
                            <th>BRAND</th>
                            <th>QUANTITY</th>
                            <th>TOTAL </th>
                            <th>ORDER DATE</th>
                           
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
                        
						
					<?php 
					}
}
					?>
					</tbody>
				
				</table>
</center>
		
	<!--user-->
