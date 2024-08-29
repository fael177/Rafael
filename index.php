<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilização personalizada */
        body {
            padding-top: 70px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar {
            background: linear-gradient(45deg, #343a40, #007bff);
            border-bottom: 3px solid #ffc107;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #ffc107 !important;
            text-transform: uppercase;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            color: #fff !important;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
        }

        .dropdown-menu {
            background-color: #343a40;
            border: none;
            border-radius: 0;
        }

        .dropdown-item {
            color: #fff !important;
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #007bff;
            color: #fff;
        }

        /* Estilo do conteúdo principal */
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <!-- Conteúdo da página -->
        <h1>Bem-vindo ao Sistema Financeiro</h1>
        <p>Escolha uma opção do menu para começar.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
