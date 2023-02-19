<?php
session_start()
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
  <body>
    <?php
       $con=new mysqli("localhost","grey","","gs");
       if($con->connect_error)
       {
           echo $con->connect_error;
       }
       else{
        //    echo "connection successful";
       }
       $useid=$_SESSION['gid'];
        // echo $useid;
       $sql="select * from blogdata where bid='$useid'";
       $res=$con->query($sql);
       if($res->num_rows>0){
        while($row=$res->fetch_assoc()){?>
            <div class="card  cardcss">
            <h5 class="card-header" style="background-color:#242B2E; color:#A77B06;"><?php echo $row['tittle']?></h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text"><?php echo $row['blog']?></p>
              <a href="#" class="btn btn-primary">Go somewhere</a> 
            </div>
          </div>
          <?php
        }
}?>
  
  <!-- <div class="card  cardcss">
  <h5 class="card-header" style="background-color:#242B2E; color:#A77B06;"><?php echo $row['tittle']?></h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text"><?php echo $row['blog']?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>