$(document).ready(function(){
    //////////////////////////////////////Ajax para llenar el select de dias///////////////////////////////////////////////////////////
    $.ajax({
      url: '../functions/dias/select.php'
    })
    .done(function(result){
      $('#DiasSemana').append(result)
    })
    .fail(function(){
      alert('Hubo un error al actualizar las categorías :( ')
    })
    //////////////////////////////////////Ajax para llenar el select de horas///////////////////////////////////////////////////////////
    $.ajax({
      url: '../functions/horas/select.php'
    })
    .done(function(result){
      $('#HorasDia').append(result)
    })
    .fail(function(){
      alert('Hubo un error al actualizar las categorías :( ')
    })
    //////////////////////////////////////Ajax para llenar la tabla de caneles//////////////////////////////////////////////////////////
    $.ajax({
      url: '../functions/canales/select.php',
    })
    .done(function(result) {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
})
