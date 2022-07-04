<?php include_once "header.php"; ?>
<div class="container">
<?php
//Passagem por valor
function fun($c, $d)
{
    $c = "TIN";
    echo "<br>Curso $c - Disciplina $d";
}

fun("ECO", "Programação II");
$curso = "ECA";
fun($curso, "Programação II");
echo "<br> Curso::: $curso";

echo "<br>---------<br>";
//PASSAGEM POR REFERENCIA
function fun2(&$c)
{
    $c = "TIN";
    echo "<br>Curso $c";
}
fun2($curso);
echo "<br> Curso::: $curso";

//Retorno de valor
function quadrado($num)
{
    return $num * $num;
}

echo "<br>" . quadrado(3);
?>
</div>