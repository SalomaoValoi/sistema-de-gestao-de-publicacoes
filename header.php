<?php session_start() ?>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title><?php if(isset($_SESSION['title'])){ echo $_SESSION['title'];}?></title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">bLoGgEr OF mY ArTiClEs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header"
                aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="header">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                </ul>
                <div class="d-flex px-3">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user mx-1"></i><?php echo $_SESSION['usuario']['nome'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Alterar senha</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="server/terminar.php">Sair</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header mt-2 d-flex justify-content-center">
            <div class="">
                <button class="navbar-toggler bg-nav text-white " type="button" data-bs-toggle="collapse"
                    data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a href="home.php" class="btn btn-sm menu-link mx-1 menu-active">Tudo</a>
                        </li>
                        <?php include_once 'server/busca-categorias.php';
                                 foreach( $categorias as $cat){
                                ?>
                        <li class="nav-item">
                            <a href="lista-artigos.php?categoria=<?php echo $cat['id']?>"
                                class="btn btn-sm menu-link mx-1"><?php echo $cat['nome']?></a>
                        </li>
                        <?php }?>

                    </ul>

                </div>
            </div>
        </nav>

    </div>

    <div class="container">