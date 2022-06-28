@extends('portal.portal')

@push('container')
        
        

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Serviços</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">PÁGINA INICIAL</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">PÁGINAS</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">SOBRE NÓS</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="public/portal/img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Abordagem de design</h3>
                        <!--p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="public/portal/img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Soluções Inovadoras</h3>
                        <!--p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="public/portal/img/icons/icon-4.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Gerência de projectos</h3>
                        <!--p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Nossos serviços</h4>
                <h1 class="display-5 mb-4">Focamos em arquitetura moderna e design de interiores</h1>
            </div>
            <div class="row g-4">
                @foreach($categorias as $categoria)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="public/images/{{$categoria->background}}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="public/images/{{$categoria->foto}}" alt="Icon">
                            <h3 class="mb-3">{{$categoria->titulo}}</h3>
                            <p class="mb-4"></p>
                            <a class="btn" href="{{$categoria->id}}"><i class="fa fa-plus text-primary me-3"></i>Saber mais</a>
                        </div>
                    </div>
                </div>
            @endforeach                  
            </div>
        </div>
    </div>
    <!-- Service End -->


     <!-- Testimonial Start -->
     <!--div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Depoimento</h4>
                <h1 class="display-5 mb-4">Milhares de clientes que confiam em nós e em nossos serviços</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='portal/img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Nome do cliente</h3>
                    <span class="text-primary">Profissão</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='portal/img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Nome do cliente</h3>
                    <span class="text-primary">Profissão</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='portal/img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Nome do cliente</h3>
                    <span class="text-primary">Profissão</span>
                </div>
            </div>      
        </div>
    </div-->
    <!-- Testimonial End -->
        



@endpush


@push('servicos')

        @foreach ($categorias as $categoria)
                <a class="btn btn-link" href="{{$categoria->id}}">{{$categoria->titulo}}</a>            
        @endforeach
    
@endpush