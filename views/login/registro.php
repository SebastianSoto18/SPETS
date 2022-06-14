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
        
    </script>
    
    </head>
    <body class="align-items-center">
      
    
        <div class="container w-25 bg-white mt-6 rounded shadow justify-content-center">
            <div class="row align-items-lg-center m-lg-1">
                  <div class="pd-2">
            <a href="https://mascotasssssssssssss.000webhostapp.com">
                <button type="submit" class="btn btn-primary">Regresar al inicio</button>
            </a> 
            
            </div>
                    <br>
                    <h3>Registro de usuarios:</h3>
                <img  src="../../public/img/logo.png" alt="">
                <h4>
                    <?php $this->showMessages();?>
                    </h4>
            
                <div class="col bg-white p-3 rounded-end">
                    <form action="registro/newUser" method="POST" enctype="multipart/form-data" id="form" class="formulario_a">
                        <div class="">
                            <label for="nombre" class="form-label">Ingresa nombre</label>
                            <input type="nombre" required id="Inombre" class="form-control" name="nombre" />
                  
                        </div>
                        <div class="mb-2">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" required id="Iedad" class="form-control" name="edad" />
                    
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Ingresa Correo electronico</label>
                            <input type="email" required id="Iemail" class="form-control" name="email" />
                         
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Digita tu Contraseña</label>
                            <input type="password"  id="Ipassword"  class="form-control" name="Ipassword" />
                         
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Confirma tu Contraseña</label>
                            <input type="password"  id="Ipassword2" class="form-control" name="Ipassword2" />
                            
                        </div>
                        <div class="alertChangePass" style="display: none;">

                    </div>
                        <div class="mb-3 ">
                            
                            <label for="formFile" class="form-label">Subir imagen</label>
                            <input type = "file" required name = "foto" id= "formFile" class="form-control"/>
                            
                        </div>
                        <div class="d-grid ">
                        <button type="input" id="entrar" class="btn btn-primary">Registrarse </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" ></script>
         <script type="text/javascript">
             $('.form-control').keyup(function(){
                console.log($(this).val());
                 vaalidpass();
                });
                
                
                function vaalidpass(){

                var passNuevo = $('#Ipassword').val();
                var confirmpassnew = $('#Ipassword2').val();
                    if (passNuevo != confirmpassnew){
                        $('.alertChangePass').html('<p>las contraseñas no son iguales ⚠️</p>');
                        $('.alertChangePass').slideDown();
                        $("#entrar").attr('disabled',true); 
                return false;
            }else{
                
                $('.alertChangePass').slideUp();
                 $("#entrar").attr('disabled',false); 
            }
            
            
        }
        
         </script>
            
    </body>

    </html>