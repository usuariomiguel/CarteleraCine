<?php

$mostrar_cookies = true;

if ($_GET['aceptado'] == 1 ) {

  setcookie ("acepta_politica","yes");
  $mostrar_cookies = false;

}
?>