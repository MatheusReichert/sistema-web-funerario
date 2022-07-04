<?php


include_once "../model/Conexao.class.php";
include_once "../model/Entity.class.php";
include_once "header.php";

$funcEntity = new Entity();


?>

<main class="flex flex-col justify-center items-center h-max w-full rounded-none">
<div class="overflow-x-auto w-full rounded-none">
    <table class="table table-normal min-w-full rounded-none">
        <thead class="border-b ">
        <tr>
            <th>Nome Completo</th>
            <th>Nascimento</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Serviço</th>
            <th>Pagamento</th>
            <th>Data do pedido</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($funcEntity->list("pessoa") as $func){?>
            <tr>
                <td><?php echo $func['nome_completo']; ?></td>
                <td><?php echo implode('/',array_reverse(explode( "-",$func['nascimento']))); ?></td>
                <td><?php echo $func['email']; ?></td>
                <td><?php echo $func['cpf']; ?></td>
                <td><?php echo $func['servico']; ?></td>
                <td><?php echo $func['pagamento']; ?></td>
                <td><?php echo  date("d/m/y",strtotime($func['data_cadastro'])); ?></td>
                <td>
                    <div class="flex flex-col justify-center items-center gap-1">
                        <div class="basis-1 ">
                            <form method="POST" action="" >
                                <input type="hidden" name="id" value="<?=$func['id']?>" />
                                <button class="btn btn-primary gap-5">
                                    <i class="fa-solid fa-user-pen"></i>
                                    Editar
                                </button>
                            </form>
                        </div>
                        <div class="basis-1 ">
                            <form method="POST" action="">
                                <input type="hidden" name="id" value="<?=$func['id']?>" />
                                <button class="btn btn-primary gap-5">
                                    <i class="fa fa-trash"></i>
                                    Apagar
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>

    </table>
</div>

</main>

<?php
include "footer.php";