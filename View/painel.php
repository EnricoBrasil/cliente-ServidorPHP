<?php

include('../controller/protect.php');
?>
<?php echo $_SESSION['name']; ?>

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
    <img src="img/enrico.jpeg">
    <img src="img/fabio.jpeg">
    <img src="img/everson.jpeg"><br><br><br><br>

    <p>
        <a href="../controller/logout.php">Sair</a>
    </p>
</body>
</html>