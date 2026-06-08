<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Planos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Planos do Clube</h1>

    <a href="<?= base_url('planos/create') ?>" class="btn btn-success mb-3">
        Novo Plano
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($planos as $plano): ?>

            <tr>
                <td><?= $plano['id'] ?></td>
                <td><?= $plano['nome'] ?></td>
                <td><?= $plano['descricao'] ?></td>
                <td>R$ <?= $plano['valor'] ?></td>

                <td>

                    <a href="<?= base_url('planos/edit/'.$plano['id']) ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= base_url('planos/excluir/'.$plano['id']) ?>"
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