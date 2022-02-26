<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Parcial 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="recibe_clientes.php">
                    Clientes
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clientes_ajax.php">
                    Clientes AJAX
                </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">

        <div class="row">
            <div class="col-12 col-md-4 mb-5">
                <?php include "form_clientes2.php";?>
            </div>

            <div class="col-12 col-md-8">
                <?php include "recibe_clientes2.php";?>
            </div>

        </div>


    </div>

    <script>

        $("#enviarFormulario").click(function () {

            //validaciones
            if($("#codigo").val() == "" ||
            $("#nombres").val() == "" ||
            $("#apellidos").val() == "" ||
            $("#dui").val() == "" ||
            $("#direccion").val() == "" ||
            $("#telefono").val() == "" ||
            $("#email").val() == ""){
                alert("Debe llenar todos los campos del formulario.");
                return;
            }

            var url = "recibe_clientes2.php";
            $.ajax({
            type: "POST",
            url: url,
            data: $("#formularioCliente").serialize(),
            success: function(data)
            {
                alert("Cliente registrado con éxito.");
            }
            });
        });

    </script>

</body>
</html>