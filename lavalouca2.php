<?php
$servidor = "localhost";
$login = "root";
$senha = "";
$bancodados = "fseletro";
$conn = mysqli_connect($servidor, $login, $senha, $bancodados);

if (!$conn) {
    die("Falha na conexão com o BD " . mysqli_connect_error());
}

if (
    isset($_POST['nome']) && isset($_POST['endereco'])
    && isset($_POST['cidade']) && isset($_POST['produto']) && isset($_POST['quantidade'])
) {

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    $sql = "insert into pedido (nome, endereco, cidade, produto, quantidade) 
        values ('$nome', '$endereco', '$cidade', '$produto', '$quantidade')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pedido - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>

</head>

<body>

    <main>

        <?php
        include('menu.html');
        ?>

        <header>
            <h1 id="titulo_pagina">Pedido</h1>
        </header>

        <hr>

        <section class="pedido">

            <div class="box_pedido">
                <img src="./imagens/lavalouca2.jpg" id="item">
                <h2>Lava-louças 8 Serviços BrastempAtive!</h2>
                <p>Descrição: BLF08AB</p>
                <p>Valor: R$ 1619.00</p>
                <br><br>
            </div>


            <div class="box_formulario">
                <form method="post" action="">

                    <p>Informe a cor que deseja:
                        <input type="radio" name="produto" value="lavalouca2">
                        <label for="lavalouca2">Branca</label>
                        <input type="radio" name="produto" value="lavalouca2">
                        <label for="lavalouca2">Preta</label><br><br></p>

                    <h4>Quantidade:</h4>
                    <input type="number" name="quantidade" placeholder="Digite a quantidade" style="width: 100px; height: 25px;">

                    <h4>Nome do comprador:</h4>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" style="width: 300px;">

                    <h4>Endereço para entrega:</h4>
                    <input type="text" name="endereco" placeholder="Digite seu nome completo" style="width: 300px;">

                    <p>Cidade:</p>
                    <select name="cidade">
                        <option value="vazio"> </option>
                        <option value="Rio">Rio de Janeiro</option>
                        <option value="Sao Paulo">Sao Paulo</option>
                        <option value="Belo Horizonte">Belo Horizonte</option>
                    </select>

                    <button type="submit" name="enviar">Enviar
                        <Button input type="reset" value="Reset">Reset
                        </Button></Button><br><br>
                </form>
            </div>
            <div class="resposta">
                <?php
                $sql = "select * from pedido";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                        echo "Data: ", $rows['data'], "<br>";
                        echo "Nome: ", $rows['nome'], "<br>";
                        echo "Endereço: ", $rows['endereco'], "<br>";
                        echo "Cidade: ", $rows['cidade'], "<br>";
                        echo "Produto: ", $rows['produto'], "<br>";
                        echo "Quantidade: ", $rows['quantidade'], "<br>";
                        echo "Valor R$ 1619.00", "<br>";

                        //header("refresh:5;");
                    }
                } else {
                    echo "Nenhum pedido";
                }
                ?>
            </div>

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