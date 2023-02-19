<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
  $z=$_POST['uname'];
 $a=$_POST['email'];
 $b=$_POST['password'];
}
// echo $a."".$b;
$con=new mysqli("localhost","grey","","gs");
if($con->connect_error)
{
    echo $con->connect_error;
}
else{
    echo "connection successful";
}
$sql= "insert into login(username,email,password)values('$z','$a','$b')";
 
 if($con->query($sql)){
    // echo '<script>   
    // prompt("Enter Your Name: ");
    // </script>';
     header("location:signup.php");
  
 }
 else{
    echo $con->error;
 }
 ?>
</body>
</html>