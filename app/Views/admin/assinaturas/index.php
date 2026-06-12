<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Assinaturas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Assinaturas</h1>

    <a href="<?= base_url('admin/assinaturas/create') ?>" class="btn btn-success mb-3">
        Nova Assinatura
    </a>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>Cliente ID</th>
                <th>Plano ID</th>
                <th>Data de Início</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach ($assinaturas as $assinatura): ?>

            <tr>
                <td><?= $assinatura['cliente_id'] ?></td>
                <td><?= $assinatura['plano_id'] ?></td>
                <td><?= $assinatura['data_inicio'] ?></td>
                <td><?= $assinatura['status'] ?></td>

                <td>
                    <a href="<?= base_url('admin/assinaturas/edit/'.$assinatura['id']) ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= base_url('admin/assinaturas/excluir/'.$assinatura['id']) ?>"
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