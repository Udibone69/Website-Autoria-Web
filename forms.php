<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="formulario.php">Formulário</a></li>
            <li><a href="areadodev.html">Área dos desenvolvedores</a></li>
            <li><a href="footer.html">Rodapé</a></li>
        </ul>
    </nav>
</header>

<h1>Formulário</h1>

<form action="server.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone"><br><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento"><br><br>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco"><br><br>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade"><br><br>

    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="estado"><br><br>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep"><br><br>

    <label for="profissao">Profissão:</label>
    <input type="text" id="profissao" name="profissao"><br><br>

    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outros">Outros</option>
    </select><br><br>

    <label for="comentarios">Comentários:</label><br>
    <textarea id="comentarios" name="comentarios"></textarea><br><br>

    <button type="submit">Enviar</button>
    <button type="reset">Resetar</button>
</form>

<footer>
   <!-- Conteúdo do rodapé -->
   ...
</footer>

</body>
</html>
