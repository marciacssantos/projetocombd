
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

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Nossos Produtos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
        
    <?php
        include_once("menu.html");
    ?>
        
    <header>
        <h1>Produtos</h1>
    </header>
    

    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li class="itens" onclick="exibir_todos()">Todos (3)</li>
            <li class="itens" onclick="exibir_categorias('geladeira')">Geladeiras (3)</li>
            <li class="itens" onclick="exibir_categorias('fogao')">Fogões (2)</li>
            <li class="itens" onclick="exibir_categorias('microondas')">Microondas (3)</li>
            <li class="itens" onclick="exibir_categorias('lavaRoupa')">Lavadoura de roupas (2)</li>
            <li class="itens" onclick="exibir_categorias('lavaLouca')">Lava-loucas (2)</li>
        </ul>
    </section>

    <section class="produtos">
        
        <?php
             $sql = "select * from produtos";
             $result = $conn -> query($sql);
         
             if($result -> num_rows > 0){
                 while($rows = $result ->fetch_assoc()){
                     

        ?>

            <div class="box_produto" style="display:block" id="<?php echo $rows["categoria"];?>" >
                <img src="<?php echo $rows["imagem"];?>" width="120px" onclick="destaque(this)">
                <br>
                <p class="descricao"><?php echo $rows["descricao"];?></p>
                <p class="descricao"><strike>R$ <?php echo $rows["preco"];?></strike></p>
                <p class="preco">R$ <?php echo $rows["preco_venda"];?></p>
            </div>

        <?php
                 }
         
             }else{
                 echo "Nenhum produto cadastrado";
             }

        ?>
        
                
      
    </section>
    
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
