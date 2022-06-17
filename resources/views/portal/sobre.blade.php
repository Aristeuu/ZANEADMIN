@extends('portal.portal')



@push('container')

                <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">SOBRE NÓS</h1>
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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="">                        
                        <img class="img-fluid" src="public/images/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Sobre Nós</h4>
                    <h1 class="display-5 mb-4">Prototipos ARQ </h1>
                    <p>Somos uma empresa de direito angolano inscrita sob o número de identificação fiscal  5417650471. Com actuação nas áreas de Arquitectura , Construção civil e Carpintaria.</p>
                    <p class="mb-4">Possuimos capacidade técnica e mão de obra especializada nos campos de reformas , restauro , consultoria técnica , fiscalização e elaboração de projectos de arquitetura e engenharias.

                        Garantido soluções inteligentes e econômicas aos nossos parceiros.
                    </p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">4</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Anos</h3>
                            <h3> No Mercado</h3>
                            <h3 class="mb-0">De Trabalho</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4">Por que deveria confiar em nós? Saiba mais sobre nós!</h1>
                    <p class="mb-4">Satisfação dos clientes , parceiros e colaboradores através de melhoria continua , relacionamento próximo , confiança e transparência mútua com zelo e dedicação a fim de contribuir para o crescimento mais acelerado do país.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Abordagem de design</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Soluções Inovadoras</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Gerência de projetos</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="img-fluid" src="public/images/t_about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Membros da equipe</h4>
                <h1 class="display-5 mb-4">Somos uma equipe de arquitetura criativa , para a sua casa dos sonhos</h1>
            </div>
            <div class="row g-0 team-items">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="public/images/{{$team->foto}}" alt="{{$team->nome}}">
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h3 class="mt-2">{{$team->nome}}</h3>
                                <span class="text-primary">{{$team->funcao}}</span>
                            </div>
                        </div>
                    </div> 
                @endforeach             
                
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    
@endpush