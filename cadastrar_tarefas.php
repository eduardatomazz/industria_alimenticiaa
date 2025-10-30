<?php
include('db.php');


$descricao = $_POST['descricao'];
$nome_setor = $_POST['setor'];
$id_usuario = $_POST['id_usuario'];
$prioridade = $_POST['prioridade'];


$sql = "INSERT INTO tarefas (descricao, setor, id_usuario, prioridade)
        VALUES ('$descricao', '$nome_setor', '$id_usuario', '$prioridade')";


if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Tarefa cadastrada com sucesso!'); window.location='index.php';</script>";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>