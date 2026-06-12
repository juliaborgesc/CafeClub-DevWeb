<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Café</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Editar Café</h1>

    <form action="<?= base_url('cafes/update/'.$cafe['id']) ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>

            <input
                type="text"
                name="nome"
                value="<?= $cafe['nome'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Origem</label>

            <input
                type="text"
                name="origem"
                value="<?= $cafe['origem'] ?>"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrição</label>

            <textarea
                name="descricao"
                class="form-control"><?= $cafe['descricao'] ?></textarea>
        </div>

        <div class="mb-3">
            <label>Perfil</label>

            <select name="perfil" class="form-select">

                <option value="Iniciante"
                    <?= $cafe['perfil'] == 'Iniciante' ? 'selected' : '' ?>>
                    Iniciante
                </option>

                <option value="Frutado"
                    <?= $cafe['perfil'] == 'Frutado' ? 'selected' : '' ?>>
                    Frutado
                </option>

                <option value="Intenso"
                    <?= $cafe['perfil'] == 'Intenso' ? 'selected' : '' ?>>
                    Intenso
                </option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Atualizar
        </button>

        <a href="<?= base_url('cafes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

</body>
</html>