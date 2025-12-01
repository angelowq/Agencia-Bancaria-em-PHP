<html>
    <head>
        <meta charset="utf=8"/>
        <title>Agência Bancária</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Banco PSGD |</th>
                <th>Número: 0428 |</th>
                <th>Endereço da Agência: Av. Alameda dos Anjos, 656, Centro, Anápolis - GO</th>
            </tr>
        </table>
        <h1>Cadastro de Clientes</h1>
        <p>Preencha o formulário abaixo para cadastrar um novo cliente.</p>
        <form method="post">
            <fieldset>
                <legend>Dados do Cliente</legend>
                <label>
                    Nome:
                    <?php if($tem_erros && isset($erros_validacao['nome']))  : ?>
                        <span class="erro">
                            <?php echo $erros_validacao['nome'];?>
                        </span>
                    <?php endif; ?>
                    <input type="text" name="nome"/><br>
                </label>
                <label>
                    CPF:
                    <?php if($tem_erros && isset($erros_validacao['cpf']))  : ?>
                        <span class="erro">
                            <?php echo $erros_validacao['cpf'];?>
                        </span>
                    <?php endif; ?>
                    <input type="text" name="cpf"/><br>
                </label>
                <label>
                    Endereço:
                    <input type="text" name="endereco"/><br>
                </label>
                <label>
                    <input type="submit" value="Cadastrar"/><br>
                </label>
            </fieldset>
        </form>
        <h2>Clientes Cadastrados</h2>
        <p>Pesquise na barra abaixo para encontrar um cliente específico.</p>
        <form method="GET" action="dadoscliente.php">
            <label>Pesquisar:</label>
            <input type="text" name="busca" placeholder="Nome ou CPF...">
            <button type="submit">Buscar</button>
    
            <?php if (isset($_GET['busca'])): ?>
                <a href="dadoscliente.php">Limpar</a>
            <?php endif; ?>
        </form><br>
        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Número da Conta</th>
                <th>Número da Agência</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($lista_dados)) : ?>
            <?php foreach ($lista_dados as $dado) : ?>
                <tr>
                <td><?php echo htmlspecialchars($dado['nome']); ?></td>
                <td><?php echo htmlspecialchars($dado['cpf']); ?></td>
                <td><?php echo htmlspecialchars($dado['endereco']); ?></td>
                <td><?php echo htmlspecialchars($dado['numeroconta']); ?></td>
                <td><?php echo htmlspecialchars($dado['numeroagencia']); ?></td>
                <td>
                    <form action="remover.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($dado['id']); ?>">
                    <button type="submit">Remover</button>
                    </form>
                    <a href="operacoes.php?id=<?php echo urlencode($dado['id']); ?>">
                    <button type="button">Acessar Conta 💰</button>
                    </a>
                </td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </body>
</html>