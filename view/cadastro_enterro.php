<?php


include_once "header.php"; ?>

<main class="bg-base-100  text-white font-serif">


    <div class="m-auto w-4/5 items-center justify-center flex flex-col">
        <h1 class=" text-4xl w-1/2 menu-title border-b-primary border-b-2  text-white text-center pt-5">Cadastro</h1>

        <form method="POST" action="" target="_parent" class="form-control flex flex-col gap-1 w-full p-10">


            <label for="nome_completo" class="label flex-shrink grow-0">Nome completo:</label>
            <input class="input grow input-bordered text-black bg-gray-200 " type="text" name="nome_completo"
                id="nome_completo" maxlength="128" placeholder="Seu nome" required />

            <label for="nascimento" class="label ">Data de nascimento:</label>
            <input class="input input-bordered  text-black bg-gray-200  " type="date" name="nascimento" id="nascimento"
                required />

            <label for="cpf " class="label ">CPF:</label>
            <input class="input input-bordered  text-black bg-gray-200 grow" type="text" name="cpf" id="cpf"
                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" required />

            <label for="email " class="label ">Email:</label>
            <input class="input input-bordered  text-black bg-gray-200 grow" type="email" name="email" id="email"
                placeholder="exemplo@exemplo.com" required />

            <label for="servico">Serviço: </label>
            <select name="servico" id="servico" class="select-multiple text-black input input-bordered bg-white" required>
                <option value="enterro">Enterro</option>
                <option value="cremacao">Cremação</option>
            </select>

            <div class="flex-row flex flex-wrap items-center justify-between">

                <div class="basis-1/3 grow-0">
                    <label for="pagamento">Metodo de pagamento: </label>
                    <select name="pagamento" id="pagamento" class="select-multiple text-black input input-bordered bg-white" required>
                        <option value="Pix">Pix</option>
                        <option value="Cartão">Cartão (credito/debito) </option>
                    </select>
                </div>

                <h1 class="basis-1/3 m-2 justify-center items-center border-dotted border-2 border-red-600 p-4 grow-0 text-red-500">
                    O pagamento se da de maneira presencial mediante a combinação por email!
                </h1>

            </div>


            <label for="Usuario" class="m-0 label flex-shrink grow-0">Usuario:</label>
            <input class="input grow input-bordered text-black bg-gray-200 " type="text>" name="usuario"
                id="usuario" placeholder="Usuario" required />

            <label for="Senha" class="label ">Senha: </label>
            <input class="input input-bordered  text-black bg-gray-200" placeholder="*********" maxlength="8" type="password" name="senha" id="senha"
                required />


            <button type="submit" class="btn  btn-success m-5 self-end">Cadastrar</button>

    </form>
    </div>


</main>