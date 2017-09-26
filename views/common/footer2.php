   <!-- footer content -->
        <footer>
          <div class="pull-right">
            Managed By <a href="https://colorlib.com">SUPERIOR OPTIONS</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- Select Plugin Js -->
    <script src="public/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script> 
    <!-- NProgress -->
    <script src="public/admin/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="public/admin/vendors/raphael/raphael.min.js"></script>
    <script src="public/admin/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/admin/vendors/moment/min/moment.min.js"></script>
    <script src="public/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="public/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="public/admin/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="public/admin/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="public/admin/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    
    <!-- bootstrap-wysiwyg -->
    <script src="public/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="public/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="public/admin/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="public/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="public/admin/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="public/admin/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="public/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="public/admin/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="public/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="public/admin/vendors/starrr/dist/starrr.js"></script>
    <!-- Datatables -->
    <script src="public/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="public/admin/build/js/custom.min.js"></script>
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
  </body>
</html>