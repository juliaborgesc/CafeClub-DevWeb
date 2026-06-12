<?php $titulo = 'Assinaturas'; ?>
<?= view('admin/layout_top') ?>

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

<?= view('admin/layout_bottom') ?>

