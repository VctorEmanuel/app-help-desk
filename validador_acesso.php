<?php

  session_start(); //É sempre bom colocar essa instrução antes de qualquer coisa

  if(!isset($_SESSION['autenticado'])) {
    header('Location: index.php?login=erro2');
  }

?>