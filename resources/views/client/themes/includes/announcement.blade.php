{{-- Carrossel para MOBILE
<div class="col-12 d-block d-sm-none">
    <div class="swiper announcement-mobile w-100">
        <div class="swiper-wrapper">
            @foreach ($announcements->where('exhibition', 'mobile') as $announcement)
                <div class="swiper-slide py-0">
                    <div class="image rounded-0 overflow-hidden">
                        @if (!empty($announcement->link))
                            <a href="{{ $announcement->link }}" target="_blank" rel="nofollow noopener noreferrer">
                                <img src="{{ asset('storage/' . $announcement->path_image) }}"
                                     alt="Anuncio-{{ $announcement->id }}" class="w-100">
                            </a>
                        @else
                            <img src="{{ asset('storage/' . $announcement->path_image) }}"
                                 alt="Anuncio-{{ $announcement->id }}" class="w-100">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

Carrossel para DESKTOP
<div class="col-12 d-none d-sm-block">
    <div class="swiper announcement-desktop w-100">
        <div class="swiper-wrapper">
            @foreach ($announcements->where('exhibition', 'horizontal') as $announcement)
                <div class="swiper-slide py-0">
                    <div class="image rounded-0 overflow-hidden">
                        @if (!empty($announcement->link))
                            <a href="{{ $announcement->link }}" target="_blank" rel="nofollow noopener noreferrer">
                                <img src="{{ asset('storage/' . $announcement->path_image) }}"
                                     alt="Anuncio-{{ $announcement->id }}" class="w-100">
                            </a>
                        @else
                            <img src="{{ asset('storage/' . $announcement->path_image) }}"
                                 alt="Anuncio-{{ $announcement->id }}" class="w-100">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    @media (max-width: 576px) {
        .swiper.announcement-mobile{
            width: 95% !important;
        }
    }
</style> --}}


<section class="featured-banner py-5">
    <div class="container">

        <a href="#" class="d-block position-relative rounded-4 featured-banner__card">

            <!-- Imagem -->
            <img
                src="{{asset('build/client/images/slide.jpg')}}"
                class="featured-banner__image"
                alt="Marina Vista">

            <!-- Overlay -->
            <div class="featured-banner__overlay">

                <div class="row align-items-center h-100 position-relative z-3">

                    <div class="col-lg-4">

                        <span class="featured-banner__tag d-block font-changa font-15 font-semibold text-uppercase color-yellow p-0 text-start mb-3">
                            Lançamento
                        </span>

                        <h2 class="featured-banner__title font-changa font-24 font-semibold text-white">
                            Viva o extraordinário todos os dias
                        </h2>

                        <p class="featured-banner__description font-changa font-15 font-regular">
                            Apartamentos na planta com lazer completo,
                            localização privilegiada e condições especiais.
                        </p>

                        <button class="btn featured-banner__button font-15 font-regular bg-yellow color-green rounded-2 px-3">
                            Quero saber mais
                        </button>

                    </div>

                    <div class="col-lg-4 text-center">

                        <img
                            src="{{asset('build/client/images/lg.png')}}"
                            class="featured-banner__logo"
                            alt="Marina Vista">

                    </div>

                    <div class="col-lg-4">

                        <!-- Espaço vazio para destacar a imagem -->
                    </div>

                </div>

            </div>

        </a>

    </div>
</section>