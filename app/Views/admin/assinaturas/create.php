<?php $titulo = 'Nova Assinatura'; ?>
<?= view('admin/layout_top') ?>

<h1>Cadastrar Assinatura</h1>

    <form action="<?= base_url('admin/assinaturas/store') ?>" method="post">

        <div class="mb-3">
            <label>Cliente</label>

            <select name="cliente_id" class="form-select">
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?= $cliente['id'] ?>">
                        <?= $cliente['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Plano</label>

            <select name="plano_id" class="form-select">
                <?php foreach ($planos as $plano): ?>
                    <option value="<?= $plano['id'] ?>">
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
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-select">
                <option value="Ativa">Ativa</option>
                <option value="Inativa">Inativa</option>
                <option value="Cancelada">Cancelada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/assinaturas') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

