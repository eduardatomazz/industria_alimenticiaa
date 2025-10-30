<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Tarefas</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4">
    <h3>Lista de Tarefas</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Setor</th>
                <th>Usuário</th>
                <th>Prioridade</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT t.*, u.nome AS usuario FROM tarefas t
                    LEFT JOIN usuarios u ON t.usuario_id = u.id";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['descricao']}</td>
                        <td>{$row['setor']}</td>
                        <td>{$row['usuario']}</td>
                        <td>{$row['prioridade']}</td>
                        <td>{$row['data_criacao']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
