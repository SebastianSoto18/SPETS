$(document).ready(function () {
    var table = $('#example').DataTable();

     $('#example tbody').on('click', 'tr', function () {
        var data = table.row(this).data();
          window.location.href = "https://mascotasssssssssssss.000webhostapp.com/adminuseredit?id="+data[0];
    });
});