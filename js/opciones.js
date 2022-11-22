$("#btnPunto1").click(function(e) {
    $('#modalPunto1').modal('show');
});
$("#btnPunto2").click(function(e) {
    $('#modalPunto2').modal('show');
});
$("#btnPunto3").click(function(e) {
    $('#modalPunto3').modal('show');
});
$("#btnPunto4").click(function(e) {
    $('#modalPunto4').modal('show');
});

$("#formCalcularPunto1").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
        url: "/prueba_domina/index.php",
        type: 'POST',
        data: $("#formCalcularPunto1").serialize(),
        success: function(response) {
            $("#totalPunto1").text(response);

        }
    });
});

$("#formCalcularPunto2").on("submit", function(e) {

    e.preventDefault();

    $.ajax({
        url: "/prueba_domina/index.php",
        type: 'POST',
        data: $("#formCalcularPunto2").serialize(),
        success: function(response) {
            $("#totalPunto2").text(response);

        }
    });
});

$("#formCalcularPunto3").on("submit", function(e) {

    e.preventDefault();

    $.ajax({
        url: "/prueba_domina/index.php",
        type: 'POST',
        data: $("#formCalcularPunto3").serialize(),
        success: function(response) {
            $("#totalPunto3").text(response);

        }
    });
});

$("#formCalcularPunto4").on("submit", function(e) {

    e.preventDefault();

    $.ajax({
        url: "/prueba_domina/index.php",
        type: 'POST',
        data: $("#formCalcularPunto4").serialize(),
        success: function(response) {
            $("#totalPunto4").html(response);

        }
    });
});