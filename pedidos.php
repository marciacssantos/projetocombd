
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";
//cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

//verifica a conexão
    if (!$conn){
        die("A conexão do BD falhou" . mysqli_connect_error()) ;
    }

if(isset($_POST['nome']) && isset($_POST['produto']) && isset($_POST['quantidade']) && isset($_POST['endereco']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $endereco = $_POST['endereco'];
    $msg = $_POST['msg'];

    $sql = "insert into pedidos  (nome, produto, quantidade, endereco, msg) values ('$nome','$produto', '$quantidade', '$endereco', '$msg')";
    $result = $conn -> query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Pedidos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <?php
        include_once("menu.html");
    ?>
    <center>
        <form method="POST" action="">
            <h4>Nome:</h4>
            <input type="text" style="width: 400px" name="nome">
            <h4>Produto:</h4>
            <input type="text" style="width: 400px" name="produto">
            <h4>Quantidade:</h4>
            <input type="number" style="width: 400px" name="quantidade">
            <h4>Endereço:</h4>
            <input type="text" style="width: 400px" name="endereco">
            <h4>Mensagem: </h4>
            <textarea style="width:400px;" name="msg"></textarea><br>
            <input type="submit" value="Enviar" onclick="enviar()">  
        </form>
    </center>
   
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>


    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formas_de_pagamento.png"  alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
    </footer>
    <script src="./js/funcoes.js"></script>
</body>
</html>