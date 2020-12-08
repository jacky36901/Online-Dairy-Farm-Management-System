<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
 include("top.php");
?>
<head>
<style>
   
     body {
	background:url(../img/milk1.jpg) no-repeat top fixed ;
        background-size:cover;
      }
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: white;
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
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:80px;
    height:45px;
  margin: auto;9  text-align:left;
  font-family: arial;
}
    .s1{
        position: absolute;
        top: 25px;
        left: 25%;
        transform: translate(-50%,-50%);
        width: 550px;
        height: 520px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.8);
       color:burlywood; 
    }
input[type=submit]:hover {
    background-color: #ac2925;
}
</style>
</head>
<div style="position:relative;top:330px">

<?php
$sql="select * from tbl_staff where staff_email='$user'";
$tbl=getDatas($sql);

?>


     <center>
         
         <div class="s1">
    <h3><font color="sky blue">MY PROFILE</font> </h3>
      
        <form action="" method="post" >
          
            <table cellspacing="5" cellpadding="5" style="position:relative;top:30px;"> 
                <tr>
                    <td>
                        <label> NAME</label>
                    </td>
                    <td>
                        <?php echo $tbl[0][1];?>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                
               <tr>
                    <td>
                        <label> GENDER:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][8];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label>PHONE NUMBER:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][9];?>
                      </td>
                </tr> <tr><td></td></tr>
        <tr>
                    <td>
                        <label>EMAIL:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][10];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label> ADDRESS:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][7];?>
                      </td>
                </tr>
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label>JOIN DATE:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][4];?>
                      </td>
                </tr>
        <tr><td></td><td>
                
                   </td></tr>
               <tr><td></td><td></td></tr>
				<tr><td></td></tr>
                  
            </table>    
        </form>
         </div>
         
           </center>
                                   </div>
        <div class="clearfix"></div>
    
