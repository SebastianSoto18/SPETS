<?php
    $user= $this->d['user'];
    $user2= $this->d['numuser'];
    $mascotas= $this->d['nummascota'];
   
    error_log($user->getnombrePersona())
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <title>Panel Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 " id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin">
                <span class="text-primary fs-5 fw-bold">Home</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://mascotasssssssssssss.000webhostapp.com/adminuser">Personas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://mascotasssssssssssss.000webhostapp.com/adminmascotas">Mascotas</a>
                    
                    </li>
                    <br>
                    <li>
                        <ul>
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <img class="rounded-circle me-2" alt="..." width="32" height="32" src="data:image/jpg;base64,<?php echo base64_encode($user->getfoto());?>">
                                 
                                  <strong><?php echo $user->getNombrePersona(); ?></strong>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                  <li><a class="dropdown-item" href="#">Perfil</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="<?php echo constant('URL');?>admin/salir">Salir</a></li>
                                </ul>
                              </div>
                            </ul>
                    </li>
                    
                    </li>
                </ul>
            </div>
            
        </div>          
    </nav>
     
<main height="400" width="400">
    <canvas id="grafico1" width="200" height="200"></canvas>
</main>
</body>

<script>
    var ctx=document.getElementById("grafico1").getContext("2d");
    var myChar=new Chart(ctx,{
        type:"pie",
        data:{
            labels:[
                'Personas','Mascotas'
            ],
            datasets:[
                {
                    label:'Cantidad de personas y mascotas',
                    data:[<?php echo $user2 ?>,<?php echo $mascotas ?>],
                    backgroundColor:['rgb(255,70,70)','rgb(82,247,247)']
                }
            ]
        }
    });
</script>
</html>