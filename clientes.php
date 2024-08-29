<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
        .icon-btn img {
            width: 80px;
            height: 80px;
        }
        .card-body {
            display: none; /* Inicialmente escondido */
        }
        .card-body.show {
            display: block;
        }
        .upload-img {
            width: 80px;
            height: 80px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            margin-top: 10px;
            cursor: pointer;
        }
        .upload-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .upload-img input[type="file"] {
            display: none;
        }
        .table-container {
            margin-top: 20px;
            display: none; /* Escondido inicialmente */
        }
        .table-container.show {
            display: block;
        }
        .table-container img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        .btn-delete {
            background-color: red;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container main-content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <button class="icon-btn" id="toggleFormBtn">
                        <img src="https://img.icons8.com/?size=80&id=UUgYZvYwoZrF&format=png" alt="Ícone Cadastro">
                    </button>
                    <span>Cadastro de Clientes</span>
                    <button class="icon-btn" id="searchRecordsBtn">
                        <img src="https://img.icons8.com/?size=80&id=ObuWtTlsoTj6&format=png" alt="Ícone pesquisar">
                    </button>
                    <span>Pesquisar registros</span>
                </div>
            </div>
            <div class="card-body" id="clientForm">
                <form id="clientFormElement">
                    <input type="hidden" id="editIndex"> <!-- Índice do registro para edição -->
                    <div class="mb-3">
                        <label class="form-label">Tipo de Pessoa</label>
                        <div>
                            <input type="radio" id="pessoaFisica" name="tipoPessoa" value="Pessoa Física" required>
                            <label for="pessoaFisica">Pessoa Física</label>
                        </div>
                        <div>
                            <input type="radio" id="pessoaJuridica" name="tipoPessoa" value="Pessoa Jurídica" required>
                            <label for="pessoaJuridica">Pessoa Jurídica</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nomeCliente" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="nomeCliente" placeholder="Nome do Cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpfCnpj" class="form-label" id="cpfCnpjLabel">CPF</label>
                        <input type="text" class="form-control" id="cpfCnpj" placeholder="CPF" required>
                    </div>
                    <div class="mb-3">
                        <label for="cidadeCliente" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidadeCliente" placeholder="Cidade" required>
                    </div>
                    <div class="mb-3">
                        <label for="ufCliente" class="form-label">UF</label>
                        <input type="text" class="form-control" id="ufCliente" placeholder="UF" required>
                    </div>
                    <div class="mb-3">
                        <label for="cepCliente" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cepCliente" placeholder="CEP" required>
                    </div>
                    <div class="mb-3">
                        <label for="enderecoCliente" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="enderecoCliente" placeholder="Endereço" required>
                    </div>
                    <div class="mb-3">
                        <label for="logradouroCliente" class="form-label">Logradouro</label>
                        <input type="text" class="form-control" id="logradouroCliente" placeholder="Logradouro" required>
                    </div>
                    <div class="mb-3">
                        <label for="numeroCliente" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numeroCliente" placeholder="Número" required>
                    </div>
                    <h5>Foto do cliente</h5>
                    <div class="upload-img" id="uploadImgContainer">
                        <img src="https://img.icons8.com/?size=48&id=kDoeg22e5jUY&format=png" alt="Ícone de Foto do Cliente" class="upload-icon">
                        <input type="file" id="uploadImgInput" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveBtn">Salvar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </form>
            </div>
        </div>

        <!-- Tabela para exibir os registros -->
        <div class="table-container" id="recordsTableContainer">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tipo de Pessoa</th>
                        <th>Nome do Cliente</th>
                        <th>CPF/CNPJ</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Logradouro</th>
                        <th>Número</th>
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="recordsTableBody">
                    <!-- Linhas da tabela serão adicionadas aqui -->
                </tbody>
            </table>
            <div id="paginationControls">
                <button id="prevPageBtn" class="btn btn-secondary">Página Anterior</button>
                <span id="pageInfo">Página 1</span>
                <button id="nextPageBtn" class="btn btn-secondary">Próxima Página</button>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        let editIndex = -1;
        let currentPage = 1;
        const recordsPerPage = 6; // Número de registros por página

        // Toggle para o formulário de cadastro de clientes
        document.getElementById('toggleFormBtn').addEventListener('click', function() {
            const formBody = document.getElementById('clientForm');
            formBody.classList.toggle('show');
            document.getElementById('recordsTableContainer').classList.remove('show'); // Garante que a tabela esteja oculta
            if (formBody.classList.contains('show')) {
                resetForm();
                document.getElementById('saveBtn').disabled = false; // Ativa o botão de salvar
            }
        });

        // Evento para o upload de imagem
        document.getElementById('uploadImgContainer').addEventListener('click', function() {
            document.getElementById('uploadImgInput').click();
        });

        document.getElementById('uploadImgInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.querySelector('#uploadImgContainer img');
                    img.src = e.target.result;
                    document.getElementById('uploadImgInput').dataset.imgData = e.target.result;
                    validateForm(); // Valida o formulário para habilitar o botão de salvar
                }
                reader.readAsDataURL(file);
            }
        });

        // Atualiza o formulário com base na seleção do tipo de pessoa
        document.querySelectorAll('input[name="tipoPessoa"]').forEach((radio) => {
            radio.addEventListener('change', function() {
                const isPessoaJuridica = document.getElementById('pessoaJuridica').checked;
                document.getElementById('cpfCnpjLabel').textContent = isPessoaJuridica ? 'CNPJ' : 'CPF';
                document.getElementById('cpfCnpj').placeholder = isPessoaJuridica ? 'CNPJ' : 'CPF';
                document.getElementById('cpfCnpj').value = ''; // Limpa o valor do campo ao trocar o tipo
            });
        });

        // Função para buscar e exibir registros com paginação
        function fetchRegistros() {
            const registros = JSON.parse(localStorage.getItem('registros')) || [];
            const recordsTableBody = document.getElementById('recordsTableBody');
            const totalPages = Math.ceil(registros.length / recordsPerPage);
            
            // Atualiza informações de página
            document.getElementById('pageInfo').textContent = `Página ${currentPage} de ${totalPages}`;
            document.getElementById('prevPageBtn').disabled = currentPage === 1;
            document.getElementById('nextPageBtn').disabled = currentPage === totalPages;
            
            recordsTableBody.innerHTML = ''; // Limpa a tabela

            const startIndex = (currentPage - 1) * recordsPerPage;
            const endIndex = Math.min(startIndex + recordsPerPage, registros.length);
            
            for (let i = startIndex; i < endIndex; i++) {
                const registro = registros[i];
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${registro.tipoPessoa}</td>
                    <td>${registro.nome}</td>
                    <td>${registro.cpfCnpj}</td>
                    <td>${registro.cidade}</td>
                    <td>${registro.uf}</td>
                    <td>${registro.cep}</td>
                    <td>${registro.endereco}</td>
                    <td>${registro.logradouro}</td>
                    <td>${registro.numero}</td>
                    <td><img src="${registro.foto}" alt="Foto do Cliente"></td>
                    <td>
                        <button class="btn-delete" onclick="deleteRegistro(${i})">Excluir</button>
                    </td>
                `;
                row.addEventListener('click', () => editRegistro(i));
                recordsTableBody.appendChild(row);
            }
        }

        function goToPreviousPage() {
            if (currentPage > 1) {
                currentPage--;
                fetchRegistros();
            }
        }

        function goToNextPage() {
            const totalPages = Math.ceil((JSON.parse(localStorage.getItem('registros')) || []).length / recordsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                fetchRegistros();
            }
        }

        // Adiciona ouvintes de eventos aos botões de navegação
        document.getElementById('prevPageBtn').addEventListener('click', goToPreviousPage);
        document.getElementById('nextPageBtn').addEventListener('click', goToNextPage);

        // Função para atualizar um registro
        function updateRegistro() {
            const registros = JSON.parse(localStorage.getItem('registros')) || [];
            
            // Obtém os dados do formulário
            const tipoPessoa = document.querySelector('input[name="tipoPessoa"]:checked').value;
            const nome = document.getElementById('nomeCliente').value;
            const cpfCnpj = document.getElementById('cpfCnpj').value;
            const cidade = document.getElementById('cidadeCliente').value;
            const uf = document.getElementById('ufCliente').value;
            const cep = document.getElementById('cepCliente').value;
            const endereco = document.getElementById('enderecoCliente').value;
            const logradouro = document.getElementById('logradouroCliente').value;
            const numero = document.getElementById('numeroCliente').value;
            const foto = document.getElementById('uploadImgInput').dataset.imgData || '';

            // Atualiza o registro
            registros[editIndex] = {
                tipoPessoa,
                nome,
                cpfCnpj,
                cidade,
                uf,
                cep,
                endereco,
                logradouro,
                numero,
                foto
            };

            // Armazena os registros atualizados no localStorage
            localStorage.setItem('registros', JSON.stringify(registros));

            // Limpa o formulário
            resetForm();

            // Recarrega os registros
            fetchRegistros();
        }

        // Função para excluir um registro
        function deleteRegistro(index) {
            if (confirm('Tem certeza de que deseja excluir este registro?')) {
                const registros = JSON.parse(localStorage.getItem('registros')) || [];
                registros.splice(index, 1); // Remove o registro selecionado

                // Armazena os registros atualizados no localStorage
                localStorage.setItem('registros', JSON.stringify(registros));

                // Recarrega os registros
                fetchRegistros();
            }
        }

        // Função para resetar o formulário
        function resetForm() {
            document.getElementById('clientFormElement').reset();
            document.querySelector('#uploadImgContainer img').src = 'https://img.icons8.com/?size=48&id=kDoeg22e5jUY&format=png'; // Ícone padrão
            delete document.getElementById('uploadImgInput').dataset.imgData;
            editIndex = -1; // Reseta o índice de edição
            document.getElementById('saveBtn').disabled = true; // Desabilita o botão de salvar
        }

        // Evento para salvar o formulário
        document.getElementById('clientFormElement').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
            
            if (editIndex === -1) {
                // Adiciona novo registro
                const tipoPessoa = document.querySelector('input[name="tipoPessoa"]:checked').value;
                const nome = document.getElementById('nomeCliente').value;
                const cpfCnpj = document.getElementById('cpfCnpj').value;
                const cidade = document.getElementById('cidadeCliente').value;
                const uf = document.getElementById('ufCliente').value;
                const cep = document.getElementById('cepCliente').value;
                const endereco = document.getElementById('enderecoCliente').value;
                const logradouro = document.getElementById('logradouroCliente').value;
                const numero = document.getElementById('numeroCliente').value;
                const foto = document.getElementById('uploadImgInput').dataset.imgData || '';

                // Cria um novo registro
                const novoRegistro = {
                    tipoPessoa,
                    nome,
                    cpfCnpj,
                    cidade,
                    uf,
                    cep,
                    endereco,
                    logradouro,
                    numero,
                    foto
                };

                // Obtém registros atuais do localStorage
                const registros = JSON.parse(localStorage.getItem('registros')) || [];
                registros.push(novoRegistro);

                // Armazena os registros atualizados no localStorage
                localStorage.setItem('registros', JSON.stringify(registros));

                // Limpa o formulário
                resetForm();
            } else {
                // Atualiza o registro existente
                updateRegistro();
            }

            // Recarrega os registros
            fetchRegistros();
        });

        // Evento para mostrar/ocultar a tabela de registros
        document.getElementById('searchRecordsBtn').addEventListener('click', function() {
            const tableContainer = document.getElementById('recordsTableContainer');
            tableContainer.classList.toggle('show');
            if (tableContainer.classList.contains('show')) {
                fetchRegistros();
            }
            // Esconde o formulário de cadastro
            document.getElementById('clientForm').classList.remove('show');
        });

        // Função para validar o formulário e habilitar/desabilitar o botão de salvar
        function validateForm() {
            const form = document.getElementById('clientFormElement');
            const isValid = form.checkValidity();
            document.getElementById('saveBtn').disabled = !isValid;
        }

        // Adiciona ouvintes de eventos aos campos do formulário para validação em tempo real
        document.getElementById('clientFormElement').addEventListener('input', validateForm);

        // Inicializa o estado do botão de salvar com base no formulário
        validateForm();

        // Inicializa a visualização dos registros
        fetchRegistros();
    </script>
</body>
</html>
