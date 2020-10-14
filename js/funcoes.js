function exibir_categoria(categoria) {
    let elementos = document.getElementsByClassName('box_produto');

    for (var i = 0; i < elementos.length; i++) {
        /* console.log(elementos[i].id); */
        if (categoria == elementos[i].id)
            elementos[i].style = "display: inline-block";
        else
            elementos[i].style = "display:none";
    }
}
/* arrow function */

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');

    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display: inline-block";
    }
}

let destaque = (imagem) => {
    console.log(imagem);
   if (imagem.width == 120) {
       imagem.width = 240;
   }
   else if (imagem.width == 240) {
       imagem.width = 120;
   }
   else {
       imagem.width = 120;
   }
}
