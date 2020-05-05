function validacao(campo){

    var mensagem = document.querySelector('#mensagem-validacao');

    mensagem.textContent = "";
    mensagem.classList.remove("alert-warning");

    if(campo.length == 0){
        
        mensagem.classList.add("alert-warning");

        mensagem.textContent = "Digite um Nome";
    }

}