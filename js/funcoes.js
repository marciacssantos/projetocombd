
 /*Formulário*/
 let enviar = () => alert('Sua mensagem foi enviada com sucesso!\n Aguarde, em breve retornaremos')
/*Menu*/ 

$(".menu").on("mouseover", function(){
    $(this).css("background-color", "tomato");
});
$(".menu").on("mouseout", function(){
    $(this).css("background-color", "red");
});

$(".itens").on("mouseover", function(){
    $(this).css("cursor", "pointer")
    $(this).css("color", "blue")
})

$(".itens").on("mouseout", function(){
    $(this).css("cursor", "inherit")
    $(this).css("color", "black")
})

/*Produtos*/
function exibir_categorias(categoria){
    // alert(categoria);
    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
         console.log(elementos[i].id)
         if(categoria == elementos[i].id)
             elementos[i].style = "display:block";
         else
             elementos[i].style = "display:none";
    }  
 }
 let exibir_todos = () => {
     let elementos = document.getElementsByClassName('box_produto');
 
     for(var i=0; i<elementos.length; i++){
         elementos[i].style = "display:block";
     }
 
 };
 
 let destaque = (imagem) => {
     console.log(imagem);
     if(imagem.width == 240)
         imagem.width = 120;
     else
         imagem.width = 240;
 };
$(".box_produto").on("mouseover", function(){
    $(this).css("border", "1px solid grey")
})

$(".box_produto").on("mouseout", function(){
    $(this).css("border", 0)
})
