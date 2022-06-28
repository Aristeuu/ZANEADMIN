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
        <div class="row justify-content-md-center">
            @foreach ($projectos as $project)              
           
                <div class="col-sm" style="min-height: 350px;">                    
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="public/images/{{$project->foto}}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            @endforeach
            
          </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End --> 

@endpush


@push('servicos')

        @foreach ($categorias as $categoria)
                <a class="btn btn-link" href="{{$categoria->id}}">{{$categoria->titulo}}</a>            
        @endforeach
    
@endpush