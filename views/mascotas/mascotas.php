<?php

$user=$this->d['user'];
$mascota=$this->d['mascota'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="/public/css/loginm.css">
    <title>Spets Mascota</title>
</head>

<body>
    <div class="container w-100 bg-white mt-5 rounded shadow justify-content-center">
        <div class=" p-3 row justify-content-center">
             <div class="p-3">
           <a href="<?php echo constant('URL'); ?>home">
               <button type="submit" class="btn btn-primary">Regresar al inicio</button>
           </a> 
        </div>
        
        <h3>Perfil de tu Mascota:</h3>
            <div class="p-3 card" style="width: 18rem;">
                <img src="data:image/jpg;base64,<?php echo base64_encode($mascota->getFoto());?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $mascota->getNombreMascota(); ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Raza:<span class="text-primary"><?php echo $mascota->getRaza(); ?></span>
                    </li>
                    <li class="list-group-item">Edad:<span class="text-primary"><?php echo $mascota->getEdad(); ?></span></li>
                   <!--<li class="list-group-item"></li>--> 
                </ul>
            </div>
        </div>
        <div class="row" id="iniciars">
            <p class="text-center">

                <a class="  btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Detalles
                </a>
                <a class="  btn btn-primary" data-bs-toggle="collapse" href="#collapseExampl" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Salud
                </a>
                <a class="  btn btn-primary" data-bs-toggle="collapse" href="#collapseExamp" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Editar 
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    aca se a a colocar informacion mas detallada 
                </div>
            </div>
            <div class="collapse" id="collapseExampl">
                <div class="card card-body">
                    INFORMACION DE SALUD ETC
                </div>
            </div>
            <div class="collapse" id="collapseExamp">
                <div class="card card-body">
                    <form action="<?php echo constant('URL'); ?>mascota/update" method="POST">

                        <div class="form-group">
                            <label for="full_name_id" class="control-label">Editar Nombre</label>
                            <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="">
                        </div>    
                    
                         <div class="form-group"> 
                            <label for="edad_id" class="control-label">Edad</label>
                            <input type="text" class="form-control" id="edad_id" name="edad" placeholder="">
                        </div>                                    
                                                
                        <div class="form-group"> <!-- Seleccion de raza -->
                             <label for="edad_id" class="control-label">Raza</label>
                            <input type="text" class="form-control" id="edad_id" name="Raza" placeholder="">          
                           
                        </div>       
                        
                         <input type="hidden" name="id" value="<?php echo $mascota->getIdMascota() ?>">
                      
                        <div class="form-group "> 
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>     
                        
                    </form>
                </div>
            </div>
        </div>

        <br>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</html>