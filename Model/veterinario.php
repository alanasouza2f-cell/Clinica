<?php
    namespace Clinica\Projeto\php;

    class veterinario{
        //Atributo = private
        private int $codigo;
        private string $nome;
        private string $telefone;
        private float $salario;
        private string $endereco;


        public function __construct(){
            $this->codigo = 0;
            $this->nome = "";
            $this->telefone = "";
            $this->salario = 0;
            $this->endereco = "";
        }

        public function __get(string $dado):mixed{
            return $this->dado;
        }

        public function __set(string $variavel, string $novoDado):void{
             $this->variavel = $novoDado;
        }

        public function imprimir():string{
            return "<br> Código :". $this->codigo.
                   "<br> Nome :". $this->nome.
                   "<br> Telefone :". $this->telefone.
                   "<br> Salário :". $this->salario.
                   "<br> Endereço :". $this->endereco;

        }


    }//fim da classe


?>