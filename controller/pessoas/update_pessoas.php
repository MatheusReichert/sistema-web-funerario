<?php
include_once '../../model/Conexao.class.php';
include_once '../../model/Entity.class.php';

$funcEntity = new Entity();

$id =  $_POST["id"];
$dados = $_POST;

echo $_POST["id"];

if(isset($id) && !empty($id)){
    $funcEntity ->update("pessoa", $dados, $id);

}
?>