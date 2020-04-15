

function gravaLivro(campo, autor, editora){

    console.log("chegeui na grava livro");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: "/grava-livro",
        type: "POST",
        dataType: 'json',
        data: {
            data: { campo: campo,
                    autor: autor,    
                    editora: editora
            },
        },
        success: function(result){

            if(result.success == true){
                window.location.href = "/product";
            }
        },
        error: function(response) {
            console.log(response);
        }
    });

}


