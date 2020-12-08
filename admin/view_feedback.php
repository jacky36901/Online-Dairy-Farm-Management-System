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
        background-image: url(feedbk2.jpg);
        background-size: 1360px;
        background-repeat: no-repeat;
    }
    
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
tr{
    height: 50px;
    border-bottom: 1px solid #ddd;
}
       .card{
  box-sizing: border-box;
        background: rgba(0,0,0,0.7);
        top:150px;
  width:850px;
    height:300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
    td
    {
        color: white;
    }
 

    </style>
 </head>
	<!--user--->
 <h1 style="position:relative;left:450px;top:120px;">FEEDBACK VIEW</h1>
<div class="card">
				<table border="1" style="position:relative;width:800px;left:20px;top:5px;">
					<thead>
						<tr>
							<th>FEEDBACK ID</th>
                            <th>RETAILER NAME</th>
                            <th>DESCRIPTION</th>
        
				       </tr>
					</thead>
					<?php
					$sql="select * from tbl_feedback";
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
                        
                        
						
					<?php 
					}
					?>
					</tbody>
				
				</table>
		</div>
	<!--user-->
