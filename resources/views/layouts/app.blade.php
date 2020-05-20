<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestion de Equipos</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      
      <!-- Navbar -->
      @include('layouts.navbar')
      <!-- /.navbar -->
      
      <!-- Sidebar -->
      @include('layouts.sidebar')
      <!-- /.Sidebar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="app">
        @include('layouts.headercontent')
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Control Sidebar -->
      @include('layouts.controlsidebar')
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="">SEDES</a>.</strong> All rights reserved.
      </footer>
      
    </div>
  <!-- ./wrapper -->

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" ></script>
  </body>
</html>
