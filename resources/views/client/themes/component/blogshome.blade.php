@if ($blogHighlights->count())
    <section class="blog position-relative">
        <img src="{{asset('build/client/images/firula-blog.svg')}}" alt="Firula blog" class="firula-blog position-absolute top-0 left-0">
        <div class="container z-3 position-relative">
            <span class="blog-subtitle color-yellow font-changa font-16 font-bold d-block mb-2 m-auto me-0">
                Conheça aqui!
            </span>

            <h3 class="about-title font-changa font-50 font-bold color-green mb-3 text-center">
                Novidades <span class="color-grey">e artigos</span>
            </h3>

            <div class="row g-4 mt-5">

                <div class="swiper blog-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($blogHighlights as $blogHighlight)                        
                            <div class="swiper-slide">
                                <article class="post-card">
                                    <a href="{{route('blog-inner', ['slug' => $blogHighlight->slug])}}">
                                        <img src="{{asset('storage/' . $blogHighlight->path_image_thumbnail)}}" alt="">
                                        <div class="post-overlay">
                                            <h5 class="font-changa font-18 font-bold text-white mb-3">
                                                {{$blogHighlight->title}}
                                            </h5>
                                            <p class="font-16 font-regular text-white mb-3">
                                                {{substr(strip_tags($blogHighlight->text), 0, 100)}}
                                            </p>
                                            <span class="date font-16 font-regular text-white">
                                                {{ $blogHighlight->date->translatedFormat('d M Y') }}
                                            </span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Dots -->
                <div class="swiper-pagination-blog mt-4 position-relative d-flex justify-content-center align-items-center"></div>

            </div>

            <!-- Botão -->
            <div class="step-actions mt-4 d-flex justify-content-center justify-content-lg-end">
                <a href="{{route('blogAll')}}" class="rounded-pill px-4 btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                    Ver todos os artigos
                    <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.blog-swiper', {
                spaceBetween: 24,
                pagination: {
                el: '.swiper-pagination-blog',
                clickable: true,
            },
                breakpoints: {
                0: {
                    slidesPerView: 1.3,
                },
                576: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 4,
                    allowTouchMove: false,
                }
            }
        });
    });
</script>