<?php
$precio = 100;
$caduca = time() + 3600 * 24 * 30;
if (isset($_COOKIE['visitas'])) {
    $visitas = (int) $_COOKIE['visitas'] + 1;
} else {
    $visitas = 1;
}
setcookie("visitas", $visitas, $caduca, "/");
$yaCompro = isset($_COOKIE['compra']);
$mensajeCompra = "";
$mensajeDescuento = "";
if (isset($_POST['comprar'])) {
    $codigo = strtoupper(trim($_POST['codigo']));
    $total = $precio;
    if ($codigo == "BOTIGA20" && $visitas >= 5) {
        $total = $precio * 0.80;
        setcookie("compra", "si", $caduca, "/");
        $yaCompro = true;
    } elseif ($codigo == "BOTIGA50" && $visitas >= 10 && !$yaCompro) {
        $total = $precio * 0.50;
        setcookie("compra", "si", $caduca, "/");
        $yaCompro = true;
    } elseif ($codigo != "") {
        $mensajeCompra = "El codi no és vàlid.";
    }
    if ($mensajeCompra == "") {
        $mensajeCompra = "Compra realitzada! Total a pagar: $total €";
    }
}

if (!$yaCompro) {
    if ($visitas >= 10) {
        $mensajeDescuento = "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    } elseif ($visitas >= 5) {
        $mensajeDescuento = "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }
}