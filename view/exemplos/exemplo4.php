<?php include_once "header.php"; ?>
<div class="container">
<?php
//Cookies
setcookie("Usuario", "Diego Teixeira Witt", time() + 3600);

//Recuperar
echo $_COOKIE["Usuario"] . "<BR>";

//Todos os Cookies
print_r($_COOKIE);

//SESSÕES
//Inicializar a sessão
session_start();

$_SESSION["usuario"] = "Diego Teixeira witt";

if (isset($_SESSION["usuario"])) {
    echo "<BR>Sessão <br>" . $_SESSION["usuario"] . "<BR>";
}

//apagar
//unset($_SESSION["usuario"]);

//funções
echo "<br><br>ID sessão:" . session_id();
echo "<br>Nme da Sessão:" . session_name();

echo "<br>Codificar:" . session_encode();
echo "<br>Decodificar Usuário:" . session_decode($_SESSION["usuario"]);

//liberar da memória
session_unset();

//apagar todos os itens da sessão
session_destroy();
?>
</div>