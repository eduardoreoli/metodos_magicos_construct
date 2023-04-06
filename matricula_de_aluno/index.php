<?php 

require_once ('Aluno.php');

$aluno_joao = new Aluno("joão", "20", "12345");

echo "Nome: $aluno_joao->nome<br>";
echo "Idade: $aluno_joao->idade<br>";
echo "Matricula: $aluno_joao->matricula";