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
  </html>
