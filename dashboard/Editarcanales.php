<?php
  include 'header.php';
  include 'sidebar.php';
?>
  <div class="main-panel">
    <?php include 'navbar.php' ?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title">Editar Canales</h4>
              </div>
              <div class="content">
                <form method="POST" action="../functions/canales/insert.php" accept-charset="UTF-8">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="NombreCanal">Nombre del canal</label>
                      <input type="text" name="NombreCanal" class="form-control" required maxlength="45">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="PrecioCanal">Precio del canal</label>
                      <input type="text" name="PrecioCanal" class="form-control trucated" required maxlength="45">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="DiasSemana">Dias a la Semana</label>
                       <select class="form-control select2 select2-hidden-accessible" name="DiasSemana[]" multiple style="width: 100%;" tabindex="-1" aria-hidden="true" required id="DiasSemana">
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="HorasDia">Horas al dia</label>
                       <select class="form-control select2 select2-hidden-accessible" name="HorasDia[]" multiple style="width: 100%;" tabindex="-1" aria-hidden="true" required id="HorasDia">
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success" type="submit">Editar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>

    <!--   Core JS Files   -->
  <script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="../assets/js/demo.js"></script>

  <!-- script para el select 2 -->
  <script src="../assets/js/select2.full.min.js"></script>

  <!-- script para separar los numeros en unidades -->
  <script src="../assets/js/jquery.inputmask.bundle.js" charset="utf-8"></script>
  <script type="text/javascript">
    $('.select2').select2();
    //enmascaramiento
    $('.trucated').inputmask("numeric", {
      radixPoint: ",",
      groupSeparator: ".",
      digits: 2,
      autoGroup: true,
      rightAlign: false,
      oncleared: function () { self.Value(''); }
    });
    //Traer la informacion del canal
    ruta = $(location).attr('search');
    separar = ruta.split('=');
    id = separar[1];
    $.ajax({
      type: 'POST',
      url: '../functions/canales/select_by_id.php',
      data: {id: id}
    })
    .done(function(result) {
      console.log(result);
    })
    .fail(function() {
      console.log("error");
    })
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
    //////////////////////////////////////Ajax para llenar el select de horas//////////////////////////////////////////////////////////
    $.ajax({
      url: '../functions/horas/select.php'
    })
    .done(function(result){
      $('#HorasDia').append(result)
    })
    .fail(function(){
      console.log('error ')
    })
  </script>

  </html>
