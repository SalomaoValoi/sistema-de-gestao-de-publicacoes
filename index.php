<html lang="en">
<?php session_start() ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Login</title>
</head>

<body class="login-bg">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center w-center h-center">
            <div class="login-form bg-white">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <form action="server/login.php" method="POST" class="px-3">


                            <div class="form-row">
                                <h3 class="login-title text-center p-3 text-borded">
                                    Login
                                </h3>
                            </div>

                           
                                <?php if(isset($_SESSION['error'])){ ?>
                                    <div class="alert alert-danger my-3">
                                    <i class="fas fa-info-circle mx-2"></i><?php echo $_SESSION['error'] ?>
                                </div>
                                <?php unset($_SESSION['error']); }?>
                         
                            <div class="form-group">
                                <div class="input-group mb-4 login_input ">
                                    <span class="input-group-text icon"><i class="fas fa-user"></i></span>
                                    <input name="username" type="text" class="form-control form-control-login"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3 login_input">
                                    <span class="input-group-text icon"><i class="fa-solid fa-lock"></i></span>
                                    <input name="senha" type="password" class="form-control form-control-login"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group mt-5 mb-4">
                                <button class="btn btn-success form-control">Entrar</button>
                            </div>



                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12 login-img">

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>


    </script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>