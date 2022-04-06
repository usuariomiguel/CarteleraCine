<?php 

$valor = ".";

if (isset($_POST['aceptar_cookies'])) {
  $valor = "yes";
} 

setcookie('micookie', $valor);

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
  </head>
  <body class="d-flex flex-column h-100">
    
<?php include("include_menu.php")?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Sticky footer with fixed navbar</h1>
    <?php print_r ($_POST); ?><br>
    <?php echo $_COOKIE["micookie"]  ?>
    <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>
    <p>Back to <a href="../examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
  </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">  

      <?php if ($_COOKIE['micookie'] == "yes" ) { ?>

          <p><b>Has aceptado las cookies</b></p>

        </form>

        <?php } else { ?>

          <form method="post" index="src/index.php">
          <h5>DESEAS ACEPTAR LAS COOKIES?<h5>
          <input type="submit" name="aceptar_cookies" value="aceptar">

      <?php }?>


    </span>
  </div>
</footer>

    <script src="js/bootstrap.min.js"></script>
      
  </body>
</html>
