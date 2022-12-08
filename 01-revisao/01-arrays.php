<?php

/*
    $nome = 'Cassio';
    $idade = 18;
    $peso = 85;
    $telefone01 = 99999999;
    $telefone02 = 88999999;

    $nome01 = 'Tiago';
    $idade01 = 18;
    $peso01 = 85;
    $telefone0101 = 99999999;
    $telefone0102 = 88999999;
*/

$pessoas = [
    [
        'nome' => 'Cassio',
        'idade' => 18,
        'peso' => 85,
        'telefones' => [
            99999999,
            88999999,
        ],
    ],
    [
        'nome' => 'Tiago',
        'idade' => 18,
        'peso' => 29,
        'telefones' => [
            19999991,
            28999101,
        ],
    ]
];

// Olá NOME. Seu pedo é PESO, e sua idade é IDADE

// echo "Olá " . $pessoas[0]['nome'] . ". Seu peso é " . $pessoas[0]['peso'] . ", e sua idade é " . $pessoas[0]['idade'] . ".";

// for, foreach, while, do while

/*
    C like
    for (A; B; D) {
        C
    }

    for (N = 0; N < count($pessoas); N = N +1) {
        echo $pessoas[N]['nome'];
    }
    -------------
    while(COMPARADOR) {
        EXECUTO SE COMPARADOR FOR VERDADEIRO
    }
*/

/*
    for ($n = 0; $n < count($pessoas); $n++) {
        echo "Olá " . $pessoas[$n]['nome'] . ". Seu peso é " . $pessoas[$n]['peso'] . ", e sua idade é " . $pessoas[$n]['idade'] . "." . PHP_EOL;
    }
*/

/*
    $n = 0;
    while ($n < count($pessoas)) {
        echo "Olá " . $pessoas[$n]['nome'] . ". Seu peso é " . $pessoas[$n]['peso'] . ", e sua idade é " . $pessoas[$n]['idade'] . "." . PHP_EOL;
        $n++;
    }
*/

/*
    $n = 0;
    do {
        // $n = $n ?? 0;
        // $n ??= 0;
        echo "Olá " . $pessoas[$n]['nome'] . ". Seu peso é " . $pessoas[$n]['peso'] . ", e sua idade é " . $pessoas[$n]['idade'] . "." . PHP_EOL;
        $n++;
    } while ($n < count($pessoas));
*/

/*
    $limit = 10; //25
    $offset = 0;

    do {
        $dados = Sql::query(
            "select * from users order by id desc limit {$limit} offset {$offset};"
        );

        $offset = $offset + ($limit + 1);
    } while(count($dados) >= 0);
*/

/*
foreach ($pessoas as $pessoa) {
    echo "Olá {$pessoa['nome']} Seu peso é {$pessoa['peso']} , e sua idade é {$pessoa['idade']}" . PHP_EOL;
}
*/
