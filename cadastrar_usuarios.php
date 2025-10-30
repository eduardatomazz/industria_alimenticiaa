<?php
include('db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sql = "INSERT INTO usuarios (nome) VALUES ('$nome')";
    if ($conn->query($sql)) {
        echo "<script>alert('Usuário cadastrado!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel ="stylesheet" href="style.css">
   
</head>
<body>
<div class="container mt-4">
    <h3>Cadastro de Usuário</h3>
    <form method="POST">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
</body>
</html>
