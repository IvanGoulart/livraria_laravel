   
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


    var botaodeletar = document.querySelector('#deletar-editora');
    if(botaodeletar){

        botaodeletar.addEventListener('click', function(events){

            event.preventDefault();
            

            var td = document.getElementsByTagName('td')[0];

            id = td.textContent;

            var result = deletaEditora(id);

            console.log(result);   

            td.parentNode.classList.add("exluirTR");


            /*    var campo = document.getElementById('form-editora').value;

            console.log(campo);
            //Finção para validar
            validacao(campo);
            
            gravaEditora(campo);*/
        
        })
    }
