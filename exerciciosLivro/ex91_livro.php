<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 91</title>
</head>
<body>
    <h1>Exercício 91</h1>
    <h2>Top 3 das músicas</h2>
    <h3>Reimplemente o código a seguir, fazendo com que o array seja armazenado em uma session com o mesmo nome.</h3>
    <div>
        <?php
        session_start();
        $top3['Anitta'] = 'Show das Poderosas';
        $top3['Luan Santana'] = 'Te Esperando';
        $top3['Pollo'] = 'Vagalumes';
        $_SESSION['top3'] = $top3;
        var_dump($_SESSION['top3']);
        ?>
    </div>
</body>
</html>