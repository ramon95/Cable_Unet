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
?>
  <div class="main-panel">
    <?php include 'navbar.php' ?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
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
                  <form method="POST" action="" accept-charset="UTF-8">
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
                         <select class="form-control select2 select2-hidden-accessible" name="DiasSemana" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                          <option value="1">Lunes</option>
                          <option value="2">Martes</option>
                          <option value="3">Miercoles</option>
                          <option value="4">Jueves</option>
                          <option value="5">Viernes</option>
                          <option value="6">Sabado</option>
                          <option value="7">Domingo</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="HorasDia">Horas al dia</label>
                         <select class="form-control select2 select2-hidden-accessible" name="HorasDia" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                          <option value="1">01-02 AM</option>
                          <option value="2">02-03 AM</option>
                          <option value="3">03-04 AM</option>
                          <option value="4">04-05 AM</option>
                          <option value="5">05-06 AM</option>
                          <option value="6">06-07 AM</option>
                          <option value="8">07-08 AM</option>
                          <option value="9">08-09 AM</option>
                          <option value="10">09-10 AM</option>
                          <option value="11">10-11 AM</option>
                          <option value="12">11-12 AM-PM</option>
                          <option value="13">12-13 PM</option>
                          <option value="14">13-14 PM</option>
                          <option value="15">14-15 PM</option>
                          <option value="16">15-16 PM</option>
                          <option value="17">16-17 PM</option>
                          <option value="18">17-18 PM</option>
                          <option value="19">18-19 PM</option>
                          <option value="20">19-20 PM</option>
                          <option value="21">20-21 PM</option>
                          <option value="22">21-22 PM</option>
                          <option value="23">22-23 PM</option>
                          <option value="24">23-24 PM</option>
                          <option value="25">24-01 AM</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success" type="submit" id="btnRegis"><i class="fa  fa-upload"></i> Crear</button>
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
