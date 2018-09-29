$(document).ready(function(){
    $.ajax({
      url: '../functions/dias/select.php'
    })
    .done(function(result){
      $('#DiasSemana').append(result)
    })
    .fail(function(){
      alert('Hubo un error al actualizar las categorías :( ')
    })

    $.ajax({
      url: '../functions/horas/select.php'
    })
    .done(function(result){
      $('#HorasDia').append(result)
    })
    .fail(function(){
      alert('Hubo un error al actualizar las categorías :( ')
    })
})
