<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;

    class Consultar{
        function consultarVeterinario(Conexao $conexao, int $codigo){
            try{
                $conn   = $conexao->conectar();
                $sql   = "select * from veterinario where codigo = '$codigo'";
                $result   = mysqli_query($conn, $sql);
                //fim do banco de dados 
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo']== $codigo){
                        return "<br>Codigo: ".$dados['codigo'].
                               "<br>Nome: ".$dados['nome'].
                               "<br>Telefone: ".$dados['telefone'].
                               "<br>Salário: ".$dados['salario'].
                               "<br>Endereço: ".$dados['endereco'];
                    }//fim do if
                }//fim do while

            }catch(Exception $erro){
                return "<br><br>Algo deu Errado!<br><br>$erro";
            }
        }//fim do consultar        
    }//fim do consultar
?>