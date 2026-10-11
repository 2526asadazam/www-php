<?php
if (isset($_POST['enviar'])) {
    setcookie("majoredat", $_POST['majoredat'], time() + 3600 * 24 * 30);
    setcookie("idioma", $_POST['idioma'], time() + 3600 * 24 * 30);
    setcookie("moneda", $_POST['moneda'], time() + 3600 * 24 * 30);
    header("Location: bodega.php");
    exit;
}
if (!isset($_COOKIE['majoredat']) || !isset($_COOKIE['idioma']) || !isset($_COOKIE['moneda'])) {
    header("Location: index.php");
    exit;
}
$majoredat = $_COOKIE['majoredat'];
$idioma = $_COOKIE['idioma'];
$moneda = $_COOKIE['moneda'];
if ($moneda == "euro") {
    $simbolo = "€";
    $precioVi = 39;
    $precioCava = 25;
} elseif ($moneda == "lliura") {
    $simbolo = "£";
    $precioVi = 33;
    $precioCava = 21;
} else {
    $simbolo = "$";
    $precioVi = 42;
    $precioCava = 27;
}

if ($idioma == "catala") {
    $titulo = "Informació";
    $menor = "No et podem vendre alcohol si ets menor d'edat.";
    $oferta = "T'oferim el vi \"Les Terrasses\" a un preu de";
    $producto2 = "Cava \"Brut Nature\" a un preu de";
    $volver = "Tornar";
} elseif ($idioma == "espanyol") {
    $titulo = "Información";
    $menor = "No podemos venderte alcohol si eres menor de edad.";
    $oferta = "Te ofrecemos el vino \"Les Terrasses\" a un precio de";
    $producto2 = "Cava \"Brut Nature\" a un precio de";
    $volver = "Volver";
} else {
    $titulo = "Information";
    $menor = "We cannot sell you alcohol if you are under age.";
    $oferta = "We offer you the wine \"Les Terrasses\" at a price of";
    $producto2 = "Cava \"Brut Nature\" at a price of";
    $volver = "Back";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f5f9;
            margin: 0;
            padding: 30px 15px;
        }

        .caja {
            max-width: 480px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
            text-align: center;
        }

        h1 {
            color: #7b1e3a;
        }

        .producto {
            background: #f8e9ee;
            padding: 14px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
        }

        .aviso {
            background: #d6336c;
            color: white;
            padding: 14px;
            border-radius: 8px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #7b1e3a;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="caja">
        <h1><?php echo $titulo; ?></h1>

        <?php if ($majoredat == "no") { ?>
            <p class="aviso"><?php echo $menor; ?></p>
        <?php } else { ?>
            <p class="producto"><?php echo "$oferta $precioVi $simbolo"; ?></p>
            <p class="producto"><?php echo "$producto2 $precioCava $simbolo"; ?></p>
        <?php } ?>

        <a href="index.php"><?php echo $volver; ?></a>
    </div>
</body>
</html>
