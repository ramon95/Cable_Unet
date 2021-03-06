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
                <h4 class="title">Telefonia</h4>
              </div>
              <div class="content">
                <div class="row">
                  <div class="col col-sm-8">
                    <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-phone"></i> Crear servicio de telefonia</a>
                  </div>
                </div>
                <div class="collapse" id="form0">
                  <hr>
                  <form method="POST" action="../functions/telefonia/insert.php" accept-charset="UTF-8">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="NombreCanal">Nombre del plan telefonico</label>
                        <input type="text" name="NombreCanal" class="form-control" required maxlength="45">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="PrecioCanal">Precio del plan telefonico</label>
                        <input type="text" name="PrecioCanal" class="form-control trucated" required maxlength="45">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="CantMin">Cantidad de minutos</label>
                        <input type="number" name="CantMin" class="form-control trucated" required min="0">
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success" type="submit">Crear</button>
                    </div>
                  </form>
                </div>
                <hr>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Cantidad de minutos</th>
                      <!-- <th>Editar</th> -->
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody id="canales">
                  </tbody>
                </table>
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
    //llenado de tabla de canales
    $.ajax({
      url: '../functions/telefonia/select.php',
    })
    .done(function(result) {
      if (result == '') {
        $('#canales').append('<tr><th colspan="5">Sin datos</th></tr>');
      }
      $('#canales').append(result);
    })
    .fail(function() {
      console.log("error");
    })
  </script>

  </html>
