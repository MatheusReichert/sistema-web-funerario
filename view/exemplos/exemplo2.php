<?php include_once "header.php"; ?>
<div class="container">
<?php
//IF ELSE
$a = 1;
$b = 2;
if ($a < $b) {
    echo "\$a < \$b";
} elseif ($a == $b) {
    echo "\$a == \$b";
} else {
    echo "\$a > \$b";
}

//Ternário
// (condição) ? expressão1 : expressão2
$b = $a > 0 ? $a + 1 : $a - 1;
echo "<br>B = $b";

//switch case
$i = "c";
switch ($i) {
    case "a":
        echo "i = a";
        break;
    case "b":
        echo "i = b";
        break;
    default:
        echo "i = c";
        break;
}

//while
$i = 0;
echo "<br>WHILE";
while ($i < 5) {
    echo " i  =  $i";
    $i++;
}

//Do While
$i = 0;
echo "<br>DO WHILE";
do {
    echo " i  =  $i";
    $i++;
} while ($i < 5);

echo "<br>FOR";
//for
for ($i = 0; $i <= 5; $i++) {
    echo " i  =  $i";
}

echo "<br>FOREACH";
//foreach
$cursos = ["ECO", "ECA", "TIN"];
foreach ($cursos as $chave => $valor) {
    echo "<br> curso $chave = $valor";
}
?>
</div>