<footer class="footer">
        <span class="text-right">                
            <a target="_blank" href="#">BrVeloso</a>
        </span>
        <span class="float-right">
            <!-- Copyright footer link MUST remain intact if you download free version. -->
            <!-- You can delete the links only if you purchased the pro or extended version. -->
            <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
            Distribuído por <a target="_blank" href="#" title="Numero para contato"><b>Bruno Veloso</b></a>
        </span>
    </footer>

    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>

    <!-- App js -->
    <script src="assets/js/admin.js"></script>

</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<!-- Counter-Up-->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- dataTabled data -->
<script src="assets/data/data_datatables.js"></script>

<!-- Charts data -->
<script src="assets/data/data_charts_dashboard.js"></script>
<script>
    $(document).on('ready', function() {
        // data-tables
        $('#dataTable').DataTable({
            data: dataSet,
            columns: [{
                title: "Name"
            }, {
                title: "Position"
            }, {
                title: "Office"
            }, {
                title: "Extn."
            }, {
                title: "Date"
            }, {
                title: "Salary"
            }]
        });

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>
<!-- END Java Script for this page -->

</body>

</html>