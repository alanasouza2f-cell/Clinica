<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;
    
    class Cadastrar{
        public function cadastrarVeterinario(Conexao $conexao,
                                            string $nome,
                                            string $telefone,
                                            float $salario,
                                            string $endereco)
        {
             try{
                    $conn = $conexao->conectar();//conectando com o BD
                    $sql = "insert into veterinario(codigo,nome,telefone,salario,endereco)
                            values('','$nome','$telefone','$salario','$endereco')";//Comando para o BD
                    $result = mysqli_query($conn,$sql);//Executar
 
                    if($result){
                        return "<br><br>Cadastrado com Sucesso!";
                    }
                    return "<br><br>Não Cadastrado";
                }catch(Exception $erro){
                    echo "<br><br>Algo deu errado!<br><br>" .$erro;
                }
        }
    }
?>