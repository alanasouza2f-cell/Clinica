<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;

    class Excluir{
        function excluirVeterinario(Conexao $conexao, int $codigo){
            try{
                $conn   = $conexao->conectar();
                $sql   = "delete from veterinario where codigo = '$codigo'";
                $result  = mysqli_query($conn, $sql);
                //fim do banco de dados 
                    if($result){
                        return "<br><br>Excluido com sucesso!";
                    }//fim do if

                }//fim do while

            catch(Exception $erro){
                return "<br><br>Algo deu Errado!<br><br>$erro";
            }
        }//fim do consultar        
    }//fim do excluir
?>