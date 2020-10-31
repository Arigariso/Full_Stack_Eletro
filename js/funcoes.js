function exibir_categoria(categoria) {
    let elementos = document.getElementsByClassName('box_produto')

    for (var i = 0; i < elementos.length; i++) {
        if (categoria == elementos[i].id) 
            elementos[i].style = "display: inline-block;"
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

let mouseOver = () => {
  
    let elementos = document.getElementsByTagName('img');

    for (var i = 0; i < elementos.length; i++) {      
        elementos[i].style = "cursor:pointer";
    }  
}

let mouseLista = () => {
  
    let elementos = document.getElementsByTagName('li');

    for (var i = 0; i < elementos.length; i++) {      
        elementos[i].style = "cursor: pointer";
    } 
}

function destaque(imagem) {
    /* console.log(imagem); */
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



