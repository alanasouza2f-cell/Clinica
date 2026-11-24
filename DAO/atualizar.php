<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;
 
    class Consultar{
        function atualizarVeterinario(Conexao $conexao, int $codigo, string $dado, string $campo, string $novoDado){
            try{
                $conn = $conexao->conectar();
                $sql = "update from veterinario set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
               
                if($result){
                    return "<br><br>Dado Atualizado com sucesso!";
                }
                    return "<br><br>Não Atualizado!";
                }
            catch(Exception $erro){
                return "<br><br> Algo deu errado!";
            }
        }
    }
?>
  