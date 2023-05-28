<?php
include('../config/config.php');
include('Contact.php');

if (isset($_POST) && !empty($_POST)){
    $contact = new contact();

    if ($_FILES['Image']['name'] !== ''){
        $_POST['Image'] = $contact->saveImage($_FILES);
    }

    $save = $contact->save($_POST);
    if ($save){
        $error = '<div class="alert alert-success" role="alert">Contacto creado correctamente</div>'; 
    }else{
        $error = '<div class="alert alert-danger" role="alert">Error al crear el contacto</div>';
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Crear Contacto</title>
</head>
<body>
    <?php include('../menu.php') ?>
    <div class="container">
        <?php 
            if (isset($error)){
                echo $error;
            }
        ?>
        <h2 class="text-center mb-5">Creacion agenda</h2>
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="Nombres" id="Nombres" placeholder="Nombre Contacto" required class="form-control"/>
                </div>
                <div class="col">
                    <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellido Contacto" required class="form-control"/>
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="Email" id="Email" placeholder="Email Contacto" required class="form-control"/>
            </div>
            <div class="col">
                <input type="text" name="Celular" id="Celular" placeholder="Número celular contacto" required class="form-control"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="Pais" id="Pais" placeholder="País Contacto" required class="form-control"/>
            </div>
            <div class="col">
                <input type="text" name="Reunion" id="Reunion" placeholder="Duración de la reunión" required class="form-control"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="file" name="Image" id="Image" class="form-control"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <textarea name="Asunto" id="Asunto" placeholder="Asesoramiento, consulta, Quiero info, ..." required class="form-control"></textarea>   
                <b>Debes separar los diferentes tipos de consulta con una coma</b>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Registrar</button>
    </form>
</div>
</body>
</html>
