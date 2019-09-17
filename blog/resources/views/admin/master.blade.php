<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title') </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/') }}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('/') }}/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/') }}/admin/css/sb-admin.css" rel="stylesheet">
<!-----editor link--------------->
    <script src="{{ asset('/') }}/admin/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/') }}/admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}/admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{ asset('/') }}/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <!------------editor link--------------->
</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    @include('admin.includes.menu')

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Category Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('category/add') }}">Add Category</a>
                <a class="dropdown-item" href="{{ route('manage-category') }}">Manage Category</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Brand Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('add-brand') }}">Add Brand</a>
                <a class="dropdown-item" href="{{ route('manage-brand') }}">Manage Brand</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Product Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('add-product') }}">Add Product</a>
                <a class="dropdown-item" href="{{ route('manage-product') }}">Manage Product</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Order Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('manage-order') }}">Manage Order</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
    </ul>
    <!-- /.content-wrapper -->
    @yield('content')
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/') }}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/') }}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('/') }}/admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('/') }}/admin/vendor/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/') }}/admin/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/') }}/admin/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('/') }}/admin/js/demo/datatables-demo.js"></script>
<script src="{{ asset('/') }}/admin/js/demo/chart-area-demo.js"></script>
<!----ckeditor--------->
<script>
    initSample();
</script>
<!----ckeditor--------->
</body>

</html>
