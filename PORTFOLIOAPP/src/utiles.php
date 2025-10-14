<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function ano_actual() {
    return date("Y");
}

function cambia_fecha($productos) {
    $resultado = [];
    foreach ($productos as $producto) {

            $producto['fecha'] = strtotime(str_replace("/","-", $producto['fecha']));
            $resultado[] = $producto;
            }; 
        
    return $resultado;
}

function orden_por_fecha($lista, $orden) {
    $fechas = array_column($lista, 'fecha');

    if ($orden == 2) {
        array_multisort($fechas, SORT_DESC, $lista);
    } else if ($orden == 3) {
        array_multisort($fechas, SORT_ASC, $lista);
    }
    return $lista;
}

function ver_productos($page,$prod_por_pag){
    $prod_fin=$page*$prod_por_pag;
    $prod_inicio=$prod_fin-$prod_por_pag;

    return [$prod_inicio, $prod_fin];
}

function comprobar_datos($valor){
    include("datos.php");
    foreach ($usuarios as $usuario) {
        if ($_POST["correo"] == $usuario["correo"] && $_POST["passwd"] == $usuario["passwd"] ){
            return true;
        }
    }
}

function comp_form(){
    $error_form="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["correo"]) || empty($_POST["passwd"])) {
            $error_form = "Por favor, introduzca los datos";
            return $error_form;
        } else 
            $login_correcto = comprobar_datos($_POST[$valor]);
    }
    if ($login_correcto){
        include("datos.php");
        $loggedIn = TRUE;
        # realizar el login real
        $_SESSION["correo"] = $_POST["correo"];
        $_SESSION["passwd"] = $_POST["passwd"];
        setcookie("user_email",$_SESSION["correo"]);
        header("Location: contacto_lista.php");
        exit;
    } else {
        return "ERROR: El correo o contraseña son incorrectos";
    }
}



$delete = isset($_GET['delete']) ? $_GET['delete']: false;
$page = isset($_GET['page']) ? (int)$_GET['page']: 1;
$order = isset($_GET['order']) ? (int)$_GET['order']: 0;
$prod_por_pag = isset($_GET['prod_pag']) ? (int)$_GET['prod_pag']: 4;
$fltro_categoria = isset($_GET['categoria']) ? $_GET['categoria']: "no-cat";
$id_producto = isset($_GET['id']) ? $_GET['id']: 0;

?>