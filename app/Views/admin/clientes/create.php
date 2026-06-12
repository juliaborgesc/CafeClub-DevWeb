<?php $titulo = 'Novo Cliente'; ?>
<?= view('admin/layout_top') ?>

<h1>Cadastrar Cliente</h1>

<?php if (session()->getFlashdata('erros')): ?>
    <div class="alert alert-danger">
        <?php foreach (session()->getFlashdata('erros') as $erro): ?>
            <div><?= esc($erro) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

    <form action="<?= base_url('admin/clientes/store') ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value="<?= esc(old('nome')) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?= esc(old('email')) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" value="<?= esc(old('telefone')) ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/clientes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

