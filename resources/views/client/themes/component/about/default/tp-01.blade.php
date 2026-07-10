@if (isset($about) && $about <> null)
    <section class="about">
        <div class="container-fluid">
            <div class="row flex-lg-row-reverse align-items-start">
                @if (isset($about->path_image) && $about->path_image <> null)                    
                    <!-- IMAGEM (fora do container) -->
                    <div class="col-12 col-lg-6 p-0 about-image">
                        <img
                        src="{{asset('storage/'.$about->path_image)}}"
                        alt="Sobre a Girollato"
                        class="img-fluid w-100"
                        loading="lazy"
                        >
                    </div>
                @endif
                <!-- TEXTO (dentro do container) -->
                <div class="col-12 col-lg-5 mt-4 mt-lg-0 z-3">
                    <div class="container position-relative">
                        <img src="{{asset('build/client/images/firula-about.svg')}}" alt="Firula" class="position-absolute left-0 firula-about">

                        <span class="about-subtitle color-yellow font-changa font-16 font-bold d-block mb-2">
                            Quem Somos?
                        </span>

                        <h3 class="about-title font-changa font-50 font-bold mb-3 text-black">
                            {{$about->title}} <span class="color-green">{{$about->subtitle}}</span>
                        </h3>

                        <!-- Conteúdo adicional opcional -->
                        <div class="description">
                            {!! $about->text !!}
                        </div>

                        @if ($about->link <> null)                        
                            <div class="btn-about my-4 d-flex justify-content-center justify-content-lg-start">
                                <a href="{{$about->link}}" class="rounded-pill px-4 btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                                    Saiba mais
                                    <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"/>
                                    </svg>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endif