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
                <h4 class="title">Email Statistics</h4>
                <p class="category">Last Campaign Performance</p>
              </div>
              <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                <div class="footer">
                  <div class="legend">
                    <i class="fa fa-circle text-info"></i> Open
                    <i class="fa fa-circle text-danger"></i> Bounce
                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                  </div>
                  <hr>
                  <div class="stats">
                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
