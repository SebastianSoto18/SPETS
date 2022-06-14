

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../public/css/CSSVET.css">
    <title>Spets</title>
</head>

<body>
    <!-- ============ENCABEZADO============= -->
    <header class="container-fluid bg-dark d-flex justify-content-center">
        <p class="text-light mb-0 ps-2 fs-4 ">Bienvenido a Spets</p>
        
        

    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span class="text-primary fs-5 fw-bold">Menu</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo constant('URL');?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#masco">Mis Mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#equip">Equipo de Trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Medidas de precaucion</a>
                    </li>
                </ul>
                <form class="d-flex">
                   <a href="<?php echo constant('URL');?>login"><button class="btn btn-primary btn-primary-outline-success" type="button">Iniciar sesion</button></a> 
                </form>
            </div>
        </div>
    </nav>

    <!-- ============Slider de imagenes=========== -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="../../public/img/petos.png" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../../public/img/petos.png" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../../public/img/perro2.png" class="d-block w-100" alt="slide3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ==========INTRO===========  -->
    <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Meta Semanal: <br>
            <span class="text-primary">Recorre 10KM con tu mascota :D </span>
        </h1>
        <p class="p-3 fs-4">Progreso:</p>
        <div class="  progress ">
            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0"
                aria-valuemax="100">35%</div>
        </div>
    </section>

    <!-- SERVICIOS  -->
    <!-- =========MASCOTAS========  -->
    <section class="w-75 mx-auto text-center pt-5" id="masco">
        <h5 class="p-3 fs-2 border-top border-3"> Tus Mascotas</h5>
        <div class="row w-75 mx-auto " id="servicios-fila-1">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <a href="javascript:popUp('mascotas.html')"><img class="rounded float" src="../../public/img/jiji.png" alt="seo" width="180"
                    height="160"></a>
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Mascota1</h3>
                    <p class="px-4">descripcion de la mascota etc. relleno relleno</p>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <a href="javascript:popUp('mascotas.html')"><img class="rounded float" src="../../public/img/jiji.png" alt="seo" width="180"
                    height="160"></a>

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Mascota2</h3>
                    <p class="px-4">descripcion de la mascota etc. relleno relleno</p>
                </div>
            </div>
        </div>

        <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <a href="javascript:popUp('mascotas.html')"><img class="rounded float" src="../../public/img/jiji.png" alt="seo" width="180"
                    height="160"></a>

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Mascota3</h3>
                    <p class="px-4">descripcion de la mascota etc. relleno relleno</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <a href="javascript:popUp('mascotas.html')"><img class="rounded float" src="../../public/img/jiji.png" alt="seo" width="180"
                        height="160"></a>

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Mascota4</h3>
                    <p class="px-4">descripcion de la mascota etc. relleno relleno</p>
                </div>
            </div>
        </div>
    
        <a href="javascript:popUp('/vista/frontend/mascotas.html')"><button type="button" class="btn btn-primary">Ver mas</button></a>
    </section>

    <!-- =========EQUIPO DE TRABAJO=========  -->
    <section class="w-75 mx-auto text-center " id="equip">
        <h6 class="p-3 fs-2 border-top border-3"> Equipo de Trabajo</h6>
        <div class="row w-75 mx-auto centrado" id="servicios-fila-1">
            <div class="" style="width: 18rem;">
                <img src="/public/img/gg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="fs-5 mt-6 px-4 pb-1">Cristian Rodriguez</h6>

                    <a href="../../public/indexCris.html" target="_blank" class="btn btn-primary">Consultar Hoja de Vida</a>
                </div>
            </div>

            <div class="" style="width: 18rem;">
                <img src="../../public/img/gg2-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="fs-5 mt-4 px-4 pb-1">Sebastian Soto</h6>

                    <a href="../../public/hvseba.html" target="_blank" class="btn btn-primary">Consultar Hoja de Vida</a>
                </div>
            </div>

            <div class="" style="width: 18rem;">
                <img src="../../public/img/gg3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="fs-5 mt-4 px-4 pb-1">Andres Altamar</h6>

                    <a href="../../public/perfil.php" target="_blank" class="btn btn-primary">Consultar Hoja de Vida</a>
                </div>
            </div>

        </div>
    </section>


    <!-- ==========PIE DE PAGINA=========  -->
    <footer class="w-100 d-flex align-items justify-content-center flex-wrap">
        <p class="fs-5 px-4 pt-4">Spets. &copy; Todos los Derechos Reservados 2022</p>
        <div id="iconos">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="w-100 d-flex justify-content-start">
            <a href="picasyfijas.html" target="_blank"><i class="bi bi-suit-spade-fill"></i></a>
        </div>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

 

</body>

</html>