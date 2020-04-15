
   
    var botaoadicionar = document.querySelector('#adicionar-autor');
    if(botaoadicionar){

        botaoadicionar.addEventListener('click', function(events){

            event.preventDefault();

            var formAutor = document.querySelector("#form-autor");

            var campo = document.getElementById('form-autor').value;

            //Finção para validar
            validacao(campo);
            
            gravaAutor(campo);
        
        })
    }
 
    function validacao(campo){

        var mensagem = document.querySelector('#mensagem-validacao');

        mensagem.textContent = "";
        mensagem.classList.remove("alert-warning");

        if(campo.length == 0){
            
            mensagem.classList.add("alert-warning");

            mensagem.textContent = "Digite um Autor";
        }

    }
