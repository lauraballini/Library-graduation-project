<?php

session_start();
session_destroy();
echo"Sessione eliminata";
header('Location: biblioteca.php');

?>