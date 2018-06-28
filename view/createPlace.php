<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PlayerPlace - Create Placer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="../public/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../public/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../public/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

      <?php 
      if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
      }
      ?>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Player</strong><strong>Place</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>P</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
          <div class="right-menu list-inline no-margin-bottom">    
  
            <!-- Languages dropdown    -->
            <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="../public/img/flags/US.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
              <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="../public/img/flags/ES.png" alt="English" class="mr-2"><span>Spanish</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="../public/img/flags/BR.png" alt="English" class="mr-2"><span>Portuguese  </span></a></div>
            </div>
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="login.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="../public/img/perfil.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Edward Ramos</h1>
            <p>CEO PlayerPlace</p>
          </div>
        </div>

        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                <li><a href="perfil.php"> <i class="icon-grid"></i>Perfil </a></li>
                <li><a href="searchPlayer.php"> <i class="fa fa-bar-chart"></i>Search Player </a></li>
                <li><a href="map.php"> <i class="icon-padnote"></i>Search Place </a></li>
                <li><a href="sendInvite.php"> <i class="icon-logout"></i>Send Invite </a></li>
        </ul><span class="heading">Future Works</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Havelist </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Wantlist </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>TradeCards </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Place</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              
              <!-- content-->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Create</strong></div>
                  <div class="block-body">
                    <form name="formCreatePlace" method="POST" action="salva_places.php">
                      <div class="form-group">
                        <label label="name" class="form-control-label">Name</label>
                        <input id="name" name="name" type="text" placeholder="Name's Place" class="form-control">
                      </div>
                        
                      <div class="form-group">
                        <label label="address" class="form-control-label">Address</label>
                        <input id="address" name="address" type="text" placeholder="Address' Place" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label label="lat" class="form-control-label">Latitude</label>
                        <input id="lat" name="lat" type="text" placeholder="Google Maps Latitude" class="form-control">
                      </div>
                        
                      <div class="form-group">
                        <label label="lng" class="form-control-label">Longitude</label>
                        <input id="lng" name="lng" type="text" placeholder="Google Maps Longitude" class="form-control">
                      </div>
                        
                      <div class="form-group">
                        <label label="type" class="form-control-label">Type</label>
                        <input id="type" name="type" type="text" placeholder="Ex: Shopping, Park ..." class="form-control">
                      </div>
                        
                      <div class="form-group">
                        <label label="hours" class="form-control-label">Hours</label>
                        <input id="hours" name="hours" type="text" placeholder="Weekday and Hour" class="form-control">
                      </div>
                        
                      <div class="form-group">       
                        <input type="submit" name="submitCreatePlace" value="Send" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            
              <!-- content-->

            </div>
          </div>
        </section>
        
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2018 &copy; PlayerPlace. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <script src="../public/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../public/vendor/chart.js/Chart.min.js"></script>
    <script src="../public/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../public/js/charts-home.js"></script>
    <script src="../public/js/front.js"></script>
  </body>
</html>