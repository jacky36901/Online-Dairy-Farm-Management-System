<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<br><br><br><br>
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
    //echo $a;
$no=$_POST['no'];
	$sql2="select * from tbl_customer where ret_email='$user'";
        $tblr=getDatas($sql2);
       $ret_id=$tblr[0][0];
	$place=$tblr[0][5];
$sql="select * from tbl_product where item_id='$a'";		
		$tbli=getDatas($sql);
	 date_default_timezone_set('Asia/Calcutta');
    $date=date(d-m-yyyy);
    $item_id=$tbli[0][0];
    $amnt=$tbli[0][7];
      // $orderm_id=uniqid();
    $tot=$no*$amnt;
    $p=$tbli[0][1];
    $br=$tbli[0][2];
    $img=$tbli[0][4];
	$q=$tbli[0][8];
	if($q<=0){
		echo "<h1 style='position:relative;top:250px;left:620px;color:red;'>out of stock...</h1>";
	}
	else if($q<$no)
	{
		echo "<h1 style='position:relative;top:250px;left:620px;color:red;'>available quantity:".$q.". if u need more wait for two days...</h1>";
	}
	else{
	$qun=$q-$no;
 
$sql="update tbl_product  set quantity='$qun' where item_id='$a'";
		setDatas($sql);
$sql3="insert into `tbl_cart`(`buyer`, `p_id`, `p_name`, `brand`, `num`, `t_amnt`, `img`,`pay_status`,`o_date`,`place`,`del_status`) values('$user','$a','$p','$br','$no','$tot','$img','null','null','$place','PENDING')";
setDatas($sql3);
// $sql4="insert into  `tbl_order_master`(`orderm_id`,`order_date`,`ret_id`) values(`$orderm_id`,`$date`,`$user`)";
  //  setDatas($sql4);
    //$sql5="insert into `tbl_order_child`(`orderm_id`,`item_id`,`quantity`,`t_amnt`) values(`$orderm_id`,`$a`,`$no`,`$tot`)";
    //setDatas($sql5);
echo "<script>alert('successfully  added to your cart!!!')</script>";
nextpage('view_cart.php');
}
}
?>
