<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
 include("top.php");
?>
<head>
<style>
       
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: blackss;
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
body
    {
        background-image: url(p6.jpg);
        background-size: 1750px;
        background-repeat: no-repeat;
    }
input[type=submit]:hover {
    background-color: #ac2925;
}
      .s1{
        position: absolute;
left: 435px;
    top: 210px;
        transform: translate(-50%,-50%);
        width: 540px;
        height: 420px;
    border-radius:10px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.5);
       color:white; 
    }
</style>
</head>
<div style="position:relative;top:150px;">

<?php
$sql="select * from tbl_customer where ret_email='$user'";
$tbl=getDatas($sql);

?>

<div class="w3_login">
    <h3 style="position: relative;top:5px;left:250px;">MY PROFILE </h3>      
    <div class="s1">  
    <form action="" method="post" >
            <table style="position: relative;left:20px;top:55px">
			<div id="err" style="color: red;height: 20px"></div> 
                <tr>
                    <td>
                        <label> NAME:</label>
                    </td>
                    <td>
                        <?php echo $tbl[0][1];?>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                
               <tr>
                    <td>
                        <label> DATE OF BIRTH:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][2];?>
                      </td>
                </tr>
                 <tr><td></td></tr>
        <tr>
                    <td>
                        <label> STREET:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][3];?>
                      </td>
                </tr> </tr> <tr><td></td></tr>
        <tr>
                    <td>
                        <label> CITY:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][4];?>
                      </td>
                </tr>
                <tr><td></td><td></td></tr>
		 <tr>
                    <td>
                        <label> DISTRICT:  </label>
                    </td>
                    <td>
                          <?php echo $tbl[0][5];?>
                      </td>
                </tr>
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label>PHONE NUMBER:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][7];?>
                      </td>
                </tr> <tr><td></td></tr>
        <tr>
                    <td>
                        <label> EMAIL:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][6];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                
                
        <tr><td></td><td>
                
                   </td></tr>
               <tr><td></td><td></td></tr>
          <tr><td></td><td></td></tr>
         
                <tr><td>
                        <div class="w3l_header_right1">
      &emsp;&emsp;&emsp;&emsp;<h2><a href="edit.php"><font color="red">EDIT</font></a></h2>
    </div></td></tr>
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
    
