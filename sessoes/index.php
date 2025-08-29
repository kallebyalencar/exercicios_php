<?php
// sessões

session_start();

$_SESSION['cor'] = "preto";
$_SESSION['carro'] = "Hb20";

echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br>" . session_id();

?>