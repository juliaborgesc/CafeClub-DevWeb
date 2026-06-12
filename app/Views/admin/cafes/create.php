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

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Torra</label>
                <select name="torra" class="form-select">
                    <option value="Clara">Clara</option>
                    <option value="Média" selected>Média</option>
                    <option value="Média escura">Média escura</option>
                    <option value="Escura">Escura</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Intensidade</label>
                <input type="number" name="intensidade" class="form-control" min="1" max="10" value="5">
                <small class="text-muted">Escala de 1 a 10. Quanto maior, mais marcante e encorpado.</small>
            </div>
        </div>

        <div class="mb-3">
            <label>Perfil</label>

            <select name="perfil" class="form-select">
                <?php foreach ($perfis as $perfil): ?>
                    <option value="<?= esc($perfil) ?>"><?= esc($perfil) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Forma de envio</label>
                <select name="forma_envio" class="form-select">
                    <option value="GRAOS">Em grãos</option>
                    <option value="MOIDO">Moído</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Moagem</label>
                <select name="moagem" id="moagem" class="form-select" disabled>
                    <option value=""></option>
                    <option value="FINA">Fina</option>
                    <option value="MEDIA_FINA">Média-fina</option>
                    <option value="MEDIA">Média</option>
                    <option value="GROSSA">Grossa</option>
                </select>
                <small class="text-muted">Disponível apenas quando a forma de envio for moído.</small>
            </div>
        </div>

        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" name="disponivel" id="disponivel" value="1" checked>
            <label class="form-check-label" for="disponivel">Café disponível</label>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

        <a href="<?= base_url('admin/cafes') ?>" class="btn btn-secondary">
            Voltar
        </a>

    </form>

<script>
    const formaEnvio = document.querySelector('[name="forma_envio"]');
    const moagem = document.querySelector('[name="moagem"]');

    function atualizarMoagem() {
        const permiteMoagem = formaEnvio.value === 'MOIDO';
        moagem.disabled = !permiteMoagem;

        if (!permiteMoagem) {
            moagem.value = '';
        }

        moagem.required = permiteMoagem;
    }

    formaEnvio.addEventListener('change', atualizarMoagem);
    atualizarMoagem();
</script>

<?= view('admin/layout_bottom') ?>

