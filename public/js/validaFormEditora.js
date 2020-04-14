   
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

            var id = document.getElementById("id");
            
            if (confirm('Tem certeza que deseja excluir este registro?')) {
                deletaEditora(id);
            }
            
        });
    }
    function validacao(campo){

        var mensagem = document.querySelector('#mensagem-validacao');

        mensagem.textContent = "";
        mensagem.classList.remove("alert-warning");

        if(campo.length == 0){
            
            mensagem.classList.add("alert-warning");

            mensagem.textContent = "Digite um Nome";
        }

    }
