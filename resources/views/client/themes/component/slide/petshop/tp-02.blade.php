@if(isset($slides) && count($slides) > 0)
    <section class="hero">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <!-- Vídeo full -->
                            {{-- <div class="hero-bg">
                                <video autoplay muted loop playsinline class="hero-video">
                                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">         
                                        
                                    <!-- Fallback para imagem caso o vídeo não carregue -->
                                    <img src="{{ asset('storage/' . $slide->path_image) }}" alt="{{ $slide->title }}" title="{{ $slide->title }}">
                                </video>
                            </div> --}}

                            <div class="hero-bg">
                                <div class="hero-video-wrapper">
                                    <iframe 
                                        src="https://www.youtube.com/embed/MLpWrANjFbI?autoplay=1&mute=1&loop=1&playlist=MLpWrANjFbI&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1" 
                                        title="YouTube video player" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        referrerpolicy="strict-origin-when-cross-origin" 
                                        allowfullscreen
                                        class="hero-video"
                                    ></iframe>
                                </div>
                                <!-- Fallback para imagem -->
                                <img src="{{ asset('storage/' . $slide->path_image) }}" alt="{{ $slide->title }}" title="{{ $slide->title }}" class="hero-fallback">
                            </div>

                            <!-- Conteúdo -->
                            <div class="hero-content mt-5 mt-lg-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="hero-subtitle font-changa font-15 font-regular">
                                                {!! $slide->description !!}
                                            </span>

                                            <h1 class="hero-title font-changa font-40 font-bold">
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
