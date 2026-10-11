<?php
require_once "comptador_visites.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
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
        .visitas {
        color: #555;
        font-size: 18px;
        }
        .oferta {
            background: #2d6cdf;
            color: white;
            padding: 14px;
            border-radius: 8px;
            font-weight: bold;
        }
        .oferta.cincuenta {
            background: #d6336c;
        }
        .producto {
            font-size: 20px;
            margin: 20px 0;
        }
        input[type="text"] {
            padding: 9px;
            font-size: 16px;
            border: 1px solid #bbb;
            border-radius: 6px;
        }
        button {
            padding: 9px 20px;
            font-size: 16px;
            background: #2d6cdf;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #1f55b5;
        }
        .resultado {
            margin-top: 20px;
            font-weight: bold;
            color: #222;
        }
    </style>
</head>
<body>
    <div class="caja">
        <h1>Botiga</h1>
        <p class="visitas">Has accedit a aquesta pàgina <b><?php echo $visitas; ?></b> cops</p>
        <?php if ($mensajeDescuento != "") { ?>
            <p class="oferta <?php echo $visitas >= 10 ? 'cincuenta' : ''; ?>"><?php echo $mensajeDescuento; ?></p>
        <?php } ?>
        <p class="producto">Samarreta - <?php echo $precio; ?> €</p>
        <form method="post" action="index.php">
            <input type="text" name="codigo" placeholder="Codi de descompte" pattern="[Bb][Oo][Tt][Ii][Gg][Aa](20|50)|" maxlength="8" title="Escriu BOTIGA20 o BOTIGA50">
            <button type="submit" name="comprar">Comprar</button>
        </form>
        <?php if ($mensajeCompra != "") { ?>
            <p class="resultado"><?php echo $mensajeCompra; ?></p>
        <?php } ?>
    </div>
</body>
</html>