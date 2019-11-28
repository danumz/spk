<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 04:40:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assetss/');?>assets/images/favicon.png">
    <title>Dashboard Admin Fordza</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/materialpro/" />
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assetss/');?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?= base_url('assetss/');?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url('assetss/');?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?= base_url('assetss/');?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?= base_url('assetss/');?>assets/plugins/css-chart/css-chart.css" rel="stylesheet"> -->
    <!--This page css - Morris CSS -->
    <link href="<?= base_url('assetss/');?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?= base_url('assetss/');?>assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?= base_url('assetss/');?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?= base_url('assetss/material/');?>css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url('assetss/material/');?>css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="<?= base_url('assetss/');?>assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assetss/');?>assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url('assetss/');?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?= base_url('assetss/');?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?= base_url('assetss/');?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
      <link href="<?= base_url('assetss/');?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assetss/');?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assetss/');?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assetss/');?>assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assetss/');?>assets/plugins/datatables.net-bs4/css/responsive.dataTables.min.css">
    <script src="https://cdn.tiny.cloud/1/84ivqgy1wj11pbfgd3aaxwewmi4fdqfpdu7sgbngknk1tl3h/tinymce/5/tinymce.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="5" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

      <?php
          $this->load->view('topbar_view_admin');
          $this->load->view('leftbar_view_admin');
          echo $contents;;
       ?>

    </div>

    <script src="<?= base_url('assetss/');?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assetss/');?>assets/plugins/popper/popper.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assetss/material/');?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assetss/material/');?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assetss/material/');?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url('assetss/');?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url('assetss/');?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assetss/material/');?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?= base_url('assetss/');?>assets/plugins/chartist-js/dist/chartist.min.js"></script>

    <!--c3 JavaScript -->
    <script src="<?= base_url('assetss/');?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/c3-master/c3.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?= base_url('assetss/material/');?>js/dashboard2.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assetss/');?>assets/plugins/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="<?= base_url('assetss/');?>assets/plugins/dropzone-master/dist/dropzone.js"></script>

    <!-- end - This is for export functionality only -->
    <script>
    $(function () {
    $('#myTable').DataTable();
    $(function () {
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
    responsive: true,
    columnDefs: [
        { responsivePriority: 3, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ],
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
    ]
    });
$('#config-table').DataTable( {
  responsive: true
} );
    </script>
    <script>
    $(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            //templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assetss/');?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
    <script src="<?= base_url('assetss/');?>assets/plugins/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url('assetss/');?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>

</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 04:40:57 GMT -->
</html>
