<script data-cfasync="false" src="{{asset('admin_pages/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('admin_pages/node_modules/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin_pages/node_modules/ps/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin_pages/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin_pages/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin_pages/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{asset('admin_pages/node_modules/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/morrisjs/morris.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{asset('admin_pages/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/c3-master/c3.min.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('admin_pages/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('admin_pages/js/dashboard1.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('admin_pages/node_modules/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/calendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/calendar/dist/cal-init.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/moment/moment.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('admin_pages/node_modules/wizard/jquery.validate.min.js')}}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{asset('admin_pages/node_modules/sweetalert/sweetalert.min.html')}}"></script>
    <script src="{{asset('admin_pages/node_modules/wizard/steps.js')}}"></script>
    <script src="{{asset('admin_pages/js/chat.js')}}"></script>

    <!-- This is data table -->
    <script src="{{asset('admin_pages/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin_pages/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{asset('admin_pages/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin_pages/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin_pages/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('admin_pages/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin_pages/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin_pages/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin_pages/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
    <!-- end - This is for export functionality only -->


<script>
    $(function () {
        $('#myTable').DataTable();
        $(document).ready(function () {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    $('#config-table').DataTable({
        responsive: true
    });
</script>