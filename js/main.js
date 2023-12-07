const nomeSite = document.querySelector('.cabecalho__container-id-nome');
const nomeDocumentario = document.querySelector('.first_section_documentario_title');
const cartilhaHqTitulo = document.querySelector('.first_section_cartilha__hq_title');

function aplicarEfeitoDigitado(textoASerDigitado){
    const textoTitulo = textoASerDigitado.innerHTML.split('');
    textoASerDigitado.innerHTML = ' ';

    textoTitulo.forEach(function(letra, i){    
    setTimeout(function(){
        textoASerDigitado.innerHTML += letra;
    }, 75 * i)

    });
}

//Aplicando o efeito de digitação no título da seção principal da página "Home"
aplicarEfeitoDigitado(nomeSite);
aplicarEfeitoDigitado(nomeDocumentario);
aplicarEfeitoDigitado(cartilhaHqTitulo);