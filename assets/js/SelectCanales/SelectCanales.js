$(document).ready(function(){
    //////////////////////////////////////Ajax para llenar el select de dias///////////////////////////////////////////////////////////
    $.ajax({
      url: '../functions/dias/select.php'
    })
    .done(function(result){
      $('#DiasSemana').append(result)
    })
    .fail(function(){
      console.log('error ')
    })
    //////////////////////////////////////Ajax para llenar el select de horas///////////////////////////////////////////////////////////
    $.ajax({
      url: '../functions/horas/select.php'
    })
    .done(function(result){
      $('#HorasDia').append(result)
    })
    .fail(function(){
      console.log('error ')
    })
})
