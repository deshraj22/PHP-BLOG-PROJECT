<?php

if(isset($_POST['txtsubmit']))
{
    $g=$_POST['unamee'];
    $c=$_POST['emaill'];
    $d=$_POST['passwordd'];
    // echo $c."".$d;
   }
   $con=new mysqli("localhost","grey","","gs");
if($con->connect_error)
{
    echo $con->connect_error;
}
else{
    echo "connection successful";
}
$sql="select * from login where username='$g' and email='$c' and password='$d'";
$res=$con->query($sql);
if($res->num_rows>0){
    while($row=$res->fetch_assoc()){$giveid=$row['id']; echo $giveid;};
    session_start();
    $_SESSION['set']=$g; 
    $_SESSION['gid']=$giveid; 
    // echo $g;
    header("location:welcome.php");
    
}
else{
    header("location:login.php");
}

?>