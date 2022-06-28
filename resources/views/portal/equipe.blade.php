@extends('portal.portal')


@push('container')

        
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Members</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Members</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Membros da Equipe</h4>
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
        

    
@endpush


@push('servicos')

        @foreach ($categorias as $categoria)
                <a class="btn btn-link" href="{{route('projectos.show',$categoria->id)}}">{{$categoria->titulo}}</a>            
        @endforeach
    
@endpush