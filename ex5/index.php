<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Preu amb IVA</title>
</head>
<body>
    <h1>Calculadora d'IVA</h1>
    <form action="logic.php" method="POST">
        Preu (sense IVA): <input type="number" name="preu" min="0" step="0.01" required>
        <select name="iva">
            <option value="21">General 21%</option>
            <option value="10">Reduït 10%</option>
            <option value="4">Superreduït 4%</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>