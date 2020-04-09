

function gravaAutor(autor){
    $.ajax({
        headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
        },
        url: "{{ URL::to('grava-autor') }}",
        type: "POST",
        dataType: 'json',
        data: {
            data: { autor: autor},
        },
        success: function(result){
            alert(result);
        }
    });
}


