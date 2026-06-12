<?php $titulo = 'Cafés'; ?>
<?= view('admin/layout_top') ?>

<h1>Cafés Cadastrados</h1>

    <a href="<?= base_url('admin/cafes/create') ?>" class="btn btn-success mb-3">
        Novo Café
    </a>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Origem</th>
                <th>Perfil</th>
                <th>Torra</th>
                <th>Intensidade</th>
                <th>Envio</th>
                <th>Moagem</th>
                <th>Disponibilidade</th>
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
                <td><?= esc($cafe['torra'] ?? '-') ?></td>
                <td><?= esc($cafe['intensidade'] ?? '-') ?>/10</td>
                <td><?= ($cafe['forma_envio'] ?? '') === 'MOIDO' ? 'Moído' : 'Grãos' ?></td>
                <td><?= esc($cafe['moagem'] ?: 'Sem moagem') ?></td>
                <td>
                    <?php if (!empty($cafe['disponivel'])): ?>
                        <span class="badge text-bg-success">Disponível</span>
                    <?php else: ?>
                        <span class="badge text-bg-secondary">Indisponível</span>
                    <?php endif; ?>
                </td>

                <td>
                    <a href="<?= base_url('admin/cafes/edit/'.$cafe['id']) ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= base_url('admin/cafes/excluir/'.$cafe['id']) ?>"
                       class="btn btn-danger btn-sm">
                        Excluir
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

<?= view('admin/layout_bottom') ?>

