<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
	 <script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 100%;
                   margin-left:0px;
                   
               }
               th {
    background-color: white;
    color: black;
    height: 40px;
}
     body
    {
         background:url(../img/milk7.jpg) no-repeat top fixed ;
        background-size:cover;
    }
        .card{
  box-sizing: border-box;
        background: rgba(0,0,0,0.7);
        top:150px;
  width:1250px;
    height:900px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
tr{
    height: 50px;
    border-bottom: 1px solid #ddd;
}
.s:link, .aa:visited {
  background-color: #ccc;
  color: red;
  padding: 10px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
    h1,td{
        color: white;
    }
    </style>
 </head>
	<!--user--->
<div class="card">
<?php
$sql="select * from tbl_customer";
					$tbl=getDatas($sql);
if($tbl==null){
    echo "<div style='position:relative;top:250px;left:420px'><font color='black'>NO NEW REGISTRATION....!!!!</font></div>";
}
else
{
?>

 <h1 style="position:relative;left:50px;top:20px;">CUSTOMER INFORMATION</h1>

				<table border="1" style="position:relative;width:1200px;top:35px;left:30px;">
					<thead>
						<tr>
							<th>CUSTOMER ID</th>
                            <th>CUSTOMER NAME</th>
                            <th>DATE OF BIRTH</th>
                           
                            <th>STREET</th>
                            <th>CITY</th>
                            <th>DISTRICT</th>
                            <th>PHONE NUMBER</th>
                            <th>EMAIL</th>
                           
                            
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
                        <td><?php echo $tbl[$i][4];?></td>
                        <td><?php echo $tbl[$i][5];?></td>
                        <td><?php echo $tbl[$i][7];?></td>
                      
                        <td><?php echo $tbl[$i][6];?></td>
                                               
                      			<?php 
					}
}
					?>
					</tbody>
				
				</table>
</div>
	<!--user-->
