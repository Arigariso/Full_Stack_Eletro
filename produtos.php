<?php
include('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>

</head>

<body>

    <main>

        <?php
        include('menu.html');
        ?>

        <header>
            <h1 id="titulo_pagina">Produtos</h1>
        </header>

        <hr>

        <section class="categorias" id="lista">
            <h3 id="titulo_categoria">Categorias</h3>
            <ul>
                <li onmouseover="mouseLista(this);" onclick="exibir_todos();">Todos(12)</li>
                <li onmouseover="mouseLista(this);" onclick="exibir_categoria('geladeira');">Geladeiras(3)</li>
                <li onmouseover="mouseLista(this);" onclick="exibir_categoria('fogão');">Fogões(2)</li>
                <li onmouseover="mouseLista(this);" onclick="exibir_categoria('microondas');">Microondas(3)</li>
                <li onmouseover="mouseLista(this);" onclick="exibir_categoria('maquinadelavar');">Máquina de Lavar(2)
                </li>
                <li onmouseover="mouseLista(this);" onclick="exibir_categoria('lavalouca');">Lava Louças(2)</li>
            </ul>
        </section>


        <section class="produtos">

            <?php

            $sql = "select *from produto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
            ?>

                    <div class="box_produto" id="geladeira<?php echo $rows["categoria"]; ?>">
                        <img src="<?php echo $rows["imagem"]; ?>" width="120px" onmouseover="mouseOver(this);" onclick="destaque(this);">
                        <br>
                        <p><?php echo $rows["descrição"]; ?></p>
                        <hr>
                        <p id="preço_antes">R$ <?php echo $rows["preco"]; ?></p>
                        <p id="preço_atual">R$ <?php echo $rows["precofinal"]; ?></p>
                        <br>
                        <a href="<?php echo $rows["link"]; ?>">
                            <button style="cursor:pointer" type="submit">Comprar</button></a>
                    </div>

            <?php
                }
            } else {
                echo ("Nenhum produto cadastrado");
            }
            ?>



        </section>

        <hr>

        <footer id="rodape">
            <p><b>Formas de Pagamento:</b></p>
            <img src="./imagens/formas de pagamento.png" alt="Formas de Pagamento">
            <p>&copy;Recode Pro</p>
        </footer>
    </main>
</body>

</html>