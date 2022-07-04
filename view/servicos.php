<?php

//echo "Olá mundo!";


include_once "header.php";


?>


    <main class=" flex flex-col h-max servicos p-20 text-white gap-5">

        <div class="card lg:card-side shadow-xl basis-1/2 bg-black">
            <figure><img src="assets/img/enterro.gif" alt="Funeral!"></figure>
            <div class="card-body">
                <h2 class="card-title">Funeral</h2>
                <p>Caixão + transporte + equipe especializada.</p>
                <div class="card-actions justify-end">
                    <a href="view/cadastro_enterro.php">
                        <button class="btn btn-primary">Contratar</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="card lg:card-side shadow-xl basis-1/2 bg-black">
            <figure><img src="assets/img/cremacao.png" alt="Funeral!" width="500" height="280"></figure>
            <div class="card-body">
                <h2 class="card-title">Cremação</h2>
                <p>Cremação + transporte + urna + equipe especializada.</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Contratar</button>
                </div>
            </div>
        </div>

        <div class="card lg:card-side shadow-xl basis-1/2 bg-gray-500">
            <figure><img src="assets/img/personalizado.png" alt="Funeral!" width="500" height="280"></figure>
            <div class="card-body">
                <h2 class="card-title">Personalizado</h2>
                <p>Para casos específicos.</p>
                <p class="text-4xl self-center place-self-center text-primary rotate-45">Em breve !!!</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary" disabled>Contratar</button>
                </div>
            </div>
        </div>


    </main>

<?php

//echo "Olá mundo!";


include_once __DIR__ . "/footer.php";

?>