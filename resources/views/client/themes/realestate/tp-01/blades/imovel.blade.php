@extends('client.themes.core.client')

@section('content')


    <div class="banner-inner blog container-fluid d-flex justify-content-center align-items-center flex-column position-relative" style="--banner-bg: url('../images/banner-product.png');">
        <span class="color-yellow font-changa font-16 font-bold position-relative z-3 text-center">Produtos </span>
        <h1 class="font-mobi font-changa font-40 font-bold text-white position-relative z-3 mt-2">Catálogo</h1>
        <p class="font-changa text-center font-15 font-regular text-white position-relative z-3">Confira aqui a seleção dos nossos melhores produtos.</p>
    </div>
 
    <div class="container my-5">
        <div class="row g-4">
            <!-- GALERIA -->
            <div class="col-lg-5">
               <div class="step-actions mt-4 d-flex justify-content-start mb-3">
                  <a href="" class="rounded-3 py-1 px-3 btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                        <svg class="me-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.23696 0L-3.8147e-05 6.237L6.23696 12.474L8.00411 10.7069L3.55505 6.237L8.0249 1.76715L6.23696 0Z" fill="#0E523E"/>
                        </svg>

                        Voltar
                  </a>
               </div>
               <div class="product-gallery p-0">
                  
                     <div class="custom-gallery-carousel position-relative">
                        <div class="swiper gallery-top border rounded-2">
                           <div class="swiper-wrapper">
                                 <div class="swiper-slide d-flex justify-content-center align-items-center"><img src="{{asset('build/client/images/imv.jpg')}}" loading="lazy" alt="Imagem 1" /></div>
                                 <div class="swiper-slide d-flex justify-content-center align-items-center"><img src="{{asset('build/client/images/imv-1.jpg')}}" loading="lazy" alt="Imagem 1" /></div>
                                 <div class="swiper-slide d-flex justify-content-center align-items-center"><img src="{{asset('build/client/images/imv-2.avif')}}" loading="lazy" alt="Imagem 1" /></div>
                           </div>
                        </div>

                        <!-- Fim das setas -->
                        <div class="mt-3 100 gap-1">
                           <div class="swiper gallery-thumbs w-100">
                                 <div class="swiper-wrapper d-flex justify-content-center align-items-center">
                                    <div class="swiper-slide thumbs-width"><img src="{{asset('build/client/images/imv.jpg')}}" loading="lazy" alt="Thumb 1" class="w-100 h-100 cover" /></div>
                                    <div class="swiper-slide thumbs-width"><img src="{{asset('build/client/images/imv-1.jpg')}}" loading="lazy" alt="Thumb 1" class="w-100 h-100 cover" /></div>
                                    <div class="swiper-slide thumbs-width"><img src="{{asset('build/client/images/imv-2.avif')}}" loading="lazy" alt="Thumb 1" class="w-100 h-100 cover" /></div>
                                 </div>
                           </div>
                        </div>
                        <!-- Setas de navegação do Swiper -->
                        <div class="navigation-swiper">
                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
               </div>
            </div>
            <!-- INFO PRODUTO -->            
            <div class="col-lg-7"> {{-- {{ !$product->galleries->count() ? 'w-100' : '' }} --}}

                <h2 class="font-mobi font-changa text-center text-lg-start font-48 font-bold color-green">Casa Riviera</h2>

                <div class="mb-2 text-center text-lg-start ">
                    <span class="font-changa font-12 bg-yellow px-2 rounded-0 font-medium color-green">Lançamento</span>
                    <span class="font-changa font-12 bg-yellow px-2 rounded-0 font-medium color-green">A Venda</span>
                </div>

                <p class="color-grey text-center text-lg-start font-changa font-16 font-regular">
                    Cães Adultos Raças Médias e Grandes
                </p>

                <!-- TAMANHOS -->
                <div class="mb-3">
                    <div class="row flex-column justify-content-center justify-content-lg-start mt-3">
                        <div class="btn-group m-auto m-lg-0 col-12" role="group">
                            <ul class="list-unstyled d-flex justify-content-center justify-content-lg-start gap-3">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-bed me-2"></i>
                                    4 quartos
                                </li>

                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-bath me-2"></i>
                                    3 banheiros
                                </li>

                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-couch me-2"></i>
                                    Sala de estar
                                </li>

                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-utensils me-2"></i>
                                    Cozinha
                                </li>

                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-car me-2"></i>
                                    Garagem
                                </li>

                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-tree me-2"></i>
                                    Área externa
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-center justify-content-lg-start mt-3 mt-lg-0 align-items-center col-12">
                            
                            <div class="w-auto m-auto m-lg-0 mt-3 mt-lg-0 d-flex justify-content-center gap-2 align-items-center btn-header btn bg-yellow rounded-3 px-3">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.6741 10.0755C11.5016 9.96226 11.3291 9.90566 11.1565 10.1321L10.4665 11.0377C10.2939 11.1509 10.1789 11.2075 9.94888 11.0943C9.08626 10.6415 7.87859 10.1321 6.84345 8.43396C6.78594 8.20755 6.90096 8.09434 7.01597 7.98113L7.53355 7.18868C7.64856 7.07547 7.59105 6.96226 7.53355 6.84906L6.84345 5.20755C6.67093 4.75472 6.4984 4.81132 6.32588 4.81132H5.86581C5.7508 4.81132 5.52077 4.86792 5.29073 5.09434C4.02556 6.33962 4.54313 8.09434 5.46326 9.22642C5.63578 9.45283 6.78594 11.4906 9.25879 12.566C11.099 13.3585 11.5016 13.2453 12.0192 13.1321C12.6518 13.0755 13.2843 12.566 13.5719 12.0566C13.6294 11.8868 13.9169 11.1509 13.6869 11.0377M9.14377 16.3585C6.78594 16.3585 5.00319 15.1132 5.00319 15.1132L2.1853 15.8491L2.8754 13.1321C2.8754 13.1321 1.72524 11.3774 1.72524 9.16981C1.72524 5.09434 5.11821 1.69811 9.31629 1.69811C13.2268 1.69811 16.5623 4.69811 16.5623 8.88679C16.5623 12.9623 13.2268 16.3019 9.14377 16.3585ZM0 18L4.77316 16.6981C6.15555 17.3947 7.69626 17.7309 9.24823 17.6747C10.8002 17.6184 12.3116 17.1715 13.6382 16.3768C14.9648 15.582 16.0622 14.4658 16.8259 13.1347C17.5895 11.8037 17.9937 10.3022 18 8.77359C18 3.90566 14.0895 0 9.14377 0C7.55639 0.00399723 5.99777 0.417245 4.62313 1.19859C3.24848 1.97993 2.10579 3.10211 1.30885 4.45336C0.511907 5.80461 0.0885224 7.33778 0.0808596 8.9002C0.0731969 10.4626 0.481524 11.9997 1.26518 13.3585" fill="var(--green-color)"></path>
                                </svg>
    
                                <a href="#" class="font-changa color-green font-16 font-medium text-decoration-none">
                                    Tenho interesse!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="my-4">

                <!-- DESCRIÇÃO -->
                <div class="product-description">
                    <span class="desc-title bg-green text-white font-changa font-20 font-medium py-1 px-4 rounded-2 ms-4 position-relative">Descrição</span>

                    <div class="description rounded-3 p-4 mt-1">
                        <div class="color-grey font-changa font-16 font-regular">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        .product-description .desc-title:before{
            border-top: 15px solid var(--green-color);
        }
        .gallery-top .swiper-slide img{
            width: 524px;
            object-fit: cover;
        }
        .gallery-thumbs .swiper-slide img{
            object-fit: cover;
            max-width: 125px;
        }
        .gallery-thumbs .swiper-slide-thumb-active{
            border: inherit;
        }
        .thumbs-width{
            height: 110px !important;
        }
        .navigation-swiper{
            bottom: 58px;
        }
    </style>
@endsection