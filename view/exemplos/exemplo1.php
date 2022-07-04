<?php
include_once "header.php"; ?>
<div class="container">
    <?php
    $var = "Diego";
    $x = 1;
    $y = 1.1456;
    $Var = "Pedro";
    $var = 10;

    //CONSTANTES
    define("HORA", "12:00");
    const HORA1 = "12:00";

    //eXPRESSÕES
    $RESULTADO = 4 * 9;

    //Operadores aritméticos
    // + -  * / %

    //CONCATENAR '.'
    $exemplo = "Texto ";
    $continucao = " qualquer!";
    echo $exemplo . $continucao;

    //Operadores de comparação
    // ==  igual
    // !=  <> diferente
    // === identico
    // !== Não identico

    $a = 1;
    $b = "001";

    $c = $a == $b;
    $d = $a === $b;

    echo "<br>Comparação: <br> == " . $c . "<br> === " . $d;

    //Operadores Lógicos
    // E and &&
    // OU or ||

    //Vetores - arrays
    $vetor = [1, 2, 3, 4, 5, 6];
    $vetor1 = ["maça" => 100, "b" => "200"];
    $vetor2 = [1 => 100, 2 => "Banana"];

    //Operadores com vetores
    //Unir +
    $vetor3 = $vetor + $vetor2;
    //Igualdade
    $h = $vetor2 == $vetor3;

    //Imprimir vetor
    var_dump($vetor1);
    print_r($vetor2);

    //Eliminar um item do vetor
    unset($vetor[0]);
    var_dump($vetor);

    //Apagar o vetor
    unset($vetor3);
    ?>
</div>
