<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="ext.css">
</head>
<body>
  <div class="start">SIGN UP WITH US</div>
<div class="form">
<form action="signupback.php" method="post">
<div class="mb-3">
    <br>
    <label for="exampleInputEmail1" class="form-label bo">Username</label>
    <input type="text" class="form-control boxx" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">

  </div>
  <div class="mb-3">
    <br>
    <label for="exampleInputEmail1" class="form-label bo">Email address</label>
    <input type="email" class="form-control boxx" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text bo">We'll never share your email with anyone else.</div>
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label bo"> Create Password</label>
    <input type="password" class="form-control boxx" id="exampleInputPassword1" name="password">
  </div>

  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <br>
  <button type="submit" class="btn btn-primary" style="margin-left: 130px;" name="submit">Submit</button>
</form>
</div>
</body>
</html>