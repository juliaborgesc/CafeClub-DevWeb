<?php $titulo = 'Novo Plano'; ?>
<?= view('admin/layout_top') ?>

<h1>Cadastrar Plano</h1>

<?php if (session()->getFlashdata('erros')): ?>
    <div class="alert alert-danger">
        <?php foreach (session()->getFlashdata('erros') as $erro): ?>
            <div><?= esc($erro) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

    <form action="<?= base_url('admin/planos/store') ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value="<?= esc(old('nome')) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" required><?= esc(old('descricao')) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Valor</label>
            <input type="number" step="0.01" min="0.01" name="valor" value="<?= esc(old('valor')) ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/planos') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

