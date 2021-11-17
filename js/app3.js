$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getC5").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetClients3.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#displayc5").html(r);
            }
        });
    })
});
