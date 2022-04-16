<?php 

include (".\include_mostrar_cookies.php");

include (".\include_acceso_datos.php");

$datos = $conexion_bd->query('SELECT * FROM peliculas');

?>
 

<!doctype html>

<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sticky Footer Navbar Template · Bootstrap v5.1</title>


    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href=".\css\style.css">
  </head>
  <body class="d-flex flex-column h-100">

<?php include ("./include_menu.php")?> 

<div id="tabla_listado">
        <h1>Listado de ciclistas</h1>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Duracion</th>
                    <th>Descripcion</th>
                    <th>Caratula</th>
                    <th>Trailer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $fila) { ?>
                    <tr>
                      <td><?=$fila['titulo']?></td>
                      <td><?=$fila['duracion']?></td>
                      <td><?=$fila['descripcion']?></td>
                      <td>
                        <a title="titulo" href="<?=$fila['caratula']?>">
                        <?=$fila['titulo']?></a>
                      </td>
                      <td><a href="<?=$fila['trailer']?>">Haz click para ver trailer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>

<?php 

include (".\include_procesar_cookies.php")

?>

    <script src="js/bootstrap.min.js"></script>
      
  </body>
</html>