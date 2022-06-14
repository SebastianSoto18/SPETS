<?php
    $user= $this->d['user'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/public/css/csslogin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Register SPTES</title>
</head>
<body class="align-items-center">
   
    <div class="container w-25 bg-white mt-6 rounded shadow justify-content-center">
        <div class="row align-items-lg-center m-lg-1 " >
            <img  src="../../public/img/logo-fococlipping-standard.png" alt="">
            
                     <h4>
                    <?php $this->showMessages();?>
                    </h4>
            <div class="col bg-white p-3 rounded-end ">
                <form action="<?php echo constant('URL');?>registromascota/newPet" method="POST" enctype="multipart/form-data" id="form" class="formulario_a">
                    <div class="">
                        <label for="nombre" class="form-label">Ingrese el nombre de su mascota</label>
                        <input type="nombre" required id="Inombre" class="form-control" name="nombre" />
                   
                    </div>
                    <div class="mb-2">
                        <label for="edad" class="form-label">Edad la edad de sus mascota</label>
                        <input type="number" required id="Iedad" class="form-control" name="edad" />
               
                    </div>
                    <div class="mb-2">
                        <label for="text" class="form-label">Ingrese la raza de su mascota</label>
                        <input type="text" required id="Iemail" class="form-control" name="raza" />
                   
                    </div>
                    <div class="mb-3 ">
                        
                            <label for="formFile" class="form-label">Subir imagen</label>
                            <input type = "file" required name = "foto" id= "formFile" class="form-control"/>
                          
                    </div>
                    
                    <input type="hidden" name="userid" value=<?php $user->getId()?>/>
                    <div class="d-grid ">
                     <button type="input" id="entrar" class="btn btn-primary">Registrar mascota </button>
                    </div>
                </form>
            </div>
            <br>
            <br>
           <div class="p-3">
           <a href="<?php echo constant('URL'); ?>home">
               <button type="submit" class="btn btn-primary">Regresar al inicio</button>
           </a> 
        </div>
       
        </div>
    </div>
</body>

</html>