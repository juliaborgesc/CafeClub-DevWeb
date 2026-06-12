<?php
$titulo = $titulo ?? 'Admin';
$adminNome = session()->get('admin_nome') ?? 'Admin';

$links = [
    ['label' => 'Dashboard', 'url' => base_url('admin'), 'icon' => 'hgi-stroke hgi-dashboard-square-01'],
    ['label' => 'Clientes', 'url' => base_url('admin/clientes'), 'icon' => 'hgi-stroke hgi-user-multiple'],
    ['label' => 'Cafés', 'url' => base_url('admin/cafes'), 'icon' => 'hgi-stroke hgi-coffee-01'],
    ['label' => 'Planos', 'url' => base_url('admin/planos'), 'icon' => 'hgi-stroke hgi-package'],
    ['label' => 'Assinaturas', 'url' => base_url('admin/assinaturas'), 'icon' => 'hgi-stroke hgi-invoice-03'],
];
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($titulo) ?> - Brasa Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: #f7f4f1;
        }

        .admin-sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 220px;
            background: #4f3328;
            color: #fff;
            z-index: 1030;
        }

        .admin-sidebar a {
            color: rgba(255, 255, 255, .82);
            text-decoration: none;
        }

        .admin-sidebar a:hover,
        .admin-sidebar a:focus {
            color: #fff;
            background: rgba(255, 255, 255, .1);
        }

        .admin-brand {
            height: 72px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            font-size: 1.15rem;
            font-weight: 700;
            color: #fff !important;
        }

        .admin-nav-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 20px;
            border-radius: 0;
            font-weight: 500;
        }

        .admin-main {
            margin-left: 220px;
            min-height: 100vh;
            padding: 32px;
        }

        .admin-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 28px;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(79, 51, 40, .14);
        }

        .admin-topbar h1 {
            margin: 0;
            color: #2f211c;
            font-size: 1.75rem;
            font-weight: 700;
        }

        .admin-user {
            color: #6d5b53;
            font-weight: 600;
            white-space: nowrap;
        }

        .menu-card {
            display: block;
            height: 100%;
            padding: 22px;
            background: #fff;
            border: 1px solid rgba(79, 51, 40, .12);
            border-radius: 8px;
            color: #2f211c;
            text-decoration: none;
            box-shadow: 0 8px 24px rgba(79, 51, 40, .06);
        }

        .menu-card:hover,
        .menu-card:focus {
            color: #2f211c;
            border-color: rgba(79, 51, 40, .3);
            transform: translateY(-1px);
        }

        .menu-card-icon {
            width: 44px;
            height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 1.4rem;
        }

        .menu-card h4 {
            margin-bottom: 8px;
            font-size: 1.05rem;
            font-weight: 700;
        }

        .menu-card p {
            min-height: 48px;
            margin-bottom: 16px;
            color: #6d5b53;
        }

        .menu-card .go {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <aside class="admin-sidebar">
        <a class="admin-brand" href="<?= base_url('admin') ?>">Brasa Admin</a>
        <nav class="d-flex flex-column">
            <?php foreach ($links as $link): ?>
                <a class="admin-nav-link" href="<?= $link['url'] ?>">
                    <i class="<?= esc($link['icon']) ?>"></i>
                    <span><?= esc($link['label']) ?></span>
                </a>
            <?php endforeach; ?>
            <hr class="border-light opacity-25 my-3">
            <a class="admin-nav-link" href="<?= base_url('/') ?>">
                <i class="hgi-stroke hgi-home-01"></i>
                <span>Ver site</span>
            </a>
            <a class="admin-nav-link" href="<?= base_url('admin/logout') ?>">
                <i class="hgi-stroke hgi-logout-03"></i>
                <span>Sair</span>
            </a>
        </nav>
    </aside>

    <main class="admin-main">
        <header class="admin-topbar">
            <h1><?= esc($titulo) ?></h1>
            <div class="admin-user"><?= esc($adminNome) ?></div>
        </header>
