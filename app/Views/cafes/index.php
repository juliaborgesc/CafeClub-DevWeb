<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cafés</title>
    <link rel="icon" href="<?= base_url('images/logo.svg') ?>" type="image/svg+xml">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Cafés Cadastrados</h1>

    <a href="<?= base_url('cafes/create') ?>" class="btn btn-success mb-3">
        Novo Café
    </a>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Origem</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($cafes as $cafe): ?>

            <tr>
                <td><?= $cafe['id'] ?></td>
                <td><?= $cafe['nome'] ?></td>
                <td><?= $cafe['origem'] ?></td>
                <td><?= $cafe['perfil'] ?></td>

                <td>
                    <a href="<?= base_url('cafes/edit/'.$cafe['id']) ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= base_url('cafes/excluir/'.$cafe['id']) ?>"
                       class="btn btn-danger btn-sm">
                        Excluir
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>