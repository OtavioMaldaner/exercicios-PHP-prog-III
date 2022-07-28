<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 64</title>
</head>
<body>
    <h1>Exercício 64</h1>
    <h2>Alunos, médias e sexo</h2>
    <h3>Considere que você tenha o código a seguir. Implemente uma página PHP que:</h3>
    <h4>a) Mostre a média da turma.</h4>
    <h4>b) Mostre a média da turma que tirou mais que 7.</h4>
    <h4>c) Mostre a média da turma que tirou menos que 4.</h4>
    <h4>d) Mostre a média das meninas da turma.</h4>
    <h4>e) Mostre a média dos meninos da turma com notas maiores ou igual a 5.</h4>
    <h4>f) Mostre quantos meninos e meninas há na turma.</h4>
    <h4>g) Mostre quantas meninas cujos nomes começam com A há na turma.</h4>
    <h4>h) Mostre a lista com o nome de todos os alunos.</h4>
    <h4>i) Mostre uma tabela com o nome dos alunos e a situação deles: >= 7 aprovado com cor verde, < 7 e >= 4 em exame em azul, < 4 reprovado em vermelho.</h4>
    <h4>j) O nome do aluno com a nota mais baixa.</h4>
    <?php
        $alunos[0]['nome'] = 'Ana';
        $alunos[0]['media'] = 7.2;
        $alunos[0]['sexo'] = 'f';
        $alunos[1]['nome'] = 'Aninha';
        $alunos[1]['media'] = 5.5;
        $alunos[1]['sexo'] = 'f';
        $alunos[3]['nome'] = 'Zezinho';
        $alunos[3]['media'] = 4.8;
        $alunos[3]['sexo'] = 'm';
        $alunos[4]['nome'] = 'Paula';
        $alunos[4]['media'] = 4.5;
        $alunos[4]['sexo'] = 'f';
        $alunos[5]['nome'] = 'João';
        $alunos[5]['media'] = 9.8;
        $alunos[5]['sexo'] = 'm';

    ?>
    <div>
        <h1>Exercício a:</h1>
        <?php
            $soma = 0;
            $quantidade = 0;
            foreach($alunos as $aluno) {
                $soma += $aluno['media'];
                $quantidade ++;
            }
            $media = $soma / $quantidade;
            echo 'A média da turma é '.$media;
        ?>
    </div>
    <div>
        <h1>Exercício b:</h1>
        <?php
            $soma = 0;
            $quantidade = 0;
            foreach($alunos as $aluno) {
                if ($aluno['media'] >= 7) {
                    $soma += $aluno['media'];
                    $quantidade ++;
                } else {
                    continue;
                }
            }
            $media = $soma / $quantidade;
            echo 'A média da turma que tirou mais que 7 é '.$media;
        ?>
    </div>
    <div>
        <h1>Exercício c:</h1>
        <?php
            $soma = 0;
            $quantidade = 0;
            foreach($alunos as $aluno) {
                if ($aluno['media'] <= 4) {
                    $soma += $aluno['media'];
                    $quantidade ++;
                } else {
                    continue;
                }
            }
            if ($quantidade != 0) {
                $media = $soma / $quantidade;
                echo 'A média da turma que tirou menos que 4 é '.$media;
            } else {
                echo 'Não existem alunos que tiraram menos que 4 de média.';
            }
        ?>
    </div>
    <div>
        <h1>Exercício d:</h1>
        <?php
            $soma = 0;
            $quantidade = 0;
            foreach($alunos as $aluno) {
                if ($aluno['sexo'] == 'f') {
                    $soma += $aluno['media'];
                    $quantidade ++;
                } else {
                    continue;
                }
            }
            $media = $soma / $quantidade;
            echo 'A média das meninas da turma é '.$media;
        ?>
    </div>
    <div>
        <h1>Exercício e:</h1>
        <?php
            $soma = 0;
            $quantidade = 0;
            foreach($alunos as $aluno) {
                if ($aluno['media'] >= 5 && $aluno['sexo'] == 'm') {
                    $soma += $aluno['media'];
                    $quantidade ++;
                } else {
                    continue;
                }
            }
            $media = $soma / $quantidade;
            echo 'A média dos meninos da turma que tirou mais que 5 é '.$media;
        ?>
    </div>
    <div>
        <h1>Exercício f:</h1>
        <?php
            $meninos = 0;
            $meninas = 0;
            foreach($alunos as $aluno) {
                if ($aluno['sexo'] == 'm') {
                    $meninos ++;
                } else if ($aluno['sexo'] == 'f') {
                    $meninas ++;
                }
            }
            echo 'A turma é composta por '.$meninas.' meninas e '.$meninos.' meninos.';
        ?>
    </div>
    <div>
        <h1>Exercício g:</h1>
        <?php
            $soma = 0;
            foreach($alunos as $aluno) {
                $nome = strtolower($aluno['nome']);
                if (str_starts_with($nome, 'a')) {
                    $soma ++;
                } else {
                    continue;
                }
            }
            echo 'Tem '.$soma.' meninas que o nome começa com a letra "A" na turma.';
        ?>
    </div>
    <div>
        <h1>Exercício h:</h1>
        <?php
            $nomes = [];
            foreach($alunos as $aluno) {
                $nomes[] = $aluno['nome']; 
            }
            var_dump($nomes);
        ?>
    </div>
    <div>
        <h1>Exercício i:</h1>
        <?php
            echo '<table>';
            foreach($alunos as $aluno) {
                echo '<tr><td>'.$aluno['nome'].'</td><td>';
                if ($aluno['media'] >= 7) {
                    echo '<font color = "green">Aprovado</font>';
                } else if ($aluno['media'] < 7 && $aluno['media'] >= 4) {
                    echo '<font color = "blue">Em exame</font>';
                } else if ($aluno['media'] < 4) {
                    echo '<font color = "red">Reprovado</font>';
                }
                echo '</td></tr>';
            }
            echo '</table>';
        ?>
    </div>
    <div>
        <h1>Exercício j:</h1>
        <?php
            $maisBaixa = -1;
            $nota = 11;
            foreach($alunos as $posicao=> $aluno) {
                if ($aluno['media'] < $nota) {
                    $nota = $aluno['media'];
                    $maisBaixa = $posicao;
                }
            }
            echo 'O aluno com a menor média é '.$alunos[$maisBaixa]['nome'];
        ?>
    </div>
</body>
</html>