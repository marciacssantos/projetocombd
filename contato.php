
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

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios  (nome, mensagem) values ('$nome','$msg')";
    $result = $conn -> query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Contato</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <?php
        include_once("menu.html");
    ?>
 
    <h2>Contato</h2>
    <hr>
    <table borde=0 width="100%" cellpadding="20">
        <tr>
            <td width="50%" align="center">
                <img src="./imagens/email.png" width="40px">
                <font face="Arial" size="4">contato@fullstackeletro.com</font>
            </td>

            <td width="50%" align="center">
                <img src="./imagens/whatsapp.png" width="40px">
                <font face="Arial" size="4">(11)99999-9999</font>
            </td>
        </tr>
    </table>

    <form method="POST" action="">
        <h4>Nome:</h4>
        <input type="text" style="width: 400px" name="nome">
        <h4>Mensagem: </h4>
        <textarea style="width:400px;" name="msg"></textarea><br>
        <input type="submit" value="Enviar" onclick="enviar()">        
    </form>
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
