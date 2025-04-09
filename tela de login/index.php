<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <div class="container">
        <?php
        include_once("config.php"); // Inclua seu arquivo de configuração do banco de dados

        // Verifica se o cookie de login existe
        $login_cookie = isset($_COOKIE["login"]) ? $_COOKIE["login"] : null;

        if ($login_cookie) {
            // Valida o cookie contra o banco de dados
            $consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$login_cookie'");
            if ($consulta && mysqli_num_rows($consulta) > 0) {
                // Cookie é válido
                echo "<p class='mensagem-principal'>Bem-Vindo, " . htmlspecialchars($login_cookie) . "</p>";
                echo "<p class='mensagem-secundaria'>Essas informações <span class='texto-vermelho'>PODEM</span> ser acessadas por você.</p>";
            } else {
                // Cookie inválido ou usuário não encontrado
                echo "<p class='mensagem-principal'>Cookie inválido ou expirado.</p>";
                echo "<p class='link-login'><a href='login.php'>Faça Login</a> novamente.</p>";
            }
        } else {
            // Cookie não existe
            echo "<p class='mensagem-principal'>Bem-Vindo, convidado.</p>";
            echo "<p class='mensagem-secundaria'>Essas informações <span class='texto-vermelho'>NÃO PODEM</span> ser acessadas por você.</p>";
            echo "<p class='link-login'><a href='login.php'>Faça Login</a> para ler o conteúdo.</p>";
        }
        ?>
    </div>
</body>
</html>