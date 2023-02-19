<?php
session_start();
$oid= $_SESSION['gid'];
// echo $oid;
if(isset($_POST['bts']))
{
  
    $bt=$_POST['bt'];
    $blog=$_POST['blog'];

    //  echo $bt."".$blog;
   
   $con=new mysqli("localhost","grey","","gs");
if($con->connect_error)
{
    echo $con->connect_error;
}
else{
    // echo "connection successful";
}
$sql="insert into blogdata(bid,tittle,blog)values('$oid','$bt','$blog')";
 
 if($con->query($sql)){ 
    

    session_start();
     $_SESSION['ok']="Blog Added Sucessfully";
    header("location:welcome.php");
 }
 else{
    echo $con->error;
    
 }
 
}  
  
   
  
?>