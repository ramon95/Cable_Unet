      <footer class="footer">
        <div class="container-fluid">
          <p class="copyright pull-right">
          &copy; <script>document.write(new Date().getFullYear())</script> Creado por Ramon Perez
          </p>
        </div>
      </footer>
    </div>
  </div>
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
