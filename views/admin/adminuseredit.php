<?php
    $user= $this->d['user2'];
    $numerom=$this->d['numeroM'];
    $user2=$this->d['user'];
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
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="../../controlador/bootstrap4/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../controlador/plugins/sweetAlert2/sweetalert2.min.css"> -->
    <link rel="stylesheet" href="../../controlador/plugins/animate.css/animate.css">
    <link rel="shortcut" href="#"/>
    <title>Spets Mascota</title>
</head>

<body>
    <div class="container w-50 bg-white mt-5 rounded shadow justify-content-center">
         <div class="p-3">
           <a href="<?php echo constant('URL'); ?>adminuser">
               <button type="submit" class="btn btn-primary">Regresar al inicio</button>
           </a> 
        </div>
             <h3>Perfil de <?php echo $user->getNombrePersona();  ?></h3>
        <div class=" p-3 row justify-content-center">
            <div class="p-3 card" style="width: 18rem;">  
                <img class="card-img-top" alt="..." width="100px" height="100px" src="data:image/jpg;base64,<?php echo base64_encode($user->getfoto());?>">                
                <div class="card-body">
                <strong>
                <?php 
                        echo ucfirst($user->getNombrePersona()); 
                ?>                        
                </strong>
                    <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">mascotas registradas:<span class="text-primary"><?php echo $numerom?></span>
                    </li>
                    <li class="list-group-item">Edad:<?php echo $user->getedad();?></li>
                    <li class="list-group-item">correo: 
                        <?php 
                            echo $user->getcorreo();
                               
                        ?>
                    </li>
                   <!--<li class="list-group-item"></li>--> 
                </ul>
            </div>
        </div>
         <h4>
                    <?php $this->showMessages();?>
                    </h4>
        <div class="row" id="iniciars">
            <p class="text-center">
               
                <a class="  btn btn-primary" data-bs-toggle="collapse" href="#collapseExamp" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Editar 
                </a>
                <button type="submit" id="btn0" class="btn btn-primary">Eliminar cuenta</button>
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
                    
                    <form action="<?php echo constant('URL'); ?>adminuseredit/edit" method="POST" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="full_name_id" class="control-label">Editar Nombre</label>
                            <input type="nombre" class="form-control" id="full_name_id" name="full_name">
                        </div>    
                    
                         <div class="form-group"> 
                            <label for="edad_id" class="control-label">Editar Edad</label>
                            <input type="number" class="form-control" id="edad_id" name="edad"  >
                        </div>   
                        <div class="form-group">
                            <label for="full_mail_id" class="control-label">Cambiar correo</label>
                            <input type="email" class="form-control" id="full_mail_id" name="full_mail">
                        </div>                                     
                        <div class="form-group">
                            <label for="password" class="form-label">Escribe la nueva contraseña</label>
                            <input type="password" id="Ipassword" class="form-control" name="newContra" >
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Editar foto</label>
                            <input type="file" id="foto" class="form-control" name="foto"> 
                        </div>
                        <input type="hidden" name="id" id="id" value=<?php echo $user->getId() ?>>
                        </br>   
                        <div class="form-group">
                        </div>   
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
<script src="../../config/jquery/jquery-3.3.1.min.js"></script>
<script src="../../config/popper/popper.min.js"></script>
<script src="../../config/bootstrap4/js/bootstrap.min.js"></script>

<!--Plugin sweet Alert -->
<!--<script src="../../controlador/plugins/sweetAlert2/sweetalert2.all.min.js"></script>-->
<script src="../../public/js/codigo2.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

