<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 92</title>
</head>
<body>
    <h1>Exercício 92</h1>
    <h2>Site da escola para aluno e professor</h2>
    <h3>Uma escola deseja implementar um site que terá acesso restrito a algumas páginas. Existem dois tipos de usuários: aluno e professor. Os dois usuários acessam o sistema através de um formulário único, que contém os campos de "login", "senha" e um botão de submissão. Desenvolva a página "verifica.php" que recebe os dadosdesse formulário e, conforme o tipo de usuário, redireciona-o para a página de acesso restrito correspondente. Veja os dadosadicionais:</h3>
    <p><strong>Login: </strong> aluno | <strong>Senha: </strong> Aluno | <strong>Página restrita: </strong> aluno.php</p>
    <hr>
    <p><strong>Login: </strong> professor | <strong>Senha: </strong> Professor | <strong>Página restrita: </strong> professor.php</p>
    <div>
        <form action="verifica.php" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="botao" value="enviar">
        </form>
    </div>
</body>
</html>