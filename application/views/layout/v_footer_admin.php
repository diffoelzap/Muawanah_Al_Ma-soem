</div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                </div>
        
        </footer>
        </div>
    </div>
</body>



<!-- Forms Validations Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url() ?>template/karyawan/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>template/karyawan/assets/js/sweetalert2/sweetalert2.min.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url() ?>template/karyawan/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>template/karyawan/assets/js/demo.js"></script>
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
<script>
    $(function() {
        $('table.table').DataTable({
            "ordering": false,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language":{    
                "emptyTable":       "Tidak ada data yang tersedia di tabel",
                "info":             "Menampilkan _START_ sampai _END_ dari _TOTAL_ masukan",
                "infoEmpty":        "Menampilkan 0 sampai 0 dari 0 masukan",
                "infoFiltered":     "(difilter dari _MAX_ total masukan)",
                "infoPostFix":      "",
                "thousands":        ".",
                "lengthMenu":       "Menampilkan _MENU_ masukan",
                "loadingRecords":   "memuat...",
                "processing":       "Sedang di proses...",
                "search":           "Pencarian:",
                "zeroRecords":      "Arsip tidak ditemukan",
                "Paginate":{
                    "first":        "Pertama",
                    "last":         "Terakhir",
                    "next":         "lanjut",
                    "previous":     "kembali"
                },
                "aria":{
                    "sortAscending"  : "aktifkan urutan kolom ascending",
                    "sortDescending" : "aktifkan urutan kolom descending"
                }
            }
        });
        $('.dataTables_length').addClass('bs-select');

    });

    $.extend( true, $.fn.dataTable.defaults, {
    "paging":   false,
    "searching": false,
    "ordering": false,
    "info":false
    } );
 
 
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
     window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500,function() {
            $(this).remove();
            });
    },2000)
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>