@if ($depoiments->count())
    <section id="depoiment" class="depoiment py-5 position-relative">
        <img src="{{asset('build/client/images/firula-blog.svg')}}" alt="Firula blog" class="firula-blog position-absolute top-0 left-0">
        <div class="container z-3 position-relative">
            <span class="blog-subtitle color-yellow font-changa font-16 font-bold d-block mb-2 m-auto me-0">
                Experiência de quem viveu!
            </span>

            <h3 class="about-title font-changa font-50 font-bold color-green mb-3 text-center">
                Depoimentos
            </h3>
        </div>
        <div class="col-11 m-auto me-0">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    @foreach ($depoiments as $depoiment)                    
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                @if ($depoiment->path_image <> null)                                
                                    <div class="icon mb-3">
                                        <img src="{{asset('storage/' . $depoiment->path_image)}}" alt="Depoimento-{{$depoiment->id}}">
                                    </div>
                                @endif

                                <div class="text color-grey font-changa font-16 font-regular text-start">
                                    {!!$depoiment->text!!}
                                </div>

                                <div class="author">
                                    <h5 class="color-green font-changa font-16 font-medium mb-0 mt-3">{{$depoiment->name}}</h5>
                                    <span class="color-grey font-changa font-16 font-regular">{{$depoiment->function}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Dots -->
                <div class="swiper-pagination mt-4 position-relative d-flex justify-content-center align-items-center"></div>
            </div>
        </div>
    </section>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonial-swiper', {
                loop: true,
                spaceBetween: 24,
                pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
                breakpoints: {
                0: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2.5,
                }
            }
        });
    });
</script>