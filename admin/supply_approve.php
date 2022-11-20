<?php  

  include "config.php";
    

  $id1=$_POST['id'];

  $rs=mysqli_fetch_array(mysqli_query($con,"SELECT *  FROM partner_with_supply where id=$id1")); 
$id=$rs['id']; 
    //$remark=$rs['remark'];  
    //echo $remark;

?>




 

