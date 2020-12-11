<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/peticion.js"></script>
    <title>eBusca</title>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="js/typeahead.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="index.php">
                <img src="img/logo.png" alt="logo-eBusca">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-outline" style="font-size: 32px;"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="views/information/listCareer.php">carreras</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="views/information/listInstitution.php">universidades</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="views/home/login.php">INICIAR sesión</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="views/home/register.php">CREAR CUENTA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#" data-slide-to="0" class="active"></li>
            <li data-target="#" data-slide-to="1"></li>
            <li data-target="#" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img (1).jpg" class="d-block w-100" alt="..." style="width:640px;height:420px">
                <div class="carousel-caption d-md-block">
                    <h5>¿Qué es eBusca?</h5>
                    <p>Es un sitio web que nos ayuda a buscar información referente las Instituciones Educativas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img (5)2.jpg" class="d-block w-100" alt="..." style="width:640px;height:420px">
                <div class="carousel-caption d-md-block">
                    <h5>Beneficios de usar eBusca:</h5>
                    <p>Contiene un filtros de búsqueda, una lista de carreras e instituciones que facilitan y ahorra tiempo a la hora de buscar información.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img (3).jpg" class="d-block w-100" alt="..." style="width:640px;height:420px">
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

    <div class="container">
        <hr>
        <section class="row">
            <div class="filtro col-xs-12 col-md-12 col-lg-12">
                <p class="lead filtro-title" style="color:#0275d8; font-size:155%;">
                    <ion-icon name="options-outline"></ion-icon> Filtro de búsqueda:
                </p>
                <section>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span span class="input-group-text" id="inputGroup-sizing-lg">
                                <ion-icon name="search-outline"></ion-icon>
                                </ion-icon>
                            </span>
                        </div>
                        <input type="text" class="form-control typeahead form-control-lg" name="busqueda" id="busqueda" placeholder="Buscar Carrera" aria-describedby="basic-addon1">
                    </div>
                </section>
                <section id="tabla_resultado">
                    <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                </section>
                <br><br>
            </div>
    </div>
    <hr>
    </div>
    <footer class="page-footer font-small blue" style="margin-top: 15px;">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
    </footer>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        $('#busqueda').typeahead({
            source: function(query, result) {
                $.ajax({
                    url: "resources/autocomplete.php",
                    data: 'query=' + query,
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        result($.map(data, function(item) {
                            return item;
                        }));
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript" src="typeahead.js"></script>

</html>