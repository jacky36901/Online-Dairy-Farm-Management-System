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
if(isset($_GET['id'])){
$a=$_GET['id'];
    $sql="delete from tbl_product where item_id='$a'";
    setDatas($sql);
  echo "<h3 style='position:relative;top:300px;left:450px;color:red'>ITEM SUCCESSFULLY DELETED</h3>";
}

?>