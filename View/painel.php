<?php

include('../controller/protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Painel</title>
</head>
<body>
    <h1>Bem Vindo ao Painel</h1>
    <?php echo $_SESSION['name']; ?>

    <p>

        <a href="../controller/logout.php">Sair</a>
    </p>
</body>
</html>