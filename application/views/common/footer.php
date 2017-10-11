    </div>
  </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        SMKN 1 SUBANG
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right dropdown">
            Copyright &copy; 2017, Ahmad Irfan Maulana 
        </p>
    </div>
</footer>

</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo PATH_THEME; ?>assets/common/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo PATH_THEME; ?>assets/plugin/DataTables/datatables.min.js"></script>
<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/demo.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

      demo.initChartist();

      // $.notify({
      //     icon: 'pe-7s-gift',
      //     message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
      //
      //   },{
      //       type: 'info',
      //       timer: 4000
      //   });

      $('#myTable').DataTable();
  });
</script>
</body>
</html>
