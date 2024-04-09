<?php 

echo("<h2>Trabalhando com PHP</h2>");
print("Olá, eu estou programando em PHP<br>");

echo("Testando a saída de uma string com echo" . ("<br>"));

$nome = "Marcelo"; //declarando variavel e atributo valor tipo string
$sobrenome = "Junior"; //declarando variavel e atributo valor tipo string
$idade = 15; //declarando variavel e atributo valor tipo string
$numero = 2024; //declarando variavel e atributo valor tipo string
$dia = 22; //declarando variavel e atributo valor tipo string
$valordia = 70.40; //declarando variavel e atributo valor tipo string 
$salario; //declarando variavel e atributo valor tipo string
$salario = $dia * $valordia; //declarando variavel e atributo valor tipo string

echo("Nome: " . $nome . ("<br>"));
echo("Sobrenome: " . $sobrenome . ("<br>"));
echo("Idade: " . $idade . ("<br>"));
echo("Número: " . $numero . ("<br>"));
echo("Dia: " . $dia . ("<br>"));
echo("Valor dia: " . $valordia . ("<br>"));
echo("Salário R$: " . $salario . ("<br>"));
echo("Salário R$: " . ($dia * $valordia) . ("<br>"));

echo("#####################################" . ("<br>"));
$a = 10;
$b = 20;
$soma;
$subtracao;
$multiplicacao;

$divisao;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo("Soma: " . $soma .  "<br>");
echo("Subtração: " . $subtracao .  "<br>");
echo("Multiplicação: " . $multiplicacao .  "<br>");
echo("Divisão: " . $divisao .  "<br>");
echo("#####################################" . ("<br>"));

 //este é um comentário simples
 #este também é um comentário simples
 /*
 multi comentários
 */
?>