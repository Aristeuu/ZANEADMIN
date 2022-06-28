<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Prototipos-Arquitetura E Construção</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="portal/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <!-- Libraries Stylesheet -->
    <link href="/public/portal/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/public/portal/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/public/portal/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/public/portal/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/public/portal/css/style.css" rel="stylesheet">

     <!--Toastr-alert-->
  
<link rel="stylesheet" href="/public//admin/plugins/codemirror/theme/monokai.css">

<link rel="stylesheet" href="/public//admin/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/public//admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="/public//admin/plugins/toastr/toastr.min.css">


    @stack('style')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="public/portal/img/icons/Prototipos_logo - Cópia.jpg" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="https://wa.me/244929588626" target="_blank"><i class="fa fa-phone-alt text-primary me-2"></i>+244 929-588-626 </a>
                    <a class="text-body px-2" href="consultoria.prototipos@gmail.com"><i class="fa fa-envelope-open text-primary me-2"></i>consultoria.prototipos@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Termos & Privacidade</a>
                    
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" target="_blank" href="https://www.facebook.com/archprototipos"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://wa.me/244929588626" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" target="_blank" href="https://www.instagram.com/prototipos_arq"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="public/portal/img/icons/Prototipos_logo - Cópia.jpg" alt=""></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('welcome')}}" class="nav-item nav-link @if(Request()->is('/')) active @endif" >Página Inicial</a>
                <a href="{{route('sobre')}}" class="nav-item nav-link @if(Request()->is('sobre')) active @endif">Sobre Nós</a>
                <a href="{{route('servicos')}}" class="nav-item nav-link @if(Request()->is('servicos')) active @endif">Serviços</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @if(Request()->is('feature') || Request()->is('projectos') || Request()->is('equipe')
                        || Request()->is('reuniao')) active @endif" data-bs-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="{{route('feature')}}" class="dropdown-item  @if(Request()->is('feature')) active @endif">Nossas Características</a>
                        <a href="{{route('projectos')}}" class="dropdown-item @if(Request()->is('projectos')) active @endif">Nossos Projectos</a>
                        <a href="{{route('equipe')}}" class="dropdown-item @if(Request()->is('equipe')) active @endif">Nossa Equipe</a>
                        <a href="{{route('reuniao')}}" class="dropdown-item @if(Request()->is('reuniao')) active @endif">Reunião</a>
                    </div>
                </div>
                <a href="{{route('reuniao')}}" class="nav-item nav-link @if(Request()->is('reuniao')) active @endif">Contactos</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Reunião</a>
        </div>
    </nav>
    <!-- Navbar End -->


    @stack('container')
    

         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-light mb-4">Endereço</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i> Rua do IFAL (Bairro Militar) , edifício kamba , 
                            2º andar B , Luanda,Angola</B></p>
                        <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+244 929-588-626</p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>consultoria.prototipos@
                            gmail.com</p>
                        <div class="d-flex pt-2">
    
                            <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-body me-1" href="https://wa.me/244929588626" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-light mb-4">Serviços</h3>
                        @stack('servicos')                       
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-light mb-4">Links rápidos</h3>
                        <a class="btn btn-link" href="">Sobre Nós</a>
                        <a class="btn btn-link" href="">Entre em  connosco</a>
                        <a class="btn btn-link" href="">Nossos Serviços</a>
                        <a class="btn btn-link" href="">Termos & Condições</a>
                        <!--a class="btn btn-link" href="">Suporte</a-->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-light mb-4">Boletim informativo</h3>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Digite o seu e-mail">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Inscreva-se</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">Prototipos-Arquitetura & Construção</a>,Todos os direitos reservedos.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/portal/lib/wow/wow.min.js"></script>
    <script src="/public/portal/lib/easing/easing.min.js"></script>
    <script src="/public/portal/lib/waypoints/waypoints.min.js"></script>
    <script src="/public/portal/lib/counterup/counterup.min.js"></script>
    <script src="/public/portal/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/public/portal/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/public/portal/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/public/portal/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/public/portal/js/main.js"></script>


    
<script src="/public/admin/plugins/codemirror/codemirror.js"></script>
<script src="/public/admin/plugins/codemirror/mode/css/css.js"></script>
<script src="/public/admin/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/public/admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="/public/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/public/admin/plugins/toastr/toastr.min.js"></script>



  
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