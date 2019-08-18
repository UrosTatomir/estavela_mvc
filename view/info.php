<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estavela-projects</title>
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
<div class="container-fluid mt-5 mb-5">
           <div class="row p-3 " style="background-color: #FED502;"> <!--start row tag #FDE600-->          
                <div class="col-2">
                <hr class="invisible">
                    <a href="index.php"><img src="../images/estavela.logo.jpg" class="rounded-circle" style="display:inline"  width="100" height="100"/></a>
                </div>
                <div class="col-4">
                    <hr class="invisible">
                    <h4 class="font-italic font-weight-bold" style="color: #06342D;">Estavela Ecological Engineering for GIS Environments</h4>
                </div>             

                <div class="col-4 maps" >
                <hr class="invisible">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44046.34778673461!2d20.373595703090647!3d44.81842912563373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ac98796b9b4098e!2sEstavela!5e0!3m2!1ssr!2srs!4v1540830623478" width="500" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                </div>
            </div> <!--end row tag-->
            <hr class="invisible">
     <div class="row">   <!--start row div-->
               <div class="col-sm-4">
                  <a href="../images/estavela_profil1.jpg"><img src="../images/estavela_profil1.jpg" class="rounded"  width="320"/></a>
                  <h4 class="text-primary">A project for monitoring erosion processes on beaches in Montenegro, beaches period 2004 - 2011</h4>
                  <p class="font-italic" style="font-size: 14px"><a  href="../downloads/monitoring04-06.pdf">
                      A project for monitoring erosion processes on beaches in Montenegro, Mogren, Przno, Sveti Stefan and Petrovac beaches period 2004 - 2011   
                  </a></p>
                  <ul class="font-italic text-success" style="font-size: 14px">
                     <li><a  href="../downloads/monitoring_seminar.pdf">Preparation of a manual for the implementation of a beach monitoring project in Montenegro</a></li>

                     <li><a href="../downloads/clanak_monitoring_plaza_Sava_Petkovic.pdf" >Collection of available data on climate characteristics, winds, waves and other relevant natural factors along the Montenegro coast</a></li>

                     <li><a  href="../downloads/presentation_monitoring_04_05.pdf">Collection of data on current research of the characteristics of erosion processes and stability of Montenegrin beaches</a></li>

                     <li><a href="../downloads/mogren_1931.jpg">Collection of all available backgrounds, data, old maps and photos about the former appearance of Montenegrin beaches</a></li>

                     <li><a class="text-success" href="index.phtml">Creation of a database of measurement results and observations of changes on selected beaches</a></li>

                     <li><a class="text-success" href="index.phtml">Creation of periodic reports</a></li>
                  </ul>
               </div>
               <div class="col-4">
                  <a href="../images/kacema1.jpg"><img src="../images/kacema1.jpg"  width="380" alt="Kacema"/></a>

                  <h4><a href="index.phtml">Development of projects within the of ecological engineering environment</a></h4>
                
                  <ul class="font-italic text-success" style="font-size: 14px">
                      <li>ecological engineering</li>
                      <li>regulation of floods</li>
                      <li>protection against erosion and melioration of forest and agricultural areas</li>
                      <li>protection against erosion of the coast and river sides</li>
                      <li>forests and waters</li> 
                      <li>rehabilitation of torrent banks</li>
                      <li>environmental protection</li>
                      <li>secondary breakwater</li>
                      <li>feasibility study of coastal - flood regulation</li>
                      <li>forest protection projects</li>
                      <li>land erosion</li>
                      <li>degradation of forest habitats</li>
                      <li>reduction of fires, afforestation</li>
                      <li>conservation of soil</li>                         
                 </ul>
               </div>
               <div class="col-4">
                  <h4 class="text-primary">Projects Estavela:</h4>
                  <ul class="font-italic" style="font-size: 14px">
                      <li><a href="index.phtml" class="text-success">Budva Catastre Project for JP Morsko Dobro Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Coastal belt forest protection projects from land erosion and degradation of forest habitats</a></li>
                      <li><a href="index.phtml" class="text-success">Reviewed by Dukley Marina Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Reduction of fires, afforestation, conservation of soil</a></li>
                      <li><a href="index.phtml" class="text-success">Projects for planned exploitation of forest land in the coastal zone</a></li>
                      <li><a href="index.phtml" class="text-success">Preparation of the Study for the preparation of changes to the Main Project will be carried out by Kacema Municipality of Ulcinj</a></li>
                      <li><a href="index.phtml" class="text-success">Study for the rehabilitation of the specific torrent farm  ( municipality of Kotor )</a></li>                     
                      <li><a href="index.phtml" class="text-success">Study on the possibilities of improving water circulation in the bay ( was done in Tivat, Pržno beach )</a></li>
                      <li><a href="index.phtml" class="text-success">Arranging the coast and building a coastal wall on the beach ( Pržno ) </a></li>
                      <li><a href="index.phtml" class="text-success">Building project and construction of city marina in Herceg Novi- secondary breakwater </a></li>
                      <li><a href="index.phtml" class="text-success">Design for beach nourishment on beach Zavala - Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Coastal regulation in Lipci - Kotor and construction of small pocket beach</a></li>
                      <li><a href="index.phtml" class="text-success">Conceptual design for the coast in the bay of Kamenovo</a></li>
                      <li><a href="index.phtml" class="text-success">Preparation of the Ananlise Study of the planned docking solution in Čanje Municipality Bar</a></li>
                      <li><a href="../downloads/SLM1_final.pdf">Sustainable land managment in the Lim river basin</a></li>                    
                           
                  </ul>
               </div>
               
         </div> <!-- end row div-->
</div><!--end container-fluid-->
<footer class="fixed-bottom bg-dark">
<div class="container text-center">
<h6><a class="text-white" href="#">Copyright by Uros Tatomir 2019</a></h6>
</div>       
</footer> <!--end footer div-->
</body>
</html>