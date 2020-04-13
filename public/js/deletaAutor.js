

function deletaAutor(id){

    console.log(id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: "/deleta-autor",
        type: "POST",
        dataType: 'json',
        data: {
            data: { id: id},
        },
        success: function(result){

            if(result.success == true){

                var mensagem = document.querySelector('.mensagem-deletar');

                mensagem.textContent = "";
                mensagem.classList.remove("alert-warning");
                    
                mensagem.classList.add("alert-warning");
    
                mensagem.textContent = result.mensagem;
        
                setTimeout(function(){
                    window.location.reload(1);
                 }, 2000);

                
            }
        },
        error: function(response) {
            console.log(response);
        }
    });

}


