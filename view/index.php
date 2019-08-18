<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Estavela</title>
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
  <?php session_start();
  if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
  }
  // var_dump($loggedin);

  ?>
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
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <?php if (empty($_SESSION['user'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="routes.php?page=showlogin">Login<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="routes.php?page=showregister">Register<span class="sr-only">(current)</span></a>
          </li>
        <?php } ?>
        <?php if (!empty($_SESSION['user']) && !empty($user['admin'] == 1)) {  ?>
          <li class="nav-item active">
            <a class="nav-link" href="routes.php?page=shownewsletter">Send newsletter<span class="sr-only">(current)</span></a>
          </li>
          <!-- <li>
            <a class="nav-link" href="routes.php?page=showallorders">View orders<span class="sr-only">(current)</span></a>
          </li> -->
        <?php } ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <span class="text-white"><?php
          if (!empty($_SESSION['user'])) {
            echo "User : " . $_SESSION['user']['name'];
          } ?>&nbsp;&nbsp;</span>
        <?php if (isset($user)) { ?>
          <input class="btn btn-sm btn-outline-warning my-2 my-sm-0" type="submit" name="page" value="Logout">
        <?php } ?>
      </form>
    </div>
  </nav>
  <div class="container-fluid mb-5 mt-5">
    <hr class="invisible">
    <h3 class="text-center text-primary">PHP web projects</h3>
    <div class="row">
      <div class="col-4">
        <h3 class="card-text"><a class="font-weight-bold" href="https://webshop.estavela.in.rs/view">Webshop</a></h3>
        <a href="https://webshop.estavela.in.rs/view"><img src="../images/webshop.jpg" width="400" alt="webshop"></a>
      </div>
      <div class="col-4">
        <h3 class="card-text"><a class="font-weight-bold" href="https://oglasi.estavela.in.rs/view">Oglasi</a></h3>
        <a href="https://oglasi.estavela.in.rs/view"><img src="../images/oglasi.jpg" width="400" alt="oglasi"></a>
      </div>
      <div class="col-4">
        <h3 class="card-text"><a class="font-weight-bold" href="https://laravel.estavela.in.rs">Laravel project</a></h3>
        <a href="https://laravel.estavela.in.rs"><img src="../images/laravel_project.jpg" width="400" alt="laravel_project"></a>
      </div>
      <div class="col-4">
        <h3 class="card-text"><a class="font-weight-bold" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS & method</a></h3>
        <a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs"><img src="../images/scs.jpg" width="400" alt="scs"></a>
      </div>
      <div class="col-4">
        <h3 class="card-text"><a class="font-weight-bold" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showgavrilovic">prof.Gavrilovic method</a></h3>
        <a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showgavrilovic"><img src="../images/gavrilovic.jpg" width="400" height="198" alt="gavrilovic"></a>
      </div>
      <div class="col-4">
        <h3 class="card-text"><a class="font-weight-bold" href="https://vidime.org">Vidi Me - https://vidime.org</a></h3>
        <a href="https://vidime.org"><img src="../images/vidime.jpg" width="400" height="198" alt="vidime"></a>
      </div>
    </div>
    <!--end row-->
    <hr class="invisible">
    <hr class="invisible">
    <h3 class="text-primary text-center">Estavela GIS noticeBoard</h3>
    <hr class="invisible">
    <div class="row">
      <div class="col-6">
        <h4 class="card-text"><a href="routes.php?page=showgis">Environmental engineering for protection against erosion of shores, forests and watercourses, design and development of GIS environments.</a></h4>
        <a href="routes.php?page=showgis"><img src="../images/gis.jpg" width="400" height="198" alt="gis"></a>
      </div>
      <div class="col-6">

        <h4 class="text-primary"><a href="routes.php?page=showinfo">Projects Estavela- Designing and producing studies</a></h4>
        <hr class="invisible">
        <hr class="invisible">
        <a href="routes.php?page=showinfo"><img src="../images/zlatarsko_jezero.jpg" width="400" alt="studies" /></a>
      </div>
      <div class="col-6">
        <h4 class="text-primary"><a href="routes.php?page=showinfo">- Monitoring the beach in Montenegro</a></h4>
        <a href="routes.php?page=showinfo"><img src="../images/przno.jpg" width="400" alt="studies" /></a>
      </div>
      <div class="col-4 text-right">
        <fieldset class="mt-3">
          <h4 class="text-primary font-weight-bold">Sign up for Newsletter</h4>
          <?php $errors = isset($errors) ? $errors : array();
          $msg = isset($msg) ? $msg : ""; ?>
          <form action="routes.php" method="POST">
            <input class="form-control" type="text" name="name" placeholder="Name">
            <br>
            <span class="alert-danger">
              <?php if (array_key_exists('name', $errors)) {
                echo $errors['name'];
              } ?>
            </span>
            <br>
            <input class="form-control" type="text" name="surname" placeholder="Surname">
            <br>
            <span class="alert-danger">
              <?php if (array_key_exists('surname', $errors)) {
                echo $errors['surname'];
              } ?>
            </span>
            <br>
            <input class="form-control" type="text" name="email" placeholder="Enter your email">
            <br>
            <span class="alert-danger">
              <?php if (array_key_exists('email', $errors)) {
                echo $errors['email'];
              } ?>
            </span>
            <br>
            <input type="submit" name="page" value="Submit newsletter">
          </form>
        </fieldset>

        <?php
        // echo "<span class=alert-warning>$msg</span>";
        if (!empty($msg)) {
          ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $msg;  ?>
          </div>
        <?php
        } ?>
      </div>
    </div>
  </div>
  <footer class="fixed-bottom bg-dark">
    <div class="container text-center">
      <h6><a class="text-white" href="routes.php?page=showhome">Copyright by Uros Tatomir 2019</a></h6>
    </div>

  </footer>
  <!--end footer div-->

</body>

</html>