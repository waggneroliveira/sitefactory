<header class="border-bottom bg-transparent fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand me-5" href="#">
                <img src="{{asset('storage/' .$theme->path_image_logo_header)}}" alt="Girollato" height="40">
            </a>

            <!-- Mobile -->
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mx-auto align-items-lg-center gap-1">

                    <li class="nav-item">
                        <a class="nav-link text-white font-changa font-16 font-regular font-header active position-relative" href="#">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white font-changa font-16 font-regular font-header" href="#">
                            Quem Somos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white font-changa font-16 font-regular font-header" href="#">
                            Imóveis
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white font-changa font-16 font-regular font-header" href="#">
                            Engenharia
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white font-changa font-16 font-regular font-header" href="#">
                            Blog
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white font-changa font-16 font-regular font-header" href="#">
                            Contato
                        </a>
                    </li>

                </ul>

                <!-- Botões -->
                <div class="d-flex align-items-center gap-3">

                    <a href="#" class="btn btn-outline-info rounded-pill px-4">
                        Simule Aqui
                    </a>

                </div>

            </div>

        </div>
    </nav>
</header>
