</div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
        
        </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/material.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
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
<script src="<?= base_url() ?>template/karyawan/assets/js/sweetalert2.js"></script>
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
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>