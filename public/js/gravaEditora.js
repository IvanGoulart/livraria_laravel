

function gravaEditora(campo){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: "/grava-editora",
        type: "POST",
        dataType: 'json',
        data: {
            data: { campo: campo},
        },
        success: function(result){

            if(result.success == true){
                window.location.href = "/editora";
            }
        },
        error: function(response) {
            console.log(response);
        }
    });

}


