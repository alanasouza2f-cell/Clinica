<?php
    namespace Clinica\Projeto\Telas;
 
    require_once('../DAO/conexao.php');
    require_once('../DAO/consultar.php');
 
    use Clinica\Projeto\DAO\Conexao;
    use Clinica\Projeto\DAO\Consultar;
 
    $conexao = new Conexao();
    $consultar = new Consultar();
    $mensagem = "";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Veterinario</title>
</head>
<body>
    <h1>Consultar Veterinario</h1>
    <form method="POST">
 
        <label>Informe o codigo que deseja procurar: </label>
        <input type = "text" id="codigo" name="codigo"/><br><br>
 
        <button type="submit">Consultar
            <?php
                if(isset($_POST['codigo'])){
                    $codigo = $_POST['codigo'];
 
                    $mensagem = $consultar->consultarVeterinario($conexao,$codigo);
                }
            ?>
        </button>
</form>
 
<?php
    if(isset($_POST['codigo'])){
        echo $mensagem;
    }else{
        echo "Preencha os campos!";
    }
?>
 
    <button><a href="../index.php">Voltar</a></button>
</body>
</html><?php
    namespace Clinica\Projeto\Telas;
 
    require_once('../DAO/conexao.php');
    require_once('../DAO/consultar.php');
 
    use Clinica\Projeto\DAO\Conexao;
    use Clinica\Projeto\DAO\Consultar;
 
    $conexao = new Conexao();
    $consultar = new Consultar();
    $mensagem = "";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Veterinario</title>
</head>
<body>
    <h1>Consultar Veterinario</h1>
    <form method="POST">
 
        <label>Informe o codigo que deseja procurar: </label>
        <input type = "text" id="codigo" name="codigo"/><br><br>
 
        <button type="submit">Consultar
            <?php
                if(isset($_POST['codigo'])){
                    $codigo = $_POST['codigo'];
 
                    $mensagem = $consultar->consultarVeterinario($conexao,$codigo);
                }
            ?>
        </button>
</form>
 
<?php
    if(isset($_POST['codigo'])){
        echo $mensagem;
    }else{
        echo "Preencha os campos!";
    }
?>
 
    <button><a href="../index.php">Voltar</a></button>
</body>
</html>