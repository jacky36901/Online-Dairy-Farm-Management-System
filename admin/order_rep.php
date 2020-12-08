<?php

include_once("../shares/db/mydatabase.inc"); 

?>
<html>
<head>
<title>APPOINTMENT DETAILS</title>
<style>
input[type=text]
{
border-radius:3px;
border-spacing: inherit;
height:50px;
background-color: rgba(216, 216, 216, 0.63);
width:500px;
color: black;
}
        .b{
        border-radius:3px;
        border-spacing: inherit;
        background-color: rgba(216, 216, 216, 0.63);
        width:500px;
    }  input[type=text]:hover{
    background-color: white;
    }
    

    }
input[type=submit],input[type=reset] {
    margin: auto;
    padding: 10px 25px;
    margin-top: 25px;
    background-color: #146eb4;
    color: white;
border:none;
outline:none;
    letter-spacing: 1px;
    outline: 0;
    cursor: pointer;
}
    label{
        color: white;
    }
    .box label input{
        display:none;
    }
    .box label span{
        position: relative;
        display: inline-block;
        margin: 20px 10px;
        width: 50px;
        font-size: 18px;
        background:rgba(216, 216, 216, 0.63);
        border: 1px solid #ccc;
        color:black;
        border-radius: 4px; 
            }
    .box label input:checked ~ span{
        color: red;
        border: 1px solid green;
    }
    .box label input:checked ~ span:before{
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top:0;
        left:0;
        background: green;
        z-index: -1;
        filter: blur(10px);
    }
    
    .btn{
           background-color: #146eb4; 
         height: 40px;
        width: 180px;
        
    }  
input[type=submit]:hover,button:hover
{
    background-color: #ff9900;
    color: white;
}
    .table1
{
	border-radius:3px;	
height:200px;
    padding: 9px;
    }
.container_1 {
    background-color:beige;
width: 710px;
    margin: auto;
    padding: 30px 30px 30px;
    box-sizing: border-box;
   -webkit-box-shadow: 0 0 40px #aaa;
    -moz-box-shadow: 0 0 40px #aaa;
    box-shadow: 0 0 40px #aaa;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -webkit-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    -moz-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color:whitesmoke;
}
    h3{
        color: black;
    }   
    body{
        
        background-size:cover;
        height: 1800px;
        
    }
textarea
{
    width: 99%;
background-color: rgba(216, 216, 216, 0.63);
    border-radius: 4px;
    }

 th {
    background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
    color: orange;
    height: 40px;
}
    .td{
        background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
        color:whitesmoke;
        text-align: center;
        }
    @media print{
        #pbtn{
            display: none;
            
        }
    }   
</style>
<?php
    
     date_default_timezone_set('Asia/Calcutta');
    $time = date('h:i', time());// current time
    $date=date('d-m-Y');
    ?>
   
</head>
<body>
    <h1><center>ORDER REPORTS</center></h1>
   <table   style="position: relative;left:360px;top:50px">
<tr>
                    
                    <td>
                        <label> 
                            <img src="logo.JPG" ><br>
					<h3>Dairy Mart Rd,<br>
                    North Kaloor,Ernakulam,<br>
                    Kerala<br>
					0484 240 2044<br>
                        <a href="mailto:info@example.com">info@dairymart.com</a></h3>
				</label>
                    
                    </td>
                  
                </tr>
           <tr><td></td></tr>
    </table>
 
<?php
if(isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
//echo $txtStartDate; 
    
  //$txtS= date_format($txtStartDate,"d/m/Y");
    //$txtE= date_format($txtEndDate,"d/m/Y");
    //echo $txtStartDate;
    //echo $txtEndDate;
 $query="select * from tbl_cart where o_date between'$txtStartDate'and'$txtEndDate'";
    $tbl=getDatas($query);

if($tbl==null){
        echo "<div style='position:relative;left:620px;top:150px;color:red'>No Vendors </div>";

}else
{
    ?> <center><h3>Date:<?php echo $date ?></h3></center>
    <center><h3>The Orders reports between <?php echo $txtStartDate ?> and <?php echo $txtEndDate ?></h3>
        <input id='pbtn' class="btn" onclick="myFunction()" value="Print Report" readonly>
        <a href="index.PHP"> <input id='pbtn' class="btn" onclick="index.PHP" value="Back" readonly></a>
        
   </center>
    <script>
    function myFunction()
        {
            window.print();
        }</script>
    				<table border="1" style="position:relative;width:1200px;height:800px;left:100px;top:50px;">

        
    <tr>
        
        <th>ORDER ID</th>
        
        <th>PRODUCT NAME</th>
    
        <th>BRAND</th>
          
            
        <th>NUMBER</th>
        <th>AMOUNT</th>
        
        <th>IMAGE</th>  
                            
        <th>DISTRICT</th>
        
        <th>STATUS</th>
        
       
               
        </tr>

<?php
    for($i=0;$i<count($tbl);$i++){
        for($j=0;$j<count($tbl[$i]);$j++){
        
    }
?>

    <tr>
    <td class="td">
    <?php echo $tbl[$i][0];?>
        </td>
        
    <td  class="td">
    <?php echo $tbl[$i][3];?>
        </td>
        <td  class="td">
        <?php echo $tbl[$i][4];?>
        </td>
         <td  class="td">
        <?php echo $tbl[$i][5];?>
        </td> 
           <td  class="td">
        <?php echo $tbl[$i][6];?>
        </td> 
        <td  class="td">
        <img src="<?php echo $tbl[$i][7];?>"  width="75" height="75"/>
        </td>
        
        <td class="td">
        <?php echo $tbl[$i][10];?>
        </td>
        <td  class="td">
        <?php echo $tbl[$i][11];?>
        </td>
        
         
       
       
    </tr>    
    


<?php
    }
}
}?>
    
    </table><br><br><br><br><br><br>
   
                       </body></html>
