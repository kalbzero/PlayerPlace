<?php
session_start();
include_once('../conexao.php');

$token = $_GET["token"];
$token = str_replace("'","", $token);
$email = $_GET["email"];
$email = str_replace("'","", $email);

//Consultar o convite no BD
$result_invite = "SELECT COUNT(*) FROM sendinvites WHERE emailPlayer='$email' AND token='$token'";
$resultado_invite = mysqli_query($conn, $result_invite);

//Retorna o numero de linhas da pesquisa acima
$row = $resultado_invite->fetch_row();

//Verificar se o convite existe no BD
if($row[0] > 0){
    //Se exite, fica nessa pagina de cadastro
}else{
    $_SESSION['msg'] = "O email '$email' ja esta cadastrado!";
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PlayerPlace - Player</title>
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
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap-datepicker.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate" method="POST" action="../createRegister.php">
                  	<!-- Fullname -->
                    <strong class="d-block">Register</strong><br>
                    <div class="form-group-material">
                      <input id="fullname" type="text" name="fullname" required data-msg="Please enter your fullname" class="input-material">
                      <label for="fullname" class="label-material">Fullname</label>
                    </div>
                    <!-- Gender -->
                    <div class="form-group terms-conditions">
                      <label for="gender" class="label-material">Gender <br></label>
                      <div>
                        <input id="optionsRadios1" type="radio" checked="" value="M" name="optionsRadios">
                        <label for="optionsRadios1">Male</label>
                      </div>
                      <div>
                        <input id="optionsRadios2" type="radio" value="F" name="optionsRadios">
                        <label for="optionsRadios2">Female</label>
                      </div>
                    </div>
                    <!-- BirthDay -->
                    <div class="form-group-material">
                    	<label for="birthday" class="label-material">Birthday</label>
                    	<div class="input-group date" data-provide="datepicker">
						    <input type="text" name="birthDay" class="form-control">
						    <div class="input-group-addon">
						        <span class="glyphicon glyphicon-th"></span>
						    </div>
						</div>
                    </div>
                    
                    <!-- Email -->
                    <div class="form-group-material">
                      <input id="email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="email" class="label-material">Email Address</label>
                    </div>
                    <!-- Password -->
                    <div class="form-group-material">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password</label>
                    </div>
                    <!-- Address -->
                    <label for="address" class="label-material">Address</label>
                    <div class="form-group-material">
	                	<input id="street" type="text" name="street" required data-msg="Please enter your street" class="input-material">
	                	<label for="street" class="label-material">Street</label>
	                </div>
	                <div class="form-group-material">
	                	<input id="number" type="text" name="number" required data-msg="Please enter your number" class="input-material">
	                	<label for="number" class="label-material">Number</label>
                    	
                    </div>
                    <div class="form-group-material">
	                	<input id="neighborhood" type="text" name="neighborhood" required data-msg="Please enter your neighborhood" class="input-material">
	                	<label for="neighborhood" class="label-material">Neighborhood</label>
                    	
                    </div>
                    <div class="form-group-material">
	                	<input id="city" type="text" name="city" required data-msg="Please enter your City" class="input-material">
	                	<label for="city" class="label-material">City</label>
                    	
                    </div>
                    <div class="form-group-material">
	                	<input id="state" type="text" name="state" required data-msg="Please enter your State" class="input-material">
	                	<label for="state" class="label-material">State</label>
                    	
                    </div>
                    <div class="form-group-material">
	                	<input id="region" type="text" name="region" required data-msg="Please enter your region" class="input-material">
	                	<label for="region" class="label-material">Region</label>
                    	
                    </div>
                    <div class="form-group-material">
	                	<input id="country" type="text" name="country" required data-msg="Please enter your country" class="input-material">
	                	<label for="country" class="label-material">Country</label>
                    	
                    </div>
                    <div class="form-group-material">
	                	<input id="zip" type="text" name="zip" required data-msg="Please enter your zip" class="input-material">
	                	<label for="zip" class="label-material">Zip</label>
                    	
                    </div>


                    <!-- Terms and policy -->
                    <div class="form-group terms-conditions text-center">
                      <input id="agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="agree">I agree with the terms and policy</label>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>PlayerPlace 2018 | Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <!-- JavaScript files-->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <script src="../public/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../public/vendor/chart.js/Chart.min.js"></script>
    <script src="../public/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../public/js/charts-home.js"></script>
    <script src="../public/js/front.js"></script>
    <script src="../public/vendor/locale/bootstrap-datepicker.pt-BR.min.js"></script> 
    <script src="../public/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
    	$('.datepicker').datepicker({
		    format: 'mm/dd/yyyy',
		    
		});
    </script>
  </body>
</html>