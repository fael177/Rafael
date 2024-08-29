<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .main-content {
            padding-top: 70px; /* Adjust padding to account for fixed navbar */
        }
    </style>
</head>
<body>
    <!-- Menu de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema Financeiro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Menu Cadastro -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarCadastro" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarCadastro">
                            <li><a class="dropdown-item" href="clientes.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                            <li><a class="dropdown-item" href="#">Funcionários</a></li>
                        </ul>
                    </li>

                    <!-- Menu Produtos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarProdutos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarProdutos">
                            <li><a class="dropdown-item" href="#">Cadastrar Produtos</a></li>
                            <li><a class="dropdown-item" href="#">Consultar Produtos</a></li>
                        </ul>
                    </li>

                    <!-- Menu Estoque -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarEstoque" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Estoque
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarEstoque">
                            <li><a class="dropdown-item" href="#">Entrada de Estoque</a></li>
                            <li><a class="dropdown-item" href="#">Saída de Estoque</a></li>
                            <li><a class="dropdown-item" href="#">Consultar Estoque</a></li>
                        </ul>
                    </li>

                    <!-- Menu Posto de Vendas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPostoVendas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Posto de Vendas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPostoVendas">
                            <li><a class="dropdown-item" href="#">Abertura de Caixa</a></li>
                            <li><a class="dropdown-item" href="#">Fechamento de Caixa</a></li>
                            <li><a class="dropdown-item" href="#">Vendas</a></li>
                            <li><a class="dropdown-item" href="#">Relatórios de Vendas</a></li>
                        </ul>
                    </li>

                    <!-- Menu CTE -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarCTE" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CTE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarCTE">
                            <li><a class="dropdown-item" href="#">Emitir CTE</a></li>
                            <li><a class="dropdown-item" href="#">Consultar CTE</a></li>
                        </ul>
                    </li>

                    <!-- Menu MDFE -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarMDFE" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            MDFE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarMDFE">
                            <li><a class="dropdown-item" href="#">Emitir MDFE</a></li>
                            <li><a class="dropdown-item" href="#">Consultar MDFE</a></li>
                        </ul>
                    </li>

                    <!-- Menu NFE -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNFE" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NFE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarNFE">
                            <li><a class="dropdown-item" href="#">Emitir NFE</a></li>
                            <li><a class="dropdown-item" href="#">Consultar NFE</a></li>
                        </ul>
                    </li>

                    <!-- Menu Financeiro -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarFinanceiro" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Financeiro
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarFinanceiro">
                            <li><a class="dropdown-item" href="#">Contas a Pagar</a></li>
                            <li><a class="dropdown-item" href="#">Contas a Receber</a></li>
                            <li><a class="dropdown-item" href="#">Fluxo de Caixa</a></li>
                        </ul>
                    </li>

                    <!-- Menu Relatórios -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarRelatorios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarRelatorios">
                            <li><a class="dropdown-item" href="#">Relatórios de Vendas</a></li>
                            <li><a class="dropdown-item" href="#">Relatórios Financeiros</a></li>
                        </ul>
                    </li>

                    <!-- Menu Auditoria -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAuditoria" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Auditoria
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarAuditoria">
                            <li><a class="dropdown-item" href="#">Histórico de Alterações</a></li>
                            <li><a class="dropdown-item" href="#">Logs de Sistema</a></li>
                        </ul>
                    </li>

                    <!-- Menu Configurações -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarConfiguracoes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Configurações
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarConfiguracoes">
                            <li><a class="dropdown-item" href="#">Configurações Gerais</a></li>
                            <li><a class="dropdown-item" href="#">Configurações de Usuário</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
