<?php include_once "header.php"; ?>
<div class="container">
        <div class="card text-dark bg-warning mb-3">
            <div class="card-header">Dados</div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $_GET["txtNome"]; ?>
                </h5>
                <p class="card-text">
                     O curso selecionado foi:
                     <?php echo $_GET["selCurso"]; ?>
                     e ele está 
                     <?php if (
                         isset($_GET["cbxAtivo"]) &&
                         $_GET["cbxAtivo"] == "on"
                     ) {
                         echo "<b>Ativo</b>";
                     } else {
                         echo "<b>Inativo</b>";
                     } ?>
                </p>
            </div>
        </div>

        <a href="./formulario1.php" class="btn btn-danger">Voltar</a>
</div>