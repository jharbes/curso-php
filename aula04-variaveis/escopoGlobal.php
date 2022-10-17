<?php

// Vamos observar que as estruturas não possuem escopo local de variável, ou seja, elas tanto não podem criar variáveis locais apenas para uso dentro delas como podem alterar normalmente os valores das variáveis geradas fora delas (diferente do Java por exemplo)

// Já as funcoes possuem escopo local, ou seja, nao alteram os valores das variaveis globais bem como possuem escopo apenas local de variaveis declaradas dentro delas, perdendo seu valor em memória após o fim da chamada da funcao. 

// No caso de usarmos GLOBAL antes da declaracao da variavel DENTRO da funcao , ela passará a ter escopo global também, passando a referenciar o valor global da variável

$teste = "asd";

echo "$teste global 1 <hr>";

if(5 > 2) {
    $teste = "dsa";
    echo "$teste if <hr>";
}

echo "$teste global 2 <hr>";

function funcao() {
    $teste = "xsxs";
    echo "$teste local <hr>";
}

funcao();
echo "$teste global<hr>";

function testandoGlobal() {
    global $teste;
    $teste = 2;
    echo "$teste global função <br>";
}

testandoGlobal();

echo "$teste global 3 <br>";