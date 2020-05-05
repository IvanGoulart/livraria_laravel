   
    var botaoadicionar = document.querySelector('#adicionar-livro');
    if(botaoadicionar){

        botaoadicionar.addEventListener('click', function(events){

            event.preventDefault();

            var campo = document.getElementById('form-nome').value;
            var editora = document.getElementById('form-editora').value;
            var autor = document.getElementById('form-autor').value;

            console.log(campo, editora, autor);
            //Finção para validar
            validacao(campo);
            
            gravaLivro(campo, autor, editora);
        
        })
    }
   

