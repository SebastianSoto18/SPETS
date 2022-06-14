<?php
    $users= $this->d['mascotas'];
    $user=$this->d['user'];
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
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>Panel Admin</title>
</head>
<body >
      <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 fixed-top" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" aria-current="page" href="/admin">
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
                        <a class="nav-link" aria-current="page" href="/adminmascotas">Mascotas</a>
                    
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
     
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
<h3>Listado de mascotas registradas </h3>
<br>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
               <th>ID</th>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>RAZA</th>

            </tr>
        </thead>
        <tbody>
                <?php
                    $i=0;
                    while($i<count($users)){
                        $aux=new PetsModel();
                        $aux=$users[$i];
                        $i=$i+1;
                        
                    
            ?>
            <tr>
                 <td><?php echo $aux->getIdMascota(); ?></a></td>
                <td><?php echo $aux->getNombreMascota(); ?></td>
                <td><?php echo $aux->getEdad(); ?></td>
                 <td><?php echo $aux->getRaza(); ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>RAZA</th>
            </tr>
        </tfoot>
    </table>
</main>
    <script src="../../public/js/adminmascotas.js"></script>
</body>


</html>