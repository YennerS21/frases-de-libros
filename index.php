<?php
$url=$_SERVER['REQUEST_URI'];
include_once('vistas/componentes/menu-principal.html');
include_once('centro-de-datos.php');

// echo $url;

if (!isset($_GET['page'])) {
    include('vistas/frases.html');
}else{
    $page = "vistas/".$_GET['page'].".php";
    include($page);
}


include_once('vistas/componentes/footer.html');

?>
