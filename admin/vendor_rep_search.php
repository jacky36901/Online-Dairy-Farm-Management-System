<?php

include_once("../shares/db/mydatabase.inc"); 
include_once("top.php");
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
    body
    {
       background:url(../img/milk3.jpg) no-repeat top fixed ;
        background-size:cover;
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
        }
    
</style>
 <script src="..///common/maha.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#date" ).datepicker({
	   				maxDate: 0
                    
	   			});
            });</script>
	<script>
	  		$( function() {
	   			$( "#date1" ).datepicker({
	   				maxDate: 0
                    
	   			});
            });</script>
    <style>
        .ui-datepicker { 
        height: 300px;
         line-height: 3px;
        }
        
        
    </style>
</head>
<body>
    
<br><br><br><br><br><br><br><br>
    
    
    <div class="container_1">
    <form action="vendor_rep.php" method="post">
        
<table class="table1">
<br>
    <h1><center>VENDORS REPORTS</center></h1><br><br>
<tr>
<td>

<label>FROM :</label>
</td>
<td><input type="date" name="txtStartDate" placeholder="Y/M/D" class="b"></td>
</tr>
<tr><td><label> TO:</label></td>
<td> <input type="date" name="txtEndDate"  placeholder="Y/M/D" class="b"></td>
</tr>
      <tr>
<td></td><td><input type="submit" name="search" value="search" ></td>
</tr>
        </table>
        
</form></div>
