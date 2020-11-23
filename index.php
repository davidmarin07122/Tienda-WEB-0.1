<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="img/logo.png">

    <title>Registrar Producto</title>
    <link rel="stylesheet" href="estilos.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">




</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " style="background-color: rgba(64, 145, 236, 0.9)">
        <a class="navbar-brand" href="#">Art Design</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="listadoproductos.php" target="_blank">BODEGA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="formulario.php">HOME<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="content">

        <h1 class="logo"><span>ART DESING  </span>   Gaming </h1>

        <div class="contact-wrapper animated bounceInUp">

            <div class="contact-info">
              <img src="img/logo.png" style="height: 200px" style=" width: 200px">
            </div>

            <div class="contact-form">
                <h3>Registrar Producto</h3>
                <form action="registrarproducto.php"  method="POST" class="form_contact">
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="nombreproducto">
                    </p>
                    <p>
                        <label>Marca</label>
                        <input type="text" name="marcaproducto">
                    </p>
                    <p>
                        <label>Precio</label>
                        <input type="number" name="precio">
                    </p>
                    <p>
                        <label>Imagen (URL)</label>
                        <input type="text" name="imagen">
                    </p>
                    <p class="block">
                       <label>Descripcion</label> 
                        <textarea name="descripcion" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button type="submit" value="Registrar" name="botonEnvio" id="btnSend">
                            Registrar
                        </button>
                    </p>
                </form>
            </div>
            
        </div>

    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>