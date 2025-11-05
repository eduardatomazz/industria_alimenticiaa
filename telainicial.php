<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Tarefas</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>

<div class="cabecalho">
    <h3>Sistema de Gerenciamento de Tarefas</h3>
</div>

<nav class="navbar">
    <div class="container">
        <a class="nav-link" href="cadastrar_usuarios.php">Cadastro de Usuários</a>
        <a class="nav-link" href="index.php">Cadastro de Tarefas</a>
        <a class="nav-link" href="gerenciar_tarefas.php">Gerenciar Tarefas</a>
    </div>
</nav>
<div class="GT">
     <h3>Cadastro de Tarefas</h3>
</div>

<div class="container2">
    <form action="cadastrar_tarefa.php" method="POST">
        <div class="item3">
            <label>Descrição:</label>
            <input type="text" name="descricao" class="form-control" required>
        </div>
        <div class="item3">
            <label>Setor:</label>
            <input type="text" name="setor" class="form-control">
        </div>
        <div class="item3">
            <label>Usuário:</label>
        </div>
        <div class="item3">
            <label>Prioridade:</label>
            <select name="prioridade" class="prioridade">
                <option>Baixa</option>
                <option>Média</option>
                <option>Alta</option>
            </select>
        </div>
        <button type="submit" class="btnc">Cadastrar</button>
    </form>
</div>




</body>
</html>
