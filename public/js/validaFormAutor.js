
   
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
