<?php include_once __DIR__ . ""; ?>
<div class="container">
    <form method="GET" action="respForm1.php">
        <fieldset>
            <legend>Formulário GET</legend>
            <div class="form-group">
                <label for="txtNome" class="form-label">
                Nome: </label>
                <input required id="txtNome" name="txtNome"
                 type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="selCurso" class="form-label">
                Curso: </label>
                <select required id="selCurso" name="selCurso"
                 class="form-control">
                    <option selected>Selecione um curso aqui</option>
                    <option>ECO</option>
                    <option>ECA</option>
                    <option>TIN</option>
                </select>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox"
                    class="form-check-input"
                    id="cbxAtivo" name="cbxAtivo">
                    <label for="cbxAtivo" class="form-check-label">
                    Ativo </label>
                </div>
            </div>
            <button type="submit" 
            class="btn btn-danger" >Enviar</button>
        </fieldset>
    </form>
</div>