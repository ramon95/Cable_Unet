<!-- ?php
require 'header.php';
require 'navbar.php';
require 'sidebar.php';
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Canales</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
          <form enctype="multipart/form-data" action="../functions/article/insert.php" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="New title">
            </div>
            <label for="categorie">Categorie</label>
            <select name="categorie_id" class="form-control" id="categorie">
              <option value="0">Elige una categoría</option>
            </select>
            <label for="content">Content</label>
            <textarea  name="content" class="form-control" rows="3" id="content"></textarea>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input name="user-file" type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <button name="submit" type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="col-md-2 main">
          <form>
            <div class="form-group">
            <label for="new_categorie">Add new cateogrie</label>
              <input type="text" class="form-control" id="new_categorie" placeholder="New categorie">
            </div>
            <button type="button" id="submit_categorie" class="btn btn-default btn-block">Save</button>
          </form>
        </div>
      </div>
    </div>
?php require 'footer.php'; ?> -->

<?php
  include 'header.php';
  include 'sidebar.php';

  $message = isset($_GET['message']) && isset($_GET['type']) ? MessageFactory::createMessage($_GET['type']) : false;

  $message_out = $message ? $message->getMessage($_GET['message']) :'';
?>
  <div class="main-panel">
    <?php include 'navbar.php' ?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <?php echo $message_out; ?>
                <h4 class="title">Canales</h4>
              </div>
              <div class="content">
                <div class="row">
                  <div class="col col-sm-8">
                    <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-film"></i> Crear Canal</a>
                  </div>
                </div>
                <div class="collapse" id="form0">
                  <hr>
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
                         <select class="form-control select2 select2-hidden-accessible" name="DiasSemana" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true" required id="DiasSemana">
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="HorasDia">Horas al dia</label>
                         <select class="form-control select2 select2-hidden-accessible" name="HorasDia" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true" required id="HorasDia">
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success" type="submit"><i class="fa  fa-upload"></i> Crear</button>
                    </div>
                  </form>
                </div>
                <hr>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <!-- <th>Accion</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Canal 1</td>
                      <td>12.221.285</td>
                    </tr>
                    <tr>
                      <td>Canal 2</td>
                      <td>12.221.285</td>
                    </tr>
                    <tr>
                      <td>Canal 3</td>
                      <td>12.221.285</td>
                    </tr>
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
  <script src="../js/select2.full.min.js"></script>

  <!-- script para separar los numeros en unidades -->
  <script src="../assets/js/jquery.inputmask.bundle.js" charset="utf-8"></script>
  <script src="../js/SelectCanales/SelectCanales.js" charset="utf-8"></script>
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
  </script>

  </html>
