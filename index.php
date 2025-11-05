<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel ="stylesheet" href="style.css">

</head>
<header>

</header>

<body >
    <header>
       
    </header>
    <main>
        <section>
            <section id="entrar">
                <div class="laranja">
                    <div class="inf_laranja">
                        <?php

                            include("db.php");
                            $msg = "";
                            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                $email =  $_POST['email'] ?? "";
                                $pass = $_POST['senha'] ?? "";

                                $stmt = $mysqli->prepare("SELECT id_usuario, nome, email, senha FROM usuario WHERE email=? AND senha=?");
                                $stmt->bind_param("ss", $email, $pass);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $dados = $result->fetch_assoc();
                                $stmt->close();


                               if ($dados) {
                                    $_SESSION["id_usuario"] = $dados["id_usuario"];
                                    $_SESSION["usuario"] = $dados["usuario"];
                                    header("Location: telainicial.php");
                                    exit;
                                } else {
                                    echo "<div>
                                    <p>Usuário ou senha incorretos!</p>
                                    </div>";
                                } 

                            }
                        ?>

                        <div>
                        <h3>CONECTE-SE AGORA</h3>
                            <form id="formLogin" method="POST">
                                <label for="usuario">Email:</label><br>
                                <input type="email" id="email" name="email" required>
                                <div class="error" id="erroUsuario"></div>
                                
                                <label for="senha">Senha:</label><br>
                                <input type="password" id="senha" name="senha" required>
                                <div class="error" id="erroSenha"></div><br><br>
                                
                                <input class="botao3" type="submit" name="submit" value="Login" required>                             
                            </form>
                        </div>
    
                    </div>
                    
                </div>
            </section>
        </section>
    </main>    
</body>
</html>