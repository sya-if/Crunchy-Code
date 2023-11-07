<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Crunchy Code</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Additional -->
   
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../vendors/images/favicon-32x32.png">
    <link rel="icon" type of="image/png" sizes="16x16" href="../../../vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../../vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="../../../vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../../../vendors/styles/style.css">=
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../src/plugins/datatables/css/responsive.bootstrap4.min.css">

 
</head>
<body>
    
    <!-- Panggil file preloader -->
    @include('components.preloader')

    <!-- Panggil file header -->
    @include('components.header')

    <!-- Panggil file right sidebar  -->
    @include('components.right-sidebar')

    <!-- Panggil file left sidebar -->
    @include('components.left-sidebar')
    
    <main>
        @yield('content')
    </main>
  

    <!-- js -->
	<script src="../../../vendors/scripts/core.js"></script>
	<script src="../../../vendors/scripts/script.min.js"></script>
	<script src="../../../vendors/scripts/process.js"></script>
	<script src="../../../vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../../../src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
    <script src="../../../src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
    <script src="../../../src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
    <script src="../../../src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../../src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../../vendors/scripts/dashboard2.js"></script>
    <script src="../../../src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
    <script src="../../../src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
    <script src="../../../src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
    <script src="../../../src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../../src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../../vendors/scripts/dashboard2.js"></script>
	<script src="../../../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../../../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../../../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../../../vendors/scripts/dashboard.js"></script>
    
</body>
</html>
