<?php
    namespace Clinica\Projeto\Telas;

    require_once('../DAO/conexao.php');
    require_once('../DAO/cadastrar.php');

    use Clinica\Projeto\DAO\Conexao;
    use Clinica\Projeto\DAO\cadastrar;
    
    $conexao = new Conexao;
    $cadastrar = new Cadastrar();
    $mensagem = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Veterinario</h1>
    <form method="POST">
        <label>Nome: </label>
        <input type="text" id="nome" name="nome"/><br><br>

        <label>Telefone: </label>
        <input type="text" id="telefone" name="telefone"/><br><br>
        
        <label>Salário: </label>
        <input type="text" id="salario" name="salario"/><br><br>

        <label>Endereço: </label>
        <input type="text" id="endereco" name="endereco"/><br><br>
        
        <button type="submit">Cadastrar
            <?php
                if(isset($_POST['nome'])){
                $nome   =$_POST['nome'];
                $telefone   =$_POST['telefone'];
                $salario   =$_POST['salario'];
                $endereco   =$_POST['endereco'];

                $mensagem =$cadastrar->cadastrarVeterinario($conexao,
                                                            $nome,
                                                            $telefone,
                                                            $salario,
                                                            $endereco);
                }
            ?>
        </button>
    </from>
    <?php

?>
</body>
</html>
