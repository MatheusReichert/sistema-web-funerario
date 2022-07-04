<?php include_once "header.php"; ?>
<div class="container">
<?php
include_once "../../model/Aluno.class.php";
$objetoAluno = new Aluno();

$objetoAluno->nome = "Diego Teixeira";

echo "<br>" . $objetoAluno->getNome();
?>
</div>