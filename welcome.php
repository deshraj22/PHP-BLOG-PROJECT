<?php
   session_start();
  //  $success=$_SESSION['ok']="session set";
  //  print_r(empty($_POST));
  //  echo $success;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="#">Grey Stallion</a>
      <a href="seeblogs.php"><button class="showblog"><span style="color:#242B2E;">See Your Blogs</span></div></a>
      <!-- <div class="search_box">
        <input type="text" placeholder="Search EasyPay">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div> -->
    </div>

    <div class="header-icons" style="margin-right: 100px;">
      <!-- <i class="fas fa-bell"></i> -->
      <div class="account">
        <!-- <a href="" class="href" style="margin-right:10px ;" onclick="image()"><img src="./pic/img.jpg" alt=""></a> -->
        
        <button type="button" class="btn btn-warning" onclick="image()"><img src="./pic/img.jpg" alt=""></button>
         <h4><?php echo $_SESSION['set']?></h4>
        <!-- <?php echo $_SESSION['gid']?></h4> -->
       
       
        <a href="logout.php" style="margin-left: 20px!important; color:red">Logout</a>
      </div>
    </div>
    
  </header>
  <div class="suc" id="us"><h3>Blog Added Succesfully</h3></div>
  <div class="container">
    <nav>
      <!-- <div class="side_navbar">
        <span>Main Menu</span>
        <a href="#" class="active">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">History</a>
        <a href="#">Application</a>
        <a href="#">My Account</a>
        <a href="#">Documents</a>

        <div class="links">
          <span>Quick Link</span>
          <a href="#">Paypal</a>
          <a href="#">EasyPay</a>
          <a href="#">SadaPay</a>
        </div>
      </div> -->
    </nav>
<div class="image" id="myDIV">
  <h4 style="text-align:center ; color:#242B2E">Add Your Image</h4>
  <!-- <button style="font-size:15px;margin-top:50px;margin-left:129px ;background-color:grey" onclick="close()" id="myDIVV">Close<i class="fa fa-close" style="margin-left:5px ;"></i></button> -->
  <!-- <button type="button" class="btn btn-warning" onclick="close()" style="cursor: pointer;">close</button> -->
<form action="image.php" method="post">
  
<input type="file" id="myfile" name="myfile"><br>
<button type="submit" class="btn btn-primary" style="margin-left: 50px; background-color:#D82E2F; width:100px;" name="sub">Add</button>
</form>
</div>
    <div class="main-body blogbox" style="margin-right:200px">
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1>Write a blog</h1>
        <form action="blog.php" method="post">
            <label>Blog Tittle</label><br>
            <input type="text"  name="bt"><br><br>
        <label>Blog</label><br>
    <textarea id="confirmationText" class="text" cols="50" rows ="5" name="blog"></textarea><br>
    <input type="submit" value="Submit" class="submitButton" name="bts" style="width:100px;background-color:cornflowerblue">
</form>
       
      </div>

      

    </div>
  </div>
  <!-- <a href="seeblogs.php"><button class="showblog"><span style="color:#242B2E;">See Your Blogs</span></div></a> -->
 <?php if(isset($_SESSION['ok'])){
  //  echo $_SESSION['ok']; ?>
   <div class="alert">
  <?php echo $_SESSION['ok'];?>
</div>
   <?php unset( $_SESSION['ok']);
   ?>
 
 <?php  
   } 

 ?>
 <!-- <script>
     var s=document.getElementById("us");
     s.style.display="block";
     console.log('session set hai abhi');
    alert('Blog Added');
    setTimeout(unsett,2000);
  function unsett(){

    console.log('function unset called'); 
    var s=document.getElementById("us");
     s.style.display="none";}
     
  


  </script> -->

  <script>
    var div=document.getElementById("myDIV");
    var display=0;
    function image(){
      if(display==1){
        console.log(display);
        div.style.display = "block"; 
        display= 0;
      }
      else{
        console.log(display);
        div.style.display = "none"; 
        display=1;

      }
      // document.getElementById("myDIV").style.display = "block";  
    }
    // function close(){
    //   console('close');
    //   alert("DIVV");
      // document.getElementById("myDIVV").style.display = "none";  
    // }
  </script>
</body>
</html>
