//Selecionando os elementos desejados pelas suas classes
const nomeSite = document.querySelector('.cabecalho__container-id-nome');
const nomeDocumentario = document.querySelector('.first_section_documentario_title');

//Função para aplicar efeito digitado nos textos selecionados
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
