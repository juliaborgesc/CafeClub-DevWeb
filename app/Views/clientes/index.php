<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Clientes Cadastrados</h1>

    <a href="<?= base_url('clientes/create') ?>" class="btn btn-success mb-3">
        Novo Cliente
    </a>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Perfil</th>
                <th>Método</th>
                <th>Envio</th>
                <th>Moagem</th>
                <th>Plano</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach ($clientes as $cliente): ?>

            <tr>
                <td><?= $cliente['nome'] ?></td>
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['telefone'] ?></td>
                <td><?= $cliente['perfil'] ?></td>
                <td><?= $cliente['metodo_preparo'] ?></td>
                <td><?= $cliente['forma_envio'] ?></td>
                <td><?= $cliente['moagem'] ?></td>
                <td><?= $cliente['plano'] ?></td>
                <td><?= $cliente['plano_ativo'] ? 'Ativo' : 'Inativo' ?></td>

                <td>
                    <a href="<?= base_url('clientes/edit/'.$cliente['id']) ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= base_url('clientes/excluir/'.$cliente['id']) ?>"
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