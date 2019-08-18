<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estavela-GIS</title>
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
<div class="container-fluid mt-5">
 
                 <div class="row" style="background-color: #FED502;"> <!--start row tag #FDE600-->
                       
                       <div class="col-2">
                       <hr class="invisible">
                            <a href="index.php"><img src="../images/estavela.logo.jpg" class="rounded-circle" style="display:inline"  width="100" height="100"/></a>
                        </div>
                        <div class="col-4">
                         <hr class="invisible">
                            <h4 class="font-italic font-weight-bold" style="color: #06342D;">Estavela Ecological Engineering for GIS Environments</h4>
                       </div>             

                       <div class="col-md-4 maps" >
                        <hr class="invisible">
                       	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44046.34778673461!2d20.373595703090647!3d44.81842912563373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ac98796b9b4098e!2sEstavela!5e0!3m2!1ssr!2srs!4v1540830623478" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
         					
                       </div>
                 
                 </div> <!--end row tag-->

                 <div class="row"> <!--start row tag-->                     
                        <div class="col-md-4">
                          <h4><a href="index.phtml" class="text-success">Environmental Geographic Information System - GIS</a></h4>
                          <a href="../images/estavela_gis2.jpg"><img src="../images/estavela_gis2.jpg" class="rounded"  width="330" /></a>
                          <!-- <hr>                          -->
                          <p class="mb-1" style="font-size:14px"><a  href="index.phtml" class="text-secondary">The concept of GIS is not geographically new. In the original sense, geographers use such systems for many years, but "footsteps" - without the use of a computer. For example, drawing on paus paper and overlapping such pauses is a classic example. Such an example is the cholera epidemic in London in 1854. Dr. John Snow found the position of the infectious disease site by drawing deaths.
                          He found that the concentration of some 500 cases was within a few hundred meters around a public water pump at Broad Street, Soho. Dr Snou managed to prove the following: when the pump handle was removed, the new cases were not diagnosed in that street. He proved that the pump was the source of these cases of infection and that the source of the infection was infected with water using a simple data analysis.</a></p>

                          <h4><a href="index.phtml" class="text-success">Spatial analysis with geographical information system (GIS)</a></h4>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="index.phtml">Data analysis</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Topological modeling</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Geometric networks</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Hydrological modeling</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Cartographic modeling</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Map overlay</a></li>
                            </ul>   
                        
                        </div>
                        <div class="col-md-4">
                        
                           <h4><a href="index.phtml" class="text-success">Field of application GIS</a></h4>
                           <div class="list-group">
                                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Geostatistics</h5>
                                        <!-- <small>3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Is a branch of statistics that deals with field data, spatial data with a continuous index. It provides methods to model spatial correlation, and predict values at arbitrary locations (interpolation).</p>
                                      <small>part 1.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Address geocoding</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Geocoding is interpolating spatial locations (X,Y coordinates) from street addresses or any other spatially referenced data such as ZIP Codes, parcel lots and address locations.</p>
                                      <small class="text-muted">Part 2.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Reverse geocoding</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Reverse geocoding is the process of returning an estimated street address number as it relates to a given coordinate. For example, a user can click on a road centerline theme (thus providing a coordinate) and have information returned that reflects the estimated house number.</p>
                                      <small class="text-muted">Part 3.</small>
                                  </a>
                                    <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Data output and cartography</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Cartography is the design and production of maps, or visual representations of spatial data.</p>
                                      <small class="text-muted">Part 4.</small>
                                  </a>                                  
                                    <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Graphic display techniques</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Traditional maps are abstractions of the real world, a sampling of important elements portrayed on a sheet of paper with symbols to represent physical objects. People who use maps must interpret these symbols. Topographic maps show the shape of land surface with contour lines or with shaded relief.</p>
                                      <small class="text-muted">Part 5.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Applications</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">The implementation of a GIS is often driven by jurisdictional (city,country,...), purpose, or application requirements. Generally, a GIS implementation may be custom-designed for an organization. Hence, a GIS deployment developed for an application, jurisdiction, enterprise, or purpose may not be necessarily interoperable or compatible with a GIS that has been developed for some other application, jurisdiction, enterprise, or purpose.</p>
                                      <small class="text-muted">Part 6.</small>
                                  </a>
                              </div>
                           <!-- <p style="font-size: 16px"><a href="#" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p> -->
                          
                        </div>
                        <div class="col-md-4 ">
                        
                           <h4><a href="index.phtml" class="text-success">Use of vector data</a></h4>
                           <a href="../images/estavela_gis3.jpg"><img src="../images/estavela_gis3.jpg" class="rounded"  width="330" /></a>
                           <!-- <hr> -->
                           <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">Vectors models are points, lines and  
                            polygons. Vector data is not made up of a grid of pixels. Instead, vector graphics are comprised of vertices and paths.
                            The three basic symbol types for vector data are points, lines and polygons (areas). Because cartographers use these symbols to represent real-world features in maps, they often have to decide based on the level of detail in the map.
                         </a></p>
                         <!-- <hr> -->
                           <a href="../images/estavela_gis4.jpg"><img src="../images/estavela_gis4.jpg" class="rounded"  width="330" /></a>
                          <!-- <hr> -->
                           <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">In the Geographic Information System, common purpose is to make decisions in managing some spatial activities, so that GIS can be defined as an IS for the purpose of collecting, processing, managing, analyzing, displaying and maintaining spatially oriented information.</a></p>

                        </div>
                        

                 </div> <!-- end row tag-->
                 <div class="row shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">Data stream in GIS</a></h4>
                            <a href="../images/estavela_gis5.jpg"><img src="../images/estavela_gis5.jpg" class="rounded"  width="330"/></a> 
                            <!-- <hr> -->
                            <h5 style="font-size: 16px"><a href="#">The data we work with in GIS are divided into two groups:</a></h5>
                               <ol class="list-group-item-active" style="font-size: 14px">
                                <li class="list-group-item-active">- Graphic(
                                 maps,satellite images, aerial photographs,etc.)</li>                         
                                <li class="list-group-item-active">- Alphanumeric (data in 
                                 text and numerous formats)</li>
                              </ol>
                            
                             <!-- <hr> -->
                             <h5 style="font-size: 16px" ><a href="index.phtml">Basic operations over GIS data are:</a></h5>
                             <ol class="list-group-item-active" style="font-size: 14px">
                                <li class="list-group-item-active">- Data entry</li>
                                <li class="list-group-item-active">- Data storage</li>
                                <li class="list-group-item-active">- Managing and maintaining data</li>
                                <li class="list-group-item-active">- Data analysis</li>
                                <li class="list-group-item-active">- Displaying data</li>
                             </ol>
                         
                        </div>

                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">GPS System</a></h4>
                            <a href="../images/estavela_gis7.jpg"><img src="../images/estavela_gis7.jpg" class="rounded"  width="330"/></a> 
                            <!-- <hr> -->
                            <h5 style="font-size: 16px"><a href="index.phtml">The GPS system consists of three components:</a></h5>
                            <ol class="list-group-item-active"style="font-size: 14px">                                                          
                               <li class="list-group-item-active">- Components in the universe</li>
                               <li class="list-group-item-active">- Control components</li>
                               <li class="list-group-item-active">- Use components</li>
                            </ol>
                            <!-- <hr> -->
                            <a href="../images/estavela_gis8.jpg"><img src="../images/estavela_gis8.jpg" width="330" /></a>
                         
                        </div>

                        <div class="col-md-4 ">
                            <h4><a href="index.phtml" class="text-success">Maps</a></h4>
                            <ol class="list-group-item-action" style="font-size: 16px;">
                                  <li class="list-group-item-active"><a href="index.phtml">Map definition</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Elements of the map</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Geodetic basis of mapping</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Cartographic projections</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Deformations of the Earth's surface</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">State Rectangular Coordinate System</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Measurement</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Distribution of maps according to content</a></li>
                                  <li class="list-group-item-active"><a href="index.phtml">Map frame</a></li>
                            </ol> 
                            <!-- <hr> -->
                            <a href="../images/estavela_gis9.jpg"><img src="../images/estavela_gis9.jpg" width="330"/></a>
                            
                        </div>

                 </div> <!-- end row tag-->

                 <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                 <div class="container">
                  <h3 class="text-center" style="font-family: cursive, sans-serif; color: #2A65CB;">Organization of data in GIS</h3>
                 <div class="row  bg-white rounded"> <!--start row tag--> 
                        
                        <div class="col-4"> 
                            <h3> Geometric Units</h3>
                            <ul>
                             <li><h4 class="font-weight-bold"><a href="index.phtml">Points</a></h4></li>

                             <li><h4 class="font-weight-bold"><a href="index.phtml">Lines</a></h4></li>

                             <li><h4 class="font-weight-bold"><a href="index.phtml">Polygons</a></h4></li>
                                
                            </ul>
                                
                            <h3>Cartographic Units</h3>
                            <ul>
                             <li><h4 class="font-weight-bold"><a href="index.phtml">Attributes data</a></h4></li>

                             <li><h4 class="font-weight-bold"><a href="index.phtml">Graphical data</a></h4></li>

                             <li><h4 class="font-weight-bold"><a href="index.phtml">Geometric data</a></h4></li>
                           </ul>      
                        </div>
                        <div class="col-6">
                        <img  src="../images/estavela_layers.jpg"  width="800" alt="layers" /> 
                        </div>
                  </div> <!-- end row tag-->
                  </div> <!--end container-->
                  <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                   <div class="container-fluid">
                   <h3 class="text-center text-primary">Digital Elevation Model DEM</h3>
                   <div class="row"> <!--start row tag-->        
                       <div class="col-4">

                           <h4 class="text-success text-center">Metadata</h4>
                              <p style="font-size: 14px">Metadata are a set of attributes needed to describe a resource-data data. For example, metadata is used in library books to describe books, so the library catalog contains a brief description of each book (author name, title, brief description, place on the shelf, ...). There are two ways to store data and metadata:</p>
                            <ul>
                              <li>metadata and data are separated, (as in the case of a library catalog)</li>
                              <li>metadata are placed with the data itself (when printing books, where the  book  information is placed in the book itself)</li>
                              <li class="text-success">For this purpose, points can be in one of the following ways:</li>
                               <li>Direct measurement in the field;</li>
                               <li>Photogrammetric survey;</li>
                               <li>Georeferencing of satellite data and recordings;</li>
                               <li>Digitization from point maps or isochips.</li> 
                            </ul>
                        </div>
                        <div class="col-8">
                          <img src="../images/estavela_gisDEM.jpg" width="800" alt="DEM"/>
                            <ul>
                                <li class="text-success">Digital Elevation Model (DEM) - represents the three-dimensional shape of the Earth's surface in digital form. For this purpose, points need to have all three coordinates and they can be:
                                </li>
                                <li>presented through triangles (TIN)</li>
                                <li>presented in the correct square or rectangular grid (GRID)</li>
                                <li class="text-success">As a result, the digital terrain model gets:</li>
                                <li>display on the map by means of isochips;</li>
                                <li>Three-dimensional terrain display using profiles, squares, and shadows.</li>
                            </ul>
                        </div> <!--end col-8-->
                 </div> <!--end row tag-->
                 </div> <!--end container-->

        <div class="container-fluid text-center" style="background-color: #06342D"> <!--#606721-->
             <h4 style="color: #FED502;">Raster, vector, coordinate systems, attributes, databases, software</h4>
             <div class="row">
                
                <div class="col-4">
                    <h4 style="color: #FED502;">raster + DEM + vector => layers</h4>
                   <img src="../images/estavela_layers2.jpg" style="display:inline" alt="Bird" width="400"/>
                    <h4 style="color: #FED502;">raster + vector(polygons,line,point) => layers</h4> 
                   <img src="../images/estavela_card.jpg" style="display:inline" alt="estavela_card" width="400"/>   
                </div>
                <div class="col-4">
                    <h4 style="color: #FED502;">Explanation raster-vector (format)</h4>
                    <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Generally in digital format, digital data can be divided into vector and raster formats.

                      The raster consists of a rectangular network of the same dimensions (pixels), where each rectangle has its value. The vector format uses simple geometric shapes such as a point, a line segment, and a polygon. The biggest advantage over raster format is that it takes up less memory space.</p> 
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">As an example, a circle in a two-dimensional space can be indicated. The definition of a circle by raster format is almost impossible (there would be an infinite number of pixels), while only a few data is sufficient for the definition of a circle in a vector format: radius and coordinates of the center.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Spatial data has certain characteristics that can be described by terms: form, location and relation to other spatial data (or geometry, position and topology). It is also important to model real-world data (such as roads or buildings) in terms of geographic representation.</p>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">For example, the path can be displayed by a line, and the building may be a polygon on the map. These properties (line, polygon) are actually models of real phenomena of the real world. Sometimes these models are called objects or entities. Another important aspect of spatial data is that they often contain attribute information. This means that the description of the occurrence (eg times) is kept in some form. The description may be a name or type of road (A, B, motorway), and the object would be a line segment.</p>
                         
                </div>
                <div class="col-4">
                <hr class="invisible">
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">The second example can be a trigonometric, which can be represented by a geometric shape of a point, and the attribute can be a height. The lakes could be represented by a geometric form of a polygon, with the attribute name. Most commonly, the same objects are grouped into layers, so that all trigonometers can be grouped into one layer, all the lakes in the second layer, all the paths in the third layer, and so on.</p>
                      <h4 style="color: #FED502;">Database</h4>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">After collecting and adjusting geographic data to the system, it is necessary to preserve them in the geographic information system in charge of storing geographic data - a database. The data is stored in the database in an organized way (which is one of the advantages of information systems in general). Spatial databases should be used in spatial data.</p>
                      <h4 style="color: #FED502;">Spatialdatabase</h4>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Today, spatial data is collected in a particular coordinate system and visualized in a specific cartographic projection. Accose data is collected in one system, and the information system uses another coordinate system, the data needs to be adjusted through the conversion process.</p>
                </div> 
                <div class="col-12 text-center mt-3">      
                     <h4 style="color: #FED502;">Software</h4>
                </div>
                <div class="col-4">
                      
                     <h4 class="font-weight-bold font-italic" style="font-size: 14px; color: #FED502;">LPS (Leica Photogrammetry Suite), eCognition, ESRI ...</h4>
                      <img src="../images/erdas.jpg" style="display:inline" alt="erdas" width="330"/>
                      <h4 class="font-weight-bold font-italic" style="font-size: 14px; color: #FED502;">erdas image 2</h4>
                     <img src="../images/otago.jpg" style="display:inline" alt="otago" width="330"/>
                     <h4 class="font-weight-bold font-italic" style="font-size: 14px; color: #FED502;">Qgis open source software used to work with vectors.</h4>
                     <img src="../images/qgis.jpg" style="display:inline" alt="qgis" width="330"/>
                      <p class="font-italic text-left" style="color: #FED502;">Based on the previous text, it can be concluded that the software used in GIS can be divided into:</p>
                      <p class="font-italic text-left" style=" color: #FED502;">Often there are software packages that include all three features.</p>
                    
                </div>
                <div class="col-4">
                      <h4 class="font-weight-bold text-left" style=" color: #FED502;">Qgis</h4>
                      <p class="font-italic text-left" style=" color: #FED502;"> It primarily works with a shapefile format, or files are stored in that format. Shapefile is a set of at least three files with SHP, SXH and DBF extensions, and is currently the most used vector format in GIS developed due to interoperability by ESRI. Shapefile consists of geometric shapes (dot, line, or polygon), and corresponding tables. This table contains attributes of geometric shapes.</p>

                      <p class="font-italic text-left" style=" color: #FED502;">Of course, Qgis allows you to view other vector formats. In addition, it also provides an overview of various raster formats.</p>

                      <p class="font-italic text-left" style=" color: #FED502;">All data is organized by layers and each file is either in vector or raster format as one layer. When adding layers, they are arranged one above the other, but it is possible to change their layout, as well as the display properties (depending on the type of layer, ie, whether it is a raster or a vector). It is possible to record the current state (layer layout and their properties) in a file called the project, and has an extension of .qgs. Of course, for each layer and project, an appropriate projection is defined.</p>

                      <p class="font-italic text-left" style=" color: #FED502;">Vector layers contain objects that are of the same type ie. points, or lines, or polygons, and corresponding attributes. These layers can be edited (add / modify / delete objects or operations that can be performed depending on the type of objects the layer contains, ie whether objects, lines, or polygons are objects).</p>
                      <p class="font-italic text-left" style=" color: #FED502;">The tools are divided into several groups:</p>
                      <ul class="font-italic text-left" style=" color: #FED502;">
                           <li>Navigation tools - such as zooming (+/-), shifting, and the like</li>
                           
                     </ul>  
                </div>
                <div class="col-4">
                <hr class="invisible">
                       <ul class="font-italic" style="font-size: 14px; color: #FED502;">
                         <li>Digitization tools - create new objects, delete them, change them. Each 
                               edit begins by selecting the command to start editing, and also ends with the end-of-edit command, when a new state is recorded.</li>
                         <li>Attribute Tools - Allows you to select objects, change attributes, 
                               identify objects, and so on.</li>
                         <li>Layer management tools - allow you to add new vector and raster layers, 
                               create new vector layers, connect to a spatial database, etc.</li>
                         <li>Software for raster processing.</li>
                             Rare processing software is expected to support work with various coordinate systems, work with various raster formats used in GIS (GeoTiff, Erdas Imagine format, ESRI Grid format), and digital image processing in general. It would be desirable to enable the processing of satellite images, working with a digital terrain model, etc. The most popular software packages used for this purpose are LPS (Leica Photogrammetry Suite), eCognition, ESRI ...</li>
                         <li>Software for working with vectors.
                             Vectors software is also expected to support work with different coordinate systems and work with different vector formats used in GIS (shapefile, mapinfo, dxf). Work with vectors should include the editing of different types of objects (points, lines, polygons) and the ability to connect to spatial databases. The most famous programs for working with vectors are:  Mapinfo, Qgis,ESRI, uDig, GlobalMapper ...</li>
                         <li>Spatial databases
                             MySQL, PostgreSQL, Oracle, MS SQL are the most commonly used database. Of course, they have spatial data support. The most famous such GIS software is PostGIS, which is developed as a spatial support for the object-relational database PostgreSQL.</li>
                     </ul>
                </div>
             </div> <!-- end row div-->
        </div> <!-- end container fluid div-->
 
</div><!--end container-fluid-->
<footer class="fixed-bottom bg-dark">
        <div class="container text-center">
        <h6><a class="text-white" href="#">Copyright by Uros Tatomir 2019</a></h6>
        </div>
        
</footer> <!--end footer div-->

</body>