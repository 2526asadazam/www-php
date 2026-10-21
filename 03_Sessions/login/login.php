<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $password = $_POST['pass'] ?? '';
    if (!empty(trim($user)) && $user === $password) {
        $_SESSION['user_logged'] = $user;
    } else {
        unset($_SESSION['user_logged']);
        header('Location: index.html');
        exit();
    }
}
if (!isset($_SESSION['user_logged'])) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Àrea Privada</title>
</head>
<body>
    <header>
        <p>Usuari connectat: <strong><?= htmlspecialchars($_SESSION['user_logged']) ?></strong></p>
    </header>
    
    <hr>

    <h1>Pàgina d'Informació Protegida</h1>
    <p>Has accedit correctament a la zona d'informació del lloc web.</p>

    <br>
    
    <form action="index.html">
        <button type="submit">Tornar al login</button>
    </form>
</body>
</html>