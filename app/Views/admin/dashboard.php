<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — Brasa Café Clube</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css">
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">

</head>
<body>

<!-- Sidebar -->
<nav class="admin-sidebar">
    <a href="<?= base_url('/') ?>" class="admin-logo">
        <img src="<?= base_url('images/logo.svg') ?>" alt="">
        Brasa
    </a>

    <p class="sidebar-label">Geral</p>
    <a href="<?= base_url('/admin') ?>" class="sidebar-link active">
        <i class="hgi-stroke hgi-dashboard-square-01"></i> Dashboard
    </a>

    <p class="sidebar-label">Cadastros</p>
    <a href="<?= base_url('admin/clientes') ?>" class="sidebar-link">
        <i class="hgi-stroke hgi-user-multiple-02"></i> Clientes
    </a>
    <a href="<?= base_url('admin/cafes') ?>" class="sidebar-link">
        <i class="hgi-stroke hgi-coffee-01"></i> Cafés
    </a>
    <a href="<?= base_url('admin/planos/index') ?>" class="sidebar-link">
        <i class="hgi-stroke hgi-package"></i> Planos
    </a>
    <a href="<?= base_url('admin/assinaturas') ?>" class="sidebar-link">
        <i class="hgi-stroke hgi-star"></i> Assinaturas
    </a>

    <p class="sidebar-label">Sistema</p>
    <a href="<?= base_url('/') ?>" class="sidebar-link">
        <i class="hgi-stroke hgi-home-01"></i> Ver site
    </a>
    <a href="<?= base_url('/logout') ?>" class="sidebar-link">
        <i class="hgi-stroke hgi-logout-03"></i> Sair
    </a>
</nav>

<!-- Conteúdo -->
<main class="admin-main">

    <div class="admin-topbar">
        <div>
            <h1>Dashboard</h1>
            <span>Bem-vindo de volta, <?= esc(session()->get('cliente_nome') ?? 'Admin') ?></span>
        </div>
        <a href="<?= base_url('/') ?>" class="btn btn-sm btn-outline-secondary">
            <i class="hgi-stroke hgi-arrow-left-01"></i> Ver site
        </a>
    </div>

    <!-- Cards de atalho -->
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

</main>

</body>
</html>