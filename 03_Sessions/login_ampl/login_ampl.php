<?php
session_start();
if (isset($_GET['logout'])) {
    unset($_SESSION['user_logged']);
    session_destroy();
    header('Location: index.html');
    exit();
}
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
    <title>Panell d'Usuari</title>
</head>
<body>

    <header style="background-color: #f4f4f4; padding: 10px; margin-bottom: 20px;">
        <span>Usuari: <strong><?= htmlspecialchars($_SESSION['user_logged']) ?></strong></span>
        &nbsp;|&nbsp;
        <a href="login_ampl.php?logout=1">Tancar sessió</a>
    </header>

    <main>
        <h1>Benvingut al Panell de Continguts</h1>
        <p>Aquesta és la zona privada del lloc web accessible després de la validació.</p>
    </main>

</body>
</html>