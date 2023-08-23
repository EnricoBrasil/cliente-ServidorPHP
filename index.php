<?php
include('controller/conexao.php');
if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "<h1>Preencha seu e-mail</h1>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<h1>Preencha sua senha</h1>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['nome'];

            header("Location: View/painel.php");
        } else {
            echo "<h1>Falha ao logar! E-mail ou senha incorretos</h1>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/css/style.css">
    <title>Login | Seja Bem-Vindo</title>
</head>

<body>
    <div class="screen">

        <div class="login-section">
            <div class="login-content">

                <div class="access">
                    <h1>Login</h1>
                    <p>Seja Bem Vindo</p>
                    <p>Faça o login para ter acesso à sua conta.</p>
                </div>

                <form action="" method="POST">
                    <p>
                        <label for="">Email:</label>
                        <input class="inputSign" type="text" name="email">
                    </p>
                    <p>
                        <label for="">Senha:</label>
                        <input class="inputSign" type="password" name="senha">
                    </p>
                    
                    <p>
                        <button id="signIn" type="submit">Entrar</button>
                    </p>
                </form>


</body>

</html>