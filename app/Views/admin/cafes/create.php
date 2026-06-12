<?php $titulo = 'Novo Café'; ?>
<?= view('admin/layout_top') ?>

<h1>Cadastrar Café</h1>

    <form action="<?= base_url('admin/cafes/store') ?>" method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label>Origem</label>
            <input type="text" name="origem" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Perfil</label>

            <select name="perfil" class="form-select">
                <option value="Iniciante">Iniciante</option>
                <option value="Frutado">Frutado</option>
                <option value="Intenso">Intenso</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/cafes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<?= view('admin/layout_bottom') ?>

