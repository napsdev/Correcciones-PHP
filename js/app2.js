$(document).ready(function() {
    // Obtener el elemento seleccionado
    $("#getC2").change(function() {
        var id = $(this).find(":selected").val();

        var dataString = 'action=' + id;

        $.ajax({
            url: 'php/salidas/GetClients2.php',
            data: dataString,
            cache: false,
            success: function(r) {
                $("#displayc2").html(r);
            }
        });
    })
});