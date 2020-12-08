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
    body
    {
         background:url(../img/milk4.jpg) no-repeat top fixed ;
        background-size:cover;
    }
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 100%;
                   margin-left:0px;
                   
               }
               th {
    background-color:white;
    color: black;
    height: 40px;
                   width: 80px;
}
    h1{
        color: black;
    }
    tr{
    height: 70px;
    border-bottom: 1px solid #ddd;
}
    td{
    color: white;
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
    
    </style>
 </head>
	<!--user--->
 <h1 style="position:relative;left:420px;top:120px;">STAFF INFORMATION</h1>
<div class="card">
				<table border="1" style="position:relative;width:1200px;left:20px;top:10px;">
					<thead>
						<tr>
							<th>STAFF ID</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>DATE OF BIRTH</th>
                            <th>DATE OF JOIN</th>
                            <th>STREET</th>
                            <th>CITY</th>
                            <th>DISTRICT</th>
                            <th>GENDER</th>
                            <th>PHONE NUMBER</th>
                            <th>EMAIL</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
				       </tr>
					</thead>
					<?php
					$sql="select * from tbl_staff";
					$tbl=getDatas($sql);
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
                        <td><?php echo $tbl[$i][6];?></td>
                        <td><?php echo $tbl[$i][7];?></td>
                        <td><?php echo $tbl[$i][8];?></td>
                        <td><?php echo $tbl[$i][9];?></td>
                         <td><?php echo $tbl[$i][10];?></td>
                       <td><a href="edit_staff.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Edit</a></td>
						<td><a href="dlt_staff.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Delete</a></td>
					<?php 
					}
					?>
					</tbody>
				
				</table>
		</div>
	<!--user-->
