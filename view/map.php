<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PlayerPlace - Search Place</title>
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

    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
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
                <li class="active"><a href="map.php"> <i class="icon-padnote"></i>Search Place </a></li>
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
            <h2 class="h5 no-margin-bottom">Search Player</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              
              <!-- content-->
              <div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Search</strong></div>
                  <div class="block-body">
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">State</label>
                        <select name="account" class="mr-sm-3 form-control">
                            <option>RS</option>
                            <option>SC</option>
                            <option>PR</option>
                            <option>SP</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">City</label>
                        <input id="inlineFormInputGroup" type="text" placeholder="Enter the City" class="mr-sm-3 form-control form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary"> 
                      </div>
                      <div class="form-group">
                          <a id="createPlace" href="createPlace.php" class="btn btn-success ">Create</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Places</strong></div>
                  <div  id="map" style="height:400px;">
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

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-29.9151667,-51.1671496),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('../resultado.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('markers');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var hours = markerElem.getAttribute('hours');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));
                
              var text2 = document.createElement('text');
              text2.textContent = hours
              infowincontent.appendChild(text2);
              infowincontent.appendChild(document.createElement('br'));
                
              var a = document.createElement('a');
              var linkText = document.createTextNode("Mais Infos");
              a.appendChild(linkText);
              a.title = "Clique Aqui";
              a.href = "perfilPlace.php?id="+id;
              infowincontent.appendChild(a);
                
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcOBlAQLtz0QwCjHcwIl507xxC75UUENk&callback=initMap">
    </script>
  </body>
</html>