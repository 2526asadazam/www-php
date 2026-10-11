<?php
    $genere = $_POST['genere'] ?? '';
    switch ($genere) {
        case 'trap':
            echo 'Actitud';
            break;
        case 'pop':
            echo 'Ritme';
            break;
        case 'country':
            echo 'Tradició';
            break;
        case 'rock':
            echo 'Energia';
            break;
        case 'other':
            echo 'Originalitat';
            break;
        case 'jazz':
            echo 'Elegància';
            break;
        case 'reggeton':
            echo 'Festa';
            break;
        default:
            echo 'Res';
    }
    echo '<br><form action="index.php" method="post">
        <input type="submit" value="Tornar al formulari">
    </form>';
?>