<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM tbl_cart where cart_id='$id'";
    setDatas($sql);
    echo "<script>alert('successfully  removed!!!')</script>";
nextpage('view_cart.php');
}
?>