$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: '../templates/page-donde-comprar.php'
    })
    .done(function(listaRetails){
        $('#lista_retails').html(listaRetails)
    })
    .fail(function(){
        alert('Error')
    })

    $('#lista_retails').on('change', function(){
        
    })
})