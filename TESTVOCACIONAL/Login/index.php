
<?php
session_start();
if(isset($_SESSION['S_IDUSUARIO'])){
	header('Location: ../vista/index.php');
}

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Iniciar Session <strong>Test Vocacional Tupac Amaru II</strong></h3>
              <p class="mb-4"><b>Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</b></p>
            </div>
        
              <div class="form-group first">
                <label for="username"><b>Ingresar tu Usuario</b></label>
                <input type="text" class="form-control" id="txt_usu" autocomplete="new-password">

              </div>
              <div class="form-group last mb-4">
                <label for="password"><b>Ingresar tu Contraseña</b></label>
                <input type="password" class="form-control" id="txt_con">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Recuerdame</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Olvidastes la Contraseña</a></span> 
              </div>
              
              <button type="button" value="Ingresar" class="btn text-white btn-block btn-success" onclick="VerificarUsuario()">INGRESAR </button><br>
        
          
               <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
  
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

    <script src="sweetalert2/sweetalert2.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="../js/usuario.js"></script> <!--//llamar a los url para que direccione en login -->
  </body>
  <script>
  txt_usu.focus();
</script>
</html>