   
    var botaoadicionar = document.querySelector('#adicionar-editora');
    if(botaoadicionar){

        botaoadicionar.addEventListener('click', function(events){

            event.preventDefault();

            var campo = document.getElementById('form-editora').value;

            console.log(campo);
            //Finção para validar
            validacao(campo);
            
            gravaEditora(campo);
        
        })
    }


