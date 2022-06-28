@extends('portal.portal')

@push('container')
        
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title"></h4>
                    <h1 class="display-5 mb-4">Por que deveria confiar em nós? Saiba mais sobre nós!</h1>
                    <p class="mb-4">Satisfação dos clientes, parceiros e colaboradores através de melhoria continua , relacionamento próximo , confiança e transparência mútua com zelo e dedicação a fim de contribuir para o crescimento mais acelerado do país.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Abordagem de design</h3>
                                    <!--p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p-->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Soluções Inovadoras</h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Gerência de projetos</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="public/portal/img/about-2.jpg" alt="">
                        <img class="img-fluid" src="pubblic/portal/img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
        

@endpush

@push('servicos')

        @foreach ($categorias as $categoria)
                <a class="btn btn-link" href="{{$categoria->id}}">{{$categoria->titulo}}</a>            
        @endforeach
    
@endpush