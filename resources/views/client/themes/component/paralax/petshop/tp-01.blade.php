@if (isset($letsgo))
    <section class="lets-go bg-grey-light py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                @if ($letsgo->path_image <> null)                    
                    <div class="content-left col-12 col-lg-6">
                        <img src="{{asset('storage/' . $letsgo->path_image)}}" alt="Carro de entrega" class="w-100">
                    </div>
                @endif
                <div class="content-left col-12 col-lg-6">
                    <h3 class="about-title font-changa font-50 font-bold color-green mb-3">
                        {{$letsgo->title}}
                    </h3>
                    <p class="color-grey font-changa font-16 font-regular text-center text-lg-start">{{$letsgo->description}}</p>
                    <div class="step-actions gap-3 d-flex mt-4 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="{{route('about')}}#coverage-section" class="rounded-pill px-4 btn-hero btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                            Onde Distribuimos
                            <svg class="ms-2" width="31" height="13" viewBox="0 0 31 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.1708 12.4741L30.4078 6.23712L24.1708 0.000120163L22.4036 1.76727L26.8527 6.23712L22.3828 10.707L24.1708 12.4741Z" fill="#10513D"/>
                            <path d="M0 5H27V7.2H0V5Z" fill="#10513D"/>
                            </svg>
                        </a>
                        <a href="{{route('about')}}#team-section" class="rounded-pill px-4 btn-hero btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                            Encontrar Representantes
                            <svg class="ms-2" width="31" height="13" viewBox="0 0 31 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.1708 12.4741L30.4078 6.23712L24.1708 0.000120163L22.4036 1.76727L26.8527 6.23712L22.3828 10.707L24.1708 12.4741Z" fill="#10513D"/>
                            <path d="M0 5H27V7.2H0V5Z" fill="#10513D"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif 