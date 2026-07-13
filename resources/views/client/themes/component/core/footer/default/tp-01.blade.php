<footer class="bg-yellow text-white pt-5 pb-3">
    <div class="container">

        <!-- Linha principal -->
        <div class="row align-items-start">

            <!-- Logo + botão -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="{{asset('storage/' .$theme->path_image_logo_footer)}}" alt="Girollato" height="40">

                <div class="mt-5">
                    <a href="{{ request()->routeIs('about') ? '#team-section' : route('about') . '#team-section' }}" class="border-btn-footer btn bg-yellow px-4 py-2 rounded-pill font-changa color-green font-16 font-medium text-decoration-none">
                        Encontrar Representantes
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Mapa do site -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h6 class="font-changa font-16 font-bold mb-3 position-relative d-inline-block font-changa font-16 font-medium">
                    Mapa do Site
                    <span class="d-block bg-yellow mt-1" style="height:3px; width:40px;"></span>
                </h6>

                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="{{route('index')}}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Início</a></li>
                            <li><a href="{{route('about')}}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Quem Somos</a></li>
                            <li><a href="{{ request()->routeIs('index') ? '#stats-section' : route('index') . '#stats-section' }}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Diferenciais</a></li>
                            <li><a href="{{route('blogAll')}}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Blog</a></li>
                            <li><a href="{{route('products')}}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Produtos</a></li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ request()->routeIs('index') ? '#depoiment' : route('index') . '#depoiment' }}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Depoimentos</a></li>
                            <li><a href="{{ request()->routeIs('index') ? '#faq' : route('index') . '#faq' }}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">FAQ</a></li>
                            <li><a href="{{route('contact')}}" class="font-changa font-16 font-regular text-white text-decoration-none d-block mb-2">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Redes sociais -->
            @if ($contact && (
                $contact->link_insta ||
                $contact->link_face ||
                $contact->link_tik_tok
            ))
                <div class="col-lg-2 text-lg-end">
                    <div class="d-flex gap-3 justify-content-lg-end">
                        @if ($contact->link_insta <> null)                            
                            <a href="{{$contact->link_insta}}" target="_blank" rel="noopener noreferrer" class="text-white fs-5">
                                <i class="bi bi-instagram"></i>
                            </a>
                        @endif
                        @if ($contact->link_face <> null)                            
                            <a href="{{$contact->link_face}}" target="_blank" rel="noopener noreferrer" class="text-white fs-5">
                                <i class="bi bi-facebook"></i>
                            </a>
                        @endif
                        @if ($contact->link_tik_tok <> null)                            
                            <a href="{{$contact->link_tik_tok}}" target="_blank" rel="noopener noreferrer" class="text-white fs-5">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        @endif
                    </div>
                </div>
            @endif

        </div>

        <!-- Linha inferior -->
        <hr class="border-light opacity-25 my-4">

        <div class="row align-items-center">

            <div class="col-md-10 small">
                <div class="d-flex flex-wrap col-12 font-changa font-16 font-regular text-center text-lg-end justify-content-center justify-content-lg-end">
                    <p id="footer-text"></p>                        
                </div>

                <script defer>
                    const currentYeaar = (new Date).getFullYear();
                    document.getElementById("footer-text").innerHTML = `© ${currentYeaar} <span> Transportes e Atacadista de Rações LTDA.
                Todos os direitos reservados.</span> <a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank" class="text-white font-semibold">| Política de Privacidade</a>`
                </script>
            </div>

            <div class="col-12 col-md-2 text-center text-md-end mt-3 mt-md-0">
                <a href="http://www.whi.dev.br" target="_blank" rel="noopener noreferrer">
                    <img src="{{asset('build/client/images/whi.svg')}}" alt="Agência WHI" style="height:35px;">
                </a>
            </div>

        </div>

    </div>
</footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
