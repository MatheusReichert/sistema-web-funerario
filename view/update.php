<?php
include "header.php";
require "../model/Entity.class.php";

$sql = new Entity();

$var = $sql->search('pessoa', 2);

?>


<main class="bg-base-100  text-white font-serif">


    <div class="m-auto w-4/5 items-center justify-center flex flex-col">
        <h1 class=" text-4xl w-1/2 menu-title border-b-primary border-b-2  text-white text-center pt-5">Cadastro</h1>
        <form method="POST" action="controller/pessoas/update_pessoas.php" target="_blank" class="form-control flex flex-col gap-1 w-full p-10">

            <label for="nome_completo" class="label flex-shrink grow-0">Nome completo:</label>
            <input class="input grow input-bordered text-black bg-gray-200 " type="text" name="nome_completo"
                   id="nome_completo" maxlength="128" value="<?php echo $var['nome_completo']; ?>"
                   placeholder="Seu nome" required/>

            <label for="nascimento" class="label ">Data de nascimento:</label>
            <input class="input input-bordered  text-black bg-gray-200"
                   value=<?php echo $var['nascimento']; ?>  type="date" name="nascimento" id="nascimento"
                   required/>

            <label for="cpf " class="label ">CPF:</label>
            <input class="input input-bordered  text-black bg-gray-200 grow" type="text" name="cpf" id="cpf"
                   value=<?php echo $var['cpf']; ?> placeholder="xxx.xxx.xxx-xx"
                   required/>

            <label for="email " class="label ">Email:</label>
            <input class="input input-bordered  text-black bg-gray-200 grow" value=<?php echo $var['email']; ?> ?
                   type="email" name="email" id="email"
                   placeholder="exemplo@exemplo.com" required/>

            <label for="servico">Serviço: </label>
            <select name="servico" id="servico" value=<?php echo $var['servico']; ?> class="select-multiple text-black
                    input input-bordered bg-white" required>
            <option value="enterro">Enterro</option>
            <option value="cremacao">Cremação</option>
            </select>

            <div class="flex-row flex flex-wrap items-center justify-between">

                <div class="basis-1/3 grow-0">
                    <label for="pagamento">Metodo de pagamento: </label>
                    <select name="pagamento" id="pagamento"
                            class="select-multiple text-black input input-bordered bg-white" required>
                        <option <?php if ($var['pagamento'] == 'pix') echo 'selected' ?> value="pix">Pix</option>
                        <option <?php if ($var['pagamento'] == 'cartao') echo 'selected' ?> value="cartao">Cartão
                            (credito/debito)
                        </option>
                    </select>
                </div>


            </div>


            <label for="Usuario" class="m-0 label gap-1 flex-shrink grow-0">Usuario:</label>
            <input class="input grow input-bordered text-black bg-gray-200 " type="text>"
                   value=<?php echo $var['usuario']; ?>  name="usuario"
                   id="usuario" placeholder="Usuario" required/>

            <label for="Senha" class="label ">Senha: </label>
            <input class="input input-bordered  text-black bg-gray-200" placeholder="*********" maxlength="8"
                   value=<?php echo $var['senha']; ?>
                   type="password" name="senha" id="senha"
                   required/>

            <input type="hidden" id="id" name="id" value="<?php echo $var["id"];?>">
            <input type="hidden" id="data_cadastro" name="data_cadastro" value="<?php echo date("Y-m-d",strtotime($var['data_cadastro'])); ?>">
            <input type="hidden" name="adm" value="0">
            <button type="submit" class="btn  btn-success m-5 self-end">Atualizar</button>


    </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpf").mask("000.000.000-00");
            $("#phone").mask("(00) 00000-0000");
        })
    </script>

</main>

