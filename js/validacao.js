const cadastrarMensagemUsuario = document.getElementById("form");

if(cadastrarMensagemUsuario){
    cadastrarMensagemUsuario.addEventListener("submit", async (e) =>{
        e.preventDefault();
        const dadosFormulario = new FormData(cadastrarMensagemUsuario);

        const dados = await fetch("salva_mensagem.php",{
            method: "POST",
            body: dadosFormulario
        });

        const resposta = await dados.json();
        console.log(resposta)

        if(resposta['status']){
            Swal.fire({
                icon: 'success',
                title: 'Dados válidos',
                text: resposta['msg'],
            });
            cadastrarMensagemUsuario.reset();


        }else{
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: resposta['msg'],
            });
        }
    });   
}