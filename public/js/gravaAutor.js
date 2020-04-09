

function gravaAutor(campo){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: "/grava-autor",
        type: "POST",
        dataType: 'json',
        data: {
            data: { campo: campo},
        },
        success: function(result){

            if(result.success == true){
                window.location.href = "/autor";
            }
        },
        error: function(response) {
            console.log(response);
        }
    });

}


