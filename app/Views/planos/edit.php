<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Plano</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Editar Plano</h1>

    <form action="<?= base_url('planos/update/'.$plano['id']) ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input
                type="text"
                name="nome"
                value="<?= $plano['nome'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea
                name="descricao"
                class="form-control"><?= $plano['descricao'] ?></textarea>
        </div>

        <div class="mb-3">
            <label>Valor</label>
            <input
                type="number"
                step="0.01"
                name="valor"
                value="<?= $plano['valor'] ?>"
                class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Atualizar
        </button>

        <a href="<?= base_url('planos') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

</body>
</html>