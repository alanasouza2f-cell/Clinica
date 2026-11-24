<?php
    namespace Clinica\Projeto\DAO;
    
    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','clinica');
                if($conn){
                    echo "Conectado!";
                    return $conn;
                }else{
                    echo "Conexão Falhou!";
                }
            }
            catch(Exception $erro){
                echo "Algo deu errado!<br><br>" .$erro;
            }
        }
    }
?>