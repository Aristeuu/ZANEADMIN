@extends('portal.portal')


@push('container')


        
   

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Entre em contacto connosco</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Páginas Inicial</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contactos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contactos</h4>
                <h1 class="display-5 mb-4">Se você tiver alguma dúvida, por favor, sinta-se livre e entre em contato connosco.</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Endereço</p>
                                <h3 class="mb-0">Rua do IFAL (Bairro Militar) , edifício kamba , 
                                    2º andar B , Luanda,Angola</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Ligue para nós agora!</p>
                                <h3 class="mb-0">+244 929-588-626</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Envie-nos um e-mail</p>
                                <h3 class="mb-0">consultoria.prototipos@gmail.com</h3>
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
                                    <option value="1">Serviço 1</option>
                                    <option value="2">Serviço 2</option>
                                    <option value="3">Serviço 3</option>
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
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->
       

    
@endpush


@push('servicos')

        @foreach ($categorias as $categoria)
                <a class="btn btn-link" href="{{route('projectos.show',$categoria->id)}}">{{$categoria->titulo}}</a>            
        @endforeach
    
@endpush