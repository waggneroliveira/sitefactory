<header class="fixed-top">
    <nav class="navbar navbar-expand navbar-light container-fluid py-0 pe-5 bg-transparent">            
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center px-5 py-4 bg-white me-0" href="{{route('index')}}" width="250">
            <img src="{{asset('storage/' .$theme->path_image_logo_header)}}" alt="Girollato" height="62">
        </a>

        <!-- Toggle mobile - Estilo hambúrguer -->
        <button class="menu-toggle flex-row d-flex gap-2 justify-content-center align-items-center" id="menuToggle" aria-label="Menu">
            <span class="menu-title">Menu</span>
            <div class="d-flex flex-column gap-2">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </button>

        <!-- Menu Overlay -->
        <div class="menu-overlay" id="menuOverlay">
            <div class="menu-container bg-yellow">
                <div class="menu-header">
                    <a class="" href="{{route('index')}}" width="250">
                        <img src="{{asset('storage/' .$theme->path_image_logo_header)}}" alt="Girollato" height="62">
                    </a>
                </div>

                <ul class="menu-nav">
                    <li class="menu-item">
                        <a class="menu-link active" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#about">Sobre Nós</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#faq">FAQ</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#depoiment">Depoimentos</a>
                    </li>
                </ul>

                <div class="menu-footer">
                    <a href="#" class="menu-btn-agendar">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        Entrar em contato
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const menuOverlay = document.getElementById('menuOverlay');
    const menuClose = document.getElementById('menuClose');
    const header = document.querySelector('header');

    // Abrir menu
    menuToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        document.body.style.overflow = 'hidden';
    });

    // Fechar menu
    function closeMenu() {
        menuToggle.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    menuClose.addEventListener('click', closeMenu);

    // Fechar ao clicar no overlay
    menuOverlay.addEventListener('click', function(e) {
        if (e.target === this) {
            closeMenu();
        }
    });

    // Fechar ao clicar em um link
    document.querySelectorAll('.menu-link').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Scroll effect
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
});
</script>