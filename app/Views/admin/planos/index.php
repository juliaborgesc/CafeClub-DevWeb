<?php $titulo = 'Planos'; ?>
<?= view('admin/layout_top') ?>

<h1>Planos do Clube</h1>

    <a href="<?= base_url('admin/planos/create') ?>" class="btn btn-success mb-3">
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

                    <a href="<?= base_url('admin/planos/edit/'.$plano['id']) ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= base_url('admin/planos/excluir/'.$plano['id']) ?>"
                       class="btn btn-danger btn-sm">
                        Excluir
                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

<?= view('admin/layout_bottom') ?>

