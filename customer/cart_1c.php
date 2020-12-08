<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>

<head>
<style>
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}
    </style>
</head>
<?php 
if(isset($_POST['id']))
{
    $a=$_POST['id'];
    echo $a;
$no=$_POST['no'];
$sql="select * from tbl_item where item_id='$a'";
$sql2="select * from tbl_retailer where ret_email='$user'";
		$tbli=getDatas($sql);
        $tblr=getDatas($sql2);
    
    $ret_id=tblr[0][0];
    $date=date(d-m-yyyy);
    $item_id=$tbli[0][0];
    $amnt=$tbli[0][7];
    $orderm_id=uniqid();
    
    $tot=$no*$amnt;
 

$sql3="insert into `tbl_order_master`(`orderm_id`,`order_date`,`ret_id`,) values(`$orderm_id`,'$date','$ret_id')";
setDatas($sql3);
$sql4="insert into `tbl_order_child` (`orderm_id`,`item_id`,`quantity`) values(`$orderm_id`,`$item_id`,`$no`)";
setDatas($sql4);
echo "<script>alert('successfully  added to your cart!!!')</script>";

}
?>
