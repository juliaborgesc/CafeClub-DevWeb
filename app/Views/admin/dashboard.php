<?php $titulo = 'Dashboard'; ?>
<?= view('admin/layout_top') ?>

<div class="row g-4">

        <div class="col-md-6 col-lg-3">
            <a href="<?= base_url('admin/clientes') ?>" class="menu-card">
                <div class="menu-card-icon" style="background:#faf5e9;">
                    <i class="hgi-stroke hgi-user-multiple-02" style="color:#4f3328;"></i>
                </div>
                <h4>Clientes</h4>
                <p>Gerencie os clientes cadastrados no sistema.</p>
                <span class="go" style="color:#4f3328;">
                    Acessar <i class="hgi-stroke hgi-arrow-right-01"></i>
                </span>
            </a>
        </div>

        <div class="col-md-6 col-lg-3">
            <a href="<?= base_url('admin/cafes') ?>" class="menu-card">
                <div class="menu-card-icon" style="background:#faf5e9;">
                    <i class="hgi-stroke hgi-coffee-01" style="color:#c8845a;"></i>
                </div>
                <h4>Cafés</h4>
                <p>Cadastre e edite os cafés disponíveis no clube.</p>
                <span class="go" style="color:#c8845a;">
                    Acessar <i class="hgi-stroke hgi-arrow-right-01"></i>
                </span>
            </a>
        </div>

        <div class="col-md-6 col-lg-3">
            <a href="<?= base_url('admin/planos') ?>" class="menu-card">
                <div class="menu-card-icon" style="background:#faf5e9;">
                    <i class="hgi-stroke hgi-package" style="color:#788aa3;"></i>
                </div>
                <h4>Planos</h4>
                <p>Visualize e edite os planos de assinatura.</p>
                <span class="go" style="color:#788aa3;">
                    Acessar <i class="hgi-stroke hgi-arrow-right-01"></i>
                </span>
            </a>
        </div>

        <div class="col-md-6 col-lg-3">
            <a href="<?= base_url('admin/assinaturas') ?>" class="menu-card">
                <div class="menu-card-icon" style="background:#faf5e9;">
                    <i class="hgi-stroke hgi-star" style="color:#e28413;"></i>
                </div>
                <h4>Assinaturas</h4>
                <p>Acompanhe as assinaturas ativas e canceladas.</p>
                <span class="go" style="color:#e28413;">
                    Acessar <i class="hgi-stroke hgi-arrow-right-01"></i>
                </span>
            </a>
        </div>

</div>

<?= view('admin/layout_bottom') ?>

