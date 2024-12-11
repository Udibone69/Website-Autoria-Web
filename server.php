<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $cep = isset($_POST['cep']) ? $_POST['cep'] : '';
    $profissao = isset($_POST['profissao']) ? $_POST['profissao'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';

    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
    echo "<p><strong>Estado:</strong> $estado</p>";
    echo "<p><strong>CEP:</strong> $cep</p>";
    echo "<p><strong>Profissão:</strong> $profissao</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Comentários:</strong> $comentarios</p>";
} else {
    echo "<p>Erro: O formulário não foi enviado corretamente.</p>";
}
?>
