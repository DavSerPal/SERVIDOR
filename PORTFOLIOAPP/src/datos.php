<?php include_once("utiles.php") ?>
<?php
    $loggedIn = FALSE;

    $datos_contacto = "David Serrano Palazon";

    $categorias = [
        "etb" => "Elite Trainer Box",
        "sellado" => "Producto Sellado",
        "coleccionista" => "Coleccionista",
        "mazos" => "Mazos de Juego",
        "juego_rapido" => "Listo para Jugar",
        "sobres" => "Sobres de Expansión",
        "expansiones" => "Expansiones",
        "latas" => "Latas Metálicas",
        "cajas" => "Cajas Coleccionables",
        "promos" => "Cartas Promocionales",
        "booster_box" => "Cajas Booster",
        "competitivo" => "Competitivo",
        "premium" => "Edición Premium",
        "ultra" => "Ultra Premium",
        "mini" => "Mini Latas",
        "union" => "Cartas V-Union",
        "crown_zenith" => "Crown Zenith",
        "pokeball" => "Diseño Poké Ball",
        "vmx" => "VMAX Collection"
    ];

    // 1. Leer los ficheros JSON
    $json1 = file_get_contents("data/productos1.json");
    $json2 = file_get_contents("data/productos2.json");
    $json3 = file_get_contents("data/usuarios.json");
    
    // 2. Pasar a arrays asociativos
    $array1 = json_decode($json1, true);
    $array2 = json_decode($json2, true);
    $array3 = json_decode($json3, true);

    // 3. Fusionar en un único array
    $prod = array_merge($array1, $array2);

    $productos = cambia_fecha($prod);

    $usuarios = $array3;
?>