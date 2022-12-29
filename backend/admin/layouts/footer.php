

<!-- Required Js -->
<script src="../../assets/js/vendor-all.min.js"></script>
<script src="../../assets/js/plugins/bootstrap.min.js"></script>
<script src="../../assets/js/pcoded.min.js"></script>
<script src="../../assets/modules/summernote/summernote-bs4.js"></script>

<!-- Apex Chart -->
<script src="../../assets/js/plugins/apexcharts.min.js"></script>

<!-- js modules -->
<!-- <script src="../../assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="../../assets/js/dt-1.10.25datatables.min.js"></script>
<script src="../../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- custom-chart js -->
<script src="../../assets/js/pages/dashboard-main.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#example').DataTable({
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData[0]);
            },
        });
    });
</script>
<script>
    if(jQuery().summernote) {   
    $(".summernote").summernote({
        dialogsInBody: true,
        minHeight: 250,
    });
    $(".summernote-simple").summernote({
    dialogsInBody: true,
    minHeight: 150,
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['para', ['paragraph']]
    ]
    });
}
</script>
</body>

</html>