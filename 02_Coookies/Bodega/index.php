<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
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
        }
        h1 {
            text-align: center;
            color: #7b1e3a;
        }
        p {
            font-weight: bold;
            color: #333;
        }

        select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #bbb;
            border-radius: 6px;
        }

        button {
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 11px;
            font-size: 16px;
            background: #7b1e3a;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #5c152b;
        }
    </style>
</head>
<body>
    <div class="caja">
        <h1>Bodega</h1>
        <form method="post" action="bodega.php">
            <p>Ets major d'edat?<br>
                <input type="radio" name="majoredat" value="si" required> Sí
                <input type="radio" name="majoredat" value="no"> No
            </p>
            <p>Idioma:
                <select name="idioma" required>
                    <option value="">-- Selecciona --</option>
                    <option value="catala">Català</option>
                    <option value="espanyol">Español</option>
                    <option value="angles">English</option>
                </select>
            </p>
            <p>Moneda:
                <select name="moneda" required>
                    <option value="">-- Selecciona --</option>
                    <option value="euro">Euros (€)</option>
                    <option value="lliura">Lliures (£)</option>
                    <option value="dolar">Dòlars ($)</option>
                </select>
            </p>
            <button type="submit" name="enviar">Entrar</button>
        </form>
    </div>
</body>
</html>
