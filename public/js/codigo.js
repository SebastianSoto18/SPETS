$("#btn0").click(function(){
  Swal.fire({
    title: '¿Estás seguro que deseas eliminar tu cuenta?',
    text: "Perderás toda tu información",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, quiero eliminarla'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Cuenta eliminada',
        icon: 'success',
        confirmButtonColor: '#3085d6'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "https://mascotasssssssssssss.000webhostapp.com/perfil/eliminar";
        }
      })
    }
  });
});


