<?php
$Email_address_error='';
$password_error='';
if (isset($_POST['submit'])){
  if(empty($_POST['Email'])){
    $Email_address_error='Email invalid';
  }
  if(empty($_POST['password'])){
    $password_error='password invalid';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
      <form action='' method='post'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="text-danger"><?php echo $Email_address_error; ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <div class="text-danger"><?php echo $password_error; ?></div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>
  
</body>
</html>