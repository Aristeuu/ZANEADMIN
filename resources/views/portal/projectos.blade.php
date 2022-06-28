@extends('portal.portal')

@push('container')
        
       <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Projectos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">PÁGINA INICIAL</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">PÁGINAS</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Projectos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


   <!-- Project Start -->
   <div class="container-xxl project py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Nossos serviços</h4>
            <h1 class="display-5 mb-4">Focamos em arquitetura moderna e design de interiores</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
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
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="portal/img/project-1.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="portal/img/project-2.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">4 anos de experiência na indústria da arquitetura</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="portal/img/project-3.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">4 anos de experiência na indústria da arquitetura</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="portal/img/project-4.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">4 anos de experiência na indústria da arquitetura</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End --> 

@endpush