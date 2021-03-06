<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>forgot password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</head>
<body style="background:linear-gradient(to top,#FFFFFF,white) no-repeat fixed center;">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="routes.php?page=showhome">Estavela</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="routes.php?page=showhome">Home <span class="sr-only">(current)</span></a>
      </li>
         
    </ul>  
  </div>
</nav>
 <?php
    // $email=isset($_GET['email'])?$_GET['email']:""; 
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    $email=isset($_GET['email'])?$_GET['email']:"";
    
    ?>
<div class="container-fluid">
<div class="container mt-5 p-5">
        <div class="container mt-5 col-4 text-center">
            <h4>Change password</h4>
            <form action="routes.php" method="post">
            <input class="form-control" type="hidden" name="email" value="<?php echo $email; ?>">
            <input class="form-control" type="password" name="password" placeholder="Insert new password">
            <br>
            <span class="alert-danger">
                <?php if (array_key_exists('password', $errors)) {
                    echo $errors['password'];
                } ?>
            </span>
            <br>
            <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm  password">
            <span class="alert-danger">
                <?php if (array_key_exists('confirmpassword', $errors)) {
                    echo $errors['confirmpassword'];
                } ?>
            </span>   
            <br>
            <input class="btn btn-primary" type="submit" name="page" value="update_password">
            </form>
            
            &nbsp;
            <?php
            if (!empty($msg)) {   //sve sto saljemo includom $msg ide ovako
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php  } ?>
        </div>
</div>
</div><!--end container-fluid-->
<footer class="fixed-bottom bg-dark">
        <div class="container text-center">
        <h6><a class="text-white" href="#">Copyright by Uros Tatomir 2019</a></h6>
        </div>
        
</footer> <!--end footer div-->
</body>
</html>