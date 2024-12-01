<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diego</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            
                            <!-- imagen -->
                            <div class="col-lg-6 d-none d-lg-block " style="padding: 0;">
                                <img src="img/foto1.jpg" alt="imagen de login" 
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
                            </div>
                            
                            <!-- formulario -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Control de inventario</h1>
                                    </div>
                                    <form class="user" action="login.php" method="POST">
                                        
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingrese correo electrónico">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="contraseña" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Ingrese su contraseña">
                                        </div>

                                       <!--
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                          -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Acceder</button>
                                        </form>

                                        <!-- credenciales autenticaciòn de Google OAuth2.0 -->
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                        <!-- END OAuth  2.0 -->
                                   

                                    <?php if (isset($_GET['error'])): ?>
                                    <p style="color: red;">Usuario o contraseña incorrectos</p>
                                     <?php endif; ?>

                                <script>
                                // Ocultar  3 segundos
                                setTimeout(() => {
                                    const errorMessage = document.getElementById('error-message');
                                    if (errorMessage) {
                                        errorMessage.style.display = 'none';
                                    }
                                }, 3000); 

                                // Eliminar  página
                                if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.pathname);
                                }
                            </script>


                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Olvide mi contraseña?</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>