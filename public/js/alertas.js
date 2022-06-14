
function AlertDatosEditados(){
  Swal.fire({
    title: 'Se han realizado los cambios',
    icon: 'success',
    confirmButtonColor: '#3085d6'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "https://mascotasssssssssssss.000webhostapp.com/registro";
    }
  })
}

function AlertRegistroExitoso(){
  Swal.fire({
    title: 'registro completado con exito',
    icon: 'succes',
    confirmButtonColor: '#3085d6'
  }).then((result) => {
    if (result.isConfirmed) {
      return;
    }
  })
}


function AlertRegistroFailed(){
  Swal.fire({
    title: 'Error al intentar regirtrarse, por favor, intente nuevamente',
    icon: 'error',
    confirmButtonColor: '#3085d6'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "https://mascotasssssssssssss.000webhostapp.com/registro";
    }
  })
}

function AlertErrorRegistro(){
  Swal.fire({
    title: 'Intentalo de nuevo, usuario no almacenado',
    icon: 'error',
    confirmButtonColor: '#3085d6'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "registro.php";
    }
  })
}

function AlertErrorLogin(){
  Swal.fire({
    title: 'Usuario no existe o sus datos son erroneos',
    icon: 'error',
    confirmButtonColor: '#3085d6'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "login.html";
    }
  })
}
