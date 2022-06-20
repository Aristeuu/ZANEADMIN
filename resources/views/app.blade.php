<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | ZaneConnect</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">

  <!--Toastr-alert-->
  
<link rel="stylesheet" href="/admin/plugins/codemirror/theme/monokai.css">

<link rel="stylesheet" href="/admin/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="/admin/plugins/toastr/toastr.min.css">


  @stack('style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        <span>{{Auth()->user()->email}}</span>
        </div>
      </div>

      <!-- SidebarSearch Form >
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->          
          <li class="nav-item">
            <a href="{{route('banners.show')}}" class="nav-link @if(Request()->is('admin/banners')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Banners                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('servicos.show')}}" class="nav-link @if(Request()->is('admin/servicos')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Serviços                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('feature.show')}}" class="nav-link @if(Request()->is('admin/feature')) active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Features                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('categorias.show')}}" class="nav-link @if(Request()->is('admin/categorias')) active @endif">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Categorias                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('fotos.show')}}" class="nav-link @if(Request()->is('admin/fotos')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Fotos                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('produtos.show')}}" class="nav-link @if(Request()->is('admin/projectos')) active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Projectos                
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="{{route('parceiros.show')}}" class="nav-link @if(Request()->is('admin/parceiros')) active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Parceiros                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('equipe.show')}}" class="nav-link @if(Request()->is('admin/equipe')) active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Equipe                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('usuarios.show')}}" class="nav-link @if(Request()->is('admin/usuarios')) active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuários                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Sair                
              </p>
            </a>
          </li>                                                                                                                                  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
        
  
    @stack('container')



  <footer class="main-footer">
    <strong>Copyright &copy; 2022</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>

<script src="/admin/plugins/codemirror/codemirror.js"></script>
<script src="/admin/plugins/codemirror/mode/css/css.js"></script>
<script src="/admin/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/admin/plugins/toastr/toastr.min.js"></script>



  
@if(Session::has('swalDefaultSuccess' ))    
<button type="button" class="swalDefaultSuccess"></button>   
<span id="mensagem" value="descricao">{!! Session::get('swalDefaultSuccess') !!}</span>       

<script>
    $(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });        

    $('.swalDefaultSuccess').ready(function() {

      var d = document.getElementById('mensagem').innerHTML;

     
        Toast.fire({
            icon: 'success',
            title: ' '+ d
        })
    });       
});
</script>


@elseif(Session::has('swalDefaultError' ))   
<button type="button" class="swalDefaultError"></button>   
<span id="mensagem" value="descricao">{!! Session::get('swalDefaultError') !!}</span>

<script>
    $(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });
    
    $('.swalDefaultError').ready(function() {

      var d = document.getElementById('mensagem').innerHTML;

        Toast.fire({
            icon: 'error',
            title: ' '+ d
        })
    });
   

  
});
</script>



@endif



 @stack('scripts')


</body>
</html>
