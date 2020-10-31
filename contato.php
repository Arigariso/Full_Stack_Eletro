<?php
include('conexao.php')
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <main>
        <?php
        include('menu.html');
        ?>

        <header>
            <h1 id="titulo_pagina">Contatos</h1>
        </header>

        <hr>

        <section class="contatos">
            <div class="meio_ct">
                <img src="./imagens/email.png">contato@fullstackeletro.com
            </div>

            <div class="meio_ct">
                <img src="./imagens/whatsapp.png">(011) 9999-9999
            </div>
        </section>

        <section class="formulario">
            <form method="post" action="">
                <h4>Nome:</h4>
                <input type="text" name="nome" placeholder="Digite seu nome completo" style="width: 500px;">

                <h4>Mensagem:</h4>
                <textarea name="msg" style="width: 500px;" placeholder="Deixe sua mensagem"></textarea>
                <input type="submit" value="Enviar">
            </form>

            <br><br><br>
            <?php
            $sql = "select * from comentarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo "Data: ", $rows['data'], "<br>";
                    echo "Nome: ", $rows['nome'], "<br>";
                    echo "Mensagem: ", $rows['msg'], "<br>";
                    //header("refresh:5;");
                }
            } else {
                echo "Nenhum comentário";
            }
            ?>

        </section>

        <br><br><br><br><br>

        <hr>

        <footer id="rodape">
            <p><b>Formas de Pagamento:</b></p>
            <img src="./imagens/formas de pagamento.png" alt="Formas de Pagamento">
            <p>&copy;Recode Pro</p>
        </footer>
    </main>
</body>

</html>