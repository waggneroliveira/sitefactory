<section id="faq" class="faq-section pt-5 bg-grey-light">
    <div class="container">
        <div class="row align-items-start g-5">
        @if (isset($sessaoFaq) && $sessaoFaq <> null)
            <!-- COLUNA ESQUERDA -->
            <div class="col-lg-5">
                <!-- Header -->
                <div class="mb-4">
                    <span class="about-subtitle faq-eyebrow color-yellow font-changa font-16 font-bold d-block mb-2 text-end m-0 z-3 position-relative">
                        Conheça Aqui!
                    </span>

                    <h3 class="faq-title font-changa font-50 font-bold color-green mb-3">
                        {{$sessaoFaq->title}} <span class="color-grey">{{$sessaoFaq->subtitle}}</span>
                    </h3>
                </div>

                <div class="faq-text color-grey font-changa font-16 font-regular text-center text-lg-start">
                    {!!$sessaoFaq->description!!}
                </div>

                @if ($sessaoFaq->btn_title <> null && $sessaoFaq->btn_number <> null)                
                    <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                        <a href="{{$sessaoFaq->btn_number}}" class="btn btn-faq btn-product bg-green rounded-pill px-4 text-white">
                            {{$sessaoFaq->btn_title}}
                            <svg class="ms-2" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.4451 4.325e-05C9.23037 4.325e-05 6.01638 1.22269 3.56813 3.67104V3.6769C-0.397625 7.64665 -1.07437 13.7219 1.62183 18.5939L0.752675 23.3312H0.753652C0.705799 23.586 0.786854 23.8468 0.970449 24.0294C1.15307 24.213 1.4138 24.2931 1.66772 24.2462L6.40497 23.3771C11.277 26.0743 17.3572 25.3976 21.327 21.4307C26.2245 16.5343 26.2245 8.5675 21.327 3.67C18.8787 1.22272 15.6599 4.325e-05 12.4451 4.325e-05ZM12.4451 1.55669C15.2556 1.55669 18.0671 2.63482 20.2166 4.78319C24.5144 9.08019 24.5144 16.0214 20.2166 20.3194C16.6259 23.9064 11.0554 24.5744 6.72337 21.9298H6.7224C6.55834 21.8292 6.36205 21.7921 6.1726 21.8263L2.5016 22.4972L3.17445 18.8262C3.2096 18.6367 3.17445 18.4404 3.07484 18.2754C0.430339 13.9434 1.09144 8.37415 4.67934 4.78315C6.82779 2.6347 9.63534 1.55665 12.4458 1.55665L12.4451 1.55669ZM12.4451 5.11919C9.69512 5.11919 7.45288 7.37504 7.45288 10.1339H7.45385C7.45483 10.5646 7.80443 10.9132 8.2351 10.9152C8.44311 10.9162 8.64233 10.8341 8.79078 10.6877C8.93824 10.5412 9.02125 10.342 9.02222 10.134C9.02222 8.21793 10.5486 6.6877 12.445 6.6877C14.3413 6.6877 15.866 8.21798 15.866 10.134C15.866 11.7336 14.7898 13.0665 13.3405 13.463C12.4694 13.7012 11.6569 14.4376 11.6569 15.4903V17.0304H11.6578C11.6569 17.2393 11.7399 17.4395 11.8873 17.588C12.0348 17.7354 12.236 17.8184 12.445 17.8175C12.653 17.8165 12.8522 17.7335 12.9987 17.586C13.1452 17.4376 13.2272 17.2384 13.2262 17.0304V15.4903C13.2262 15.2979 13.4342 15.0626 13.7536 14.9757H13.7594C15.8825 14.3946 17.4304 12.4377 17.4304 10.1339C17.4304 7.37515 15.195 5.11919 12.4451 5.11919ZM12.4217 18.5019C11.9539 18.5137 11.5672 18.9062 11.5672 19.374C11.5672 19.8486 11.9676 20.2471 12.4451 20.2471C12.9226 20.2471 13.3172 19.8486 13.3172 19.374C13.3172 18.8994 12.9227 18.5019 12.4451 18.5019H12.4217Z" fill="#10513D"/>
                            </svg>
                        </a>
                    </div>
                @endif

                <div class="faq-image mt-0">
                    <img src="{{asset('build/client/images/faq.png')}}" alt="Entrega" class="img-fluid">
                </div>
            </div>
        @endif

        <!-- COLUNA DIREITA -->
        <div class="col-lg-7">
            <div class="accordion" id="faqAccordion">

                <!-- ITEM ATIVO -->

                @foreach ($faqs as $faq)     
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed font-changa font-16 font-regular"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq-{{$faq->id}}">
                            {{$faq->question}}
                        </button>
                        </h2>
                        <div id="faq-{{$faq->id}}" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                            <div class="accordion-body font-changa font-16 font-regular">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>    
                @endforeach

            </div>
        </div>

        </div>
    </div>
</section>