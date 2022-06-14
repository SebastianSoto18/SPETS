

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/css/csslogin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Loggin SPTES</title>
</head>

<body class="align-items-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container w-75 bg-white mt-5 rounded shadow justify-content-center">
        <div class="row align-items-lg-center m-lg-1" >
            <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded p-0">
                <div id="corruselhome" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#corruselhome" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#corruselhome" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#corruselhome" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#corruselhome" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#corruselhome" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#corruselhome" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="../../public/img/pexels-alena-darmel-9040613.jpg" class="img-fluid text-center" width="600px"
                                height="600px" />
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../public/img/pexels-arina-krasnikova-7725633.jpg" class="img-fluid" width="600px"
                                height="600px" />
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../public/img/pexels-kampus-production-8734460.jpg" class="img-fluid" width="600px"
                                height="600px" />
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../public/img/pexels-kateryna-babaieva-7516509.jpg" class="img-fluid" width="600px"
                                height="600px" />
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../public/img/pexels-molochkomolochko-10293290.jpg" class="img-fluid" width="600px"
                                height="600px" />
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../public/img/pexels-yaroslav-shuraev-8498536.jpg" class="img-fluid" width="600px"
                                height="600px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col bg-white p-6 rounded-end">
                <h2 class="fw-bold text-center py-10">Bienvenido a <span class="text-primary">Spets :D</span></h2>
                    <h4>
                    <?php $this->showMessages();?>
                    </h4>
                <form action="<?php echo constant('URL'); ?>login/aut" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" id="Iemail" class="form-control" name="correo" />
                    </div>
                    <div class="mb-4" >
                        <label for="password" class="form-label">Contraseña</label>
                        <input  type="password" id="Ipassword" class="form-control" name="contra" />
                    </div>
                    <div  class="d-grid">
                       <button type="submit" id="entrar"  class="btn btn-primary">
                            Iniciar Sesión
                        </button>
                        
                        <div class="row text-center">
                            <p class="text-center">o inicia sesion con:</p>
                            <div class="col-6 align-items-center d-grid">
                                <button class="btn btn-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                      </svg>
                                    Facebook
                                </button>
                            </div>
                            <div class="col-6 align-items-center d-grid">
                                <button class="btn btn-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                      </svg>
                                    google
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <span>¿Aun no tienes una cuenta?
                            <a href="<?php echo constant('URL'); ?>registro">¡Registrate ahora, es gratis!</a>
                        </span>
                        <br />
                        <span >
                            <a href="#">Recuperar contraseña</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>


</html>