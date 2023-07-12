        <!-- JQuery -->
        <script src="<?= BASEURL ?>/assets/jquery/dist/jquery.min.js"></script>
        <!-- JS -->
        <script src="<?= BASEURL ?>/js/scripts.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="<?= BASEURL; ?>/assets/bootstrap/dist/js/bootstrap.js"></script>
        <!-- adminLTE
        <script src="<?= BASEURL; ?>/js/adminlte.js"></script> -->
        <!-- Fontawesome -->
        <script src="<?= BASEURL; ?>/assets/fontawesome6/js/all.min.js"></script>
        <!-- Data Table JS -->
        <script src="<?= BASEURL; ?>/assets/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="<?= BASEURL; ?>/assets/DataTables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="<?= BASEURL; ?>/assets/DataTables/Buttons-2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="<?= BASEURL; ?>/assets/DataTables/DateTime-1.4.1/js/dataTables.dateTime.min.js"></script>
        <script src="<?= BASEURL; ?>/assets/DataTables/Responsive-2.4.1/js/dataTables.responsive.min.js"></script>
        <script src="<?= BASEURL; ?>/assets/DataTables/SearchPanes-2.1.2/js/dataTables.searchPanes.min.js"></script>
        <script src="<?= BASEURL; ?>/assets/DataTables/Select-1.6.2/js/select.bootstrap5.min.js"></script>
        <script>
            $("#table1").dataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            })
            $('#table2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        </script>
        </body>

        </html>