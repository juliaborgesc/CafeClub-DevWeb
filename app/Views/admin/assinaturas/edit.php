<?php $titulo = 'Editar Assinatura'; ?>
<?= view('admin/layout_top') ?>

<h1>Editar Assinatura</h1>

<?php if (session()->getFlashdata('erros')): ?>
    <div class="alert alert-danger">
        <?php foreach (session()->getFlashdata('erros') as $erro): ?>
            <div><?= esc($erro) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

    <form action="<?= base_url('admin/assinaturas/update/'.$assinatura['id']) ?>" method="post">

        <div class="mb-3">
            <label>Cliente</label>

            <select name="cliente_id" class="form-select" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option
                        value="<?= $cliente['id'] ?>"
                        <?= old('cliente_id', $assinatura['cliente_id']) == $cliente['id'] ? 'selected' : '' ?>>

                        <?= $cliente['nome'] ?>

                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Plano</label>

            <select name="plano_id" class="form-select" required>
                <?php foreach ($planos as $plano): ?>
                    <option
                        value="<?= $plano['id'] ?>"
                        <?= old('plano_id', $assinatura['plano_id']) == $plano['id'] ? 'selected' : '' ?>>

                        <?= $plano['nome'] ?>

                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Data de Início</label>

            <input
                type="date"
                name="data_inicio"
                value="<?= esc(old('data_inicio', $assinatura['data_inicio'])) ?>"
                class="form-control">
            <small class="text-muted">Se ficar em branco, será preenchida com a data atual.</small>
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-select" required>

                <option value="Ativa"
                    <?= old('status', $assinatura['status']) == 'Ativa' ? 'selected' : '' ?>>
                    Ativa
                </option>

                <option value="Inativa"
                    <?= old('status', $assinatura['status']) == 'Inativa' ? 'selected' : '' ?>>
                    Inativa
                </option>

                <option value="Cancelada"
                    <?= old('status', $assinatura['status']) == 'Cancelada' ? 'selected' : '' ?>>
                    Cancelada
                </option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Atualizar
        </button>

        <a href="<?= base_url('admin/assinaturas') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

