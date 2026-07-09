@if(isset($slides) && count($slides) > 0)
    <section class="hero">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <!-- Imagem full -->
                            <div class="hero-bg">
                                <picture>
                                    <source srcset="{{ asset('storage/' . $slide->path_image_mobile) }}" media="(max-width: 530px)">
                                    <img src="{{ asset('storage/' . $slide->path_image) }}" alt="Distribuição PET" title="Distribuição PET">
                                </picture>
                            </div>

                            <!-- Overlay -->
                            <div class="overflow"></div>

                            <!-- Conteúdo -->
                            <div class="hero-content mt-5 mt-lg-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="hero-subtitle font-changa font-15 font-regular">
                                                {!! $slide->description !!}
                                            </span>

                                            <h1 class="hero-title font-changa font-50 font-bold">
                                                {{ $slide->title }}
                                            </h1>

                                            <div class="hero-actions d-flex">
                                                @if ($slide->link != null)                                    
                                                    <a href="{{ $slide->link }}" target="_blank" rel="noopener noreferrer" class="btn-one rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
                                                        Conheça
                                                        <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="var(--green-color)"/>
                                                        </svg>
                                                    </a>
                                                @endif
                                                
                                                <a href="" rel="noopener noreferrer" class="btn-download-ficha btn-two rounded-pill px-4 btn-hero btn font-changa bg-yellow text-white font-18 font-medium text-decoration-none">
                                                    Saiba mais
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Paginação -->
            <div class="swiper-pagination news"></div>
        </div>
    </section>
@endif