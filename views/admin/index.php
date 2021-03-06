<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <title>eBusca</title>    <link rel="icon" type="image/png" href="img/favicon.png">

</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="#">
                <ion-icon name="library-outline"></ion-icon> eBusca
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-outline" style="font-size: 32px;"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="#">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link   text-lowercase  lead dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CARRERAS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../career/create.php">Agregar Carrera</a>
                            <a class="dropdown-item" href="../career/edit.php">Editar Carrera</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  text-lowercase lead dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INSTITUCIONES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../institution/create.php">Agregar Institucion</a>
                            <a class="dropdown-item" href="../institution/edit.php">Editar Institucion</a>
                        </div>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="edit.php">Editar datos</a>
                    </li>
                    <li>

                    <?php
                include('../../resources/funciones.php');
                if (verificarUsuario()) {
                    $user = $_SESSION['miUsuario'];
                    echo "
        <a class='nav-link lead' href='../../resources/salir.php'>cerrar sesión</a><br>";
                } else {
                    header("location:../index.php");
                }

                ?>
                </li>

                </ul>
            </div>
        </div>
    </nav>



    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../img/img (1).jpg" class="d-block w-100" alt="..." style="width:640px;height:420px">
                <div class="carousel-caption d-md-block">
                    <h5>¿Qué es eBusca?</h5>
                    <p>Es un sitio web que nos ayuda a buscar información referente las Instituciones Educativas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../../img/img (2).jpg" class="d-block w-100" alt="..." style="width:640px;height:420px">
                <div class="carousel-caption d-md-block">
                    <h5>Beneficios de usar eBusca:</h5>
                    <p>Contiene un filtros de búsqueda, una lista de carreras e instituciones que facilitan y ahorra tiempo a la hora de buscar  información.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../../img/img (3).jpg" class="d-block w-100" alt="..." style="width:640px;height:420px">
                <div class="carousel-caption d-md-block">
                    <h5>Forma parte de ésto: </h5>
                    <p>Forma parte de ésto y aprovecha de los beneficios que trae consigo, además de ayudar a mejorar el sitio web. </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- <div class="container">
        <hr>
        <section class="row">
            <div class="filtro col-xs-12 col-md-12 col-lg-12">
                <p class="lead filtro-title text-primary">
                    <ion-icon name="options-outline"></ion-icon> Filtros de busqueda:
                </p>
                <form class="">
                    <div class="form-group">
                        <label for="">Seleccione una carrera: </label>
                        <select class="form-control col-md-3 container-md">
                            <option>Carrera</option>
                            <option>Carrera 1</option>
                            <option>Carrera 2</option>
                            <option>Carrera 3</option>
                        </select>
                        <label for="">Seleccione una universidad: </label>
                        <select class="form-control col-md-3 container-md">
                            <option>Universidad</option>
                            <option>Universidad1</option>
                            <option>Universidad2</option>
                            <option>Universidad3</option>
                        </select>
                        <label for="">Seleccione una ciudad: </label>
                        <select class="form-control col-md-3 container-md">
                            <option>Ciudad</option>
                            <option>Ciudad1</option>
                            <option>Ciudad2</option>
                            <option>Ciudad3</option>
                        </select>

                        <button class="btn btn-primary" style="margin-top: 25px;"> Buscar</button>
                    </div>
                </form>
            </div>
        </section>
        <hr>
        <section class="main row">
            <div class="carrera col-xs-12 col-md-9 col-lg-9">
                <p>Esto es una carrera de ejemplo</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit
                    <hr>.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.Cupiditate adipisci labore eius a
                    reprehenderit accusantium molestiae officia eum! </p>
                <hr>
            </div>
            <div class="publicidad col-xs-12 col-md-3 col-lg-3">
                <p>Esto es una publicidad de ejemplo</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Cupiditate adipisci labore eius a reprehenderit accusantium molestiae officia eum! </p>
            </div>
        </section>
    </div> -->

    <footer class="page-footer font-small blue" style="margin-top: 15px; background-color:#0275d8;">
        <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
            <a href="#" class="text-white"> eBusca. Buscador de Instituciones Universitarias.</a>
        </div>
    </footer>

    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>