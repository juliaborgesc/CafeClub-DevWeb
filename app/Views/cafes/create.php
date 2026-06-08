<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Café</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Cadastrar Café</h1>

    <form action="<?= base_url('cafes/store') ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label>Origem</label>
            <input type="text" name="origem" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Perfil</label>

            <select name="perfil" class="form-select">
                <option value="Iniciante">Iniciante</option>
                <option value="Frutado">Frutado</option>
                <option value="Intenso">Intenso</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('cafes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

</body>
</html>