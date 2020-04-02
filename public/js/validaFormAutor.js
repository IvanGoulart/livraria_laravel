


    var botaoadicionar = document.querySelector('#adicionar-autor');

    botaoadicionar.addEventListener('click', function(events){

        event.preventDefault();

        var formAutor = document.querySelector("#form-autor");

        var campo = document.getElementById('form-autor').value;


        if(campo.length == 0){
            var mensagem = document.querySelector('#mensagem-validacao');

            mensagem.textContent = "Digite um Autor";
        }


        console.log(campo);
    })


