<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-Gov</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= asset('user/assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= asset('user/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('user/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('user/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= asset('user/assets/css/style.css') ?>" rel="stylesheet">

    {{-- Midtrans --}}
    @yield('midtrans')
</head>

<body>
    @yield('content')
    <!-- Vendor JS Files -->
    <script src="<?= asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= asset('user/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= asset('user/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= asset('user/assets/vendor/php-email-form/validate.js') ?>"></script>

    <!-- Vendor JS Files -->
    <script src="<?= asset('admin/assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= asset('admin/assets/vendor/chart.js/chart.min.js') ?>"></script>
    <script src="<?= asset('admin/assets/vendor/echarts/echarts.min.js') ?>"></script>
    <script src="<?= asset('admin/assets/vendor/quill/quill.min.js') ?>"></script>
    <script src="<?= asset('admin/assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
    <script src="<?= asset('admin/assets/vendor/tinymce/tinymce.min.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= asset('user/assets/js/main.js') ?>"></script>

    {{-- Datatable --}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

</body>

</html>
