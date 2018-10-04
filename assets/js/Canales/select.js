$(document).ready(function() {
  $.ajax({
    url: '../functions/canales/select.php',
  })
  .done(function(result) {
    console.log(result);
    if (result == '') {
      $('#canales').append('<tr><th colspan="3">Sin datos</th></tr>');
    }
    $('#canales').append(result);
  })
  .fail(function() {
    console.log("error");
  })
});
