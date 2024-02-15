
@include("admin.layout.includes.head")


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 
 
  <x-admin-header-component />


  @yield('content')
  

  <x-admin-footer-component />


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layout.includes.foot')

@stack('javascript')
</body>
</html>