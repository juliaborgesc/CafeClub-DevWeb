<?php $titulo = 'Novo Plano'; ?>
<?= view('admin/layout_top') ?>

<h1>Cadastrar Plano</h1>

    <form action="<?= base_url('admin/planos/store') ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/planos') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

