@extends('portal.portal')


@push('container')

            <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            @foreach($banners as $banner)
                <div class="owl-carousel-item position-relative" data-dot="<img src='public/images/{{$banner->foto}}'>">
                    <img class="img-fluid" src="public/images/{{$banner->foto}}" alt="">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-1 text-white animated slideInDown">{{$banner->titulo}}</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-3"></p>
                                    <a href="#" class="btn btn-primary py-3 px-5 animated slideInLeft">Saber Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
        
        </div>
    </div>
    <!-- Carousel End -->


    
    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="public/portal/img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Design</h3>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="public/portal/img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Soluções Inovadoras</h3>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="public/portal/img/icons/icon-4.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Gerência de projetos</h3>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="">
                        <!--img class="img-fluid" src="portal/img/.jpg" alt=""-->
                        <img class="img-fluid" src="public/images/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Sobre Nós</h4>
                    <h1 class="display-5 mb-4">A Prototipos-Arquitetura & Construção é uma Empresa focada na construção da sua casa dos sonhos. </h1>
                    <p>Somos uma empresa de direito angolano inscrita sob o número de identificação fiscal  <b>5417650471</b>. Com actuação nas áreas de Arquitectura , Construção civil e Carpintaria.</p>
                    <p class="mb-4">Possuimos capacidade técnica e mão de obra especializada nos campos de reformas , restauro , consultoria técnica , fiscalização e elaboração de projectos de arquitetura e engenharias.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">4</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Anos</h3>
                            <h3>No Mercado</h3>
                            <h3 class="mb-0">De Trabalho</h3>
                        </div>
                    </div>
                    <!--a class="btn btn-primary py-3 px-5" href="">Saiba mais</a-->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                                <a class="btn" href="{{route('projectos.show',$categoria->id)}}"><i class="fa fa-plus text-primary me-3"></i>Saber mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                    <!--p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p-->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="public/portal/img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Gerência de projetos</h3>
                                    <!--p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="">                        
                        <img class="img-fluid" src="public/images/t_about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Nossos Projectos</h4>
                <h1 class="display-5 mb-4">Visite os nossos últimos projetos e os nossos trabalhos inovadores</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        @foreach($projectos as $projecto)
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-{{$projecto->id}}" type="button">
                                <h3 class="m-0">{{$projecto->ROW}} {{$projecto->project_titulo}}</h3>
                            </button>
                        @endforeach
                        <!--button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 " data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Complexo Moderno</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Hotel Real</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Edifício </h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Shopping</h3>
                        </button-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        @foreach($projectos as $projecto)
                             <div class="tab-pane fade" id="tab-pane-{{$projecto->id}}">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="public/images/{{$projecto->foto}}"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">4 anos de experiência na indústria da arquitetura</h1>
                                        <p class="mb-4">{!!$projecto->descricao!!}</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Abordagem de Design</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Soluções Inovadoras</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Gerência de Projetos</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


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
                                    <img class="img-fluid" src="public/images/{{$team->foto}}" alt="">
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
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


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Reunião</h4>
                    <h1 class="display-5 mb-4">Marque uma reunião connosco para iniciar seu projeto de sonho.</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Ligue para nós agora!</p>
                                    <h3 class="mb-0">+244 929-588-626</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Envie-nos um email</p>
                                    <h3 class="mb-0">consultoria.prototipos@gmail.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{route('agendamento.enviar')}}" method="post">
                    @csrf

                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" name="entidade" class="form-control" placeholder="Nome completo" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" name="contacto" class="form-control" placeholder="Contacto" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select name="servico" class="form-select" style="height: 55px;">
                                <option selected>Escolha o serviço</option>
                                @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" name="data"
                                    class="form-control datetimepicker-input"
                                    placeholder="Escolha uma data" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" name="horario"
                                    class="form-control datetimepicker-input"
                                    placeholder="Escolha a hora" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea  name="mensagem" class="form-control" rows="5" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Agendar de reunião</button>
                        </div>

                     </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Parceiros</h4>
                <!--h1 class="display-5 mb-4">Milhares de clientes que confiam em nós e em nossos serviços</h1-->
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($parceiros as $parceiro)
                    <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='public/images/{{$parceiro->foto}}' alt=''>">
                    <p class="fs-5"></p>
                        <h3>{{$parceiro->titulo}}</h3>
                        <!--span class="text-primary">Profissão</span-->
                    </div>
                @endforeach
                
                <!--div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='portal/img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Nome do cliente</h3>
                    <span class="text-primary">Profissão</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='portal/img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Nome do cliente</h3>
                    <span class="text-primary">Profissão</span>
                </div-->
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->

    
@endpush


@push('servicos')

        @foreach ($categorias as $categoria)
                <a class="btn btn-link" href="{{route('projectos.show',$categoria->id)}}">{{$categoria->titulo}}</a>            
        @endforeach
    
@endpush



