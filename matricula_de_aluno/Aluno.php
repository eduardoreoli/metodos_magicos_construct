<?php 

require_once ('Pessoa.php');

class Aluno extends Pessoa{
    public $matricula;

    public function __construct($nome, $idade, $matricula){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }
}