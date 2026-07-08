<header class="fixed-top mt-4">
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light container p-3 bg-yellow rounded-2">            
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{route('index')}}">
            <img src="{{asset('storage/' .$theme->path_image_logo_header)}}" alt="Girollato" height="40">
        </a>

        <!-- Toggle mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto m-auto me-4 mb-2 mb-lg-0 gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link font-changa font-18 font-semibold font-header active" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-changa font-18 font-semibold font-header" href="{{route('about')}}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-changa font-18 font-semibold font-header" href="{{ request()->routeIs('index') ? '#depoiment' : route('index') . '#depoiment' }}">Depoimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-changa font-18 font-semibold font-header" href="{{ request()->routeIs('about') ? '#team-section' : route('about') . '#team-section' }}">Representantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-changa font-18 font-semibold font-header" href="{{route('products')}}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-changa font-18 font-semibold font-header" href="{{route('contact')}}">Contato</a>
                </li>
            </ul>

            <!-- Botão -->
            <div class="d-flex justify-content-center gap-2 align-items-center btn-header btn bg-yellow rounded-pill px-4">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.6741 10.0755C11.5016 9.96226 11.3291 9.90566 11.1565 10.1321L10.4665 11.0377C10.2939 11.1509 10.1789 11.2075 9.94888 11.0943C9.08626 10.6415 7.87859 10.1321 6.84345 8.43396C6.78594 8.20755 6.90096 8.09434 7.01597 7.98113L7.53355 7.18868C7.64856 7.07547 7.59105 6.96226 7.53355 6.84906L6.84345 5.20755C6.67093 4.75472 6.4984 4.81132 6.32588 4.81132H5.86581C5.7508 4.81132 5.52077 4.86792 5.29073 5.09434C4.02556 6.33962 4.54313 8.09434 5.46326 9.22642C5.63578 9.45283 6.78594 11.4906 9.25879 12.566C11.099 13.3585 11.5016 13.2453 12.0192 13.1321C12.6518 13.0755 13.2843 12.566 13.5719 12.0566C13.6294 11.8868 13.9169 11.1509 13.6869 11.0377M9.14377 16.3585C6.78594 16.3585 5.00319 15.1132 5.00319 15.1132L2.1853 15.8491L2.8754 13.1321C2.8754 13.1321 1.72524 11.3774 1.72524 9.16981C1.72524 5.09434 5.11821 1.69811 9.31629 1.69811C13.2268 1.69811 16.5623 4.69811 16.5623 8.88679C16.5623 12.9623 13.2268 16.3019 9.14377 16.3585ZM0 18L4.77316 16.6981C6.15555 17.3947 7.69626 17.7309 9.24823 17.6747C10.8002 17.6184 12.3116 17.1715 13.6382 16.3768C14.9648 15.582 16.0622 14.4658 16.8259 13.1347C17.5895 11.8037 17.9937 10.3022 18 8.77359C18 3.90566 14.0895 0 9.14377 0C7.55639 0.00399723 5.99777 0.417245 4.62313 1.19859C3.24848 1.97993 2.10579 3.10211 1.30885 4.45336C0.511907 5.80461 0.0885224 7.33778 0.0808596 8.9002C0.0731969 10.4626 0.481524 11.9997 1.26518 13.3585" fill="var(--green-color)"/>
                </svg>

                <a href="#" class="font-changa color-green font-16 font-medium text-decoration-none">
                    Entrar em contato
                </a>
            </div>
        </div>
    </nav>
</header>

<div class="modal fade" id="modalDownloadFicha" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-green">

            <form id="formDownloadFicha">
                @csrf

                <div class="modal-header flex-column">
                    <div class="d-flex justify-content-end col-12">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <img src="{{asset('build/client/images/girollato-footer.svg')}}" alt="Girollato" height="40">
                    <h5 class="modal-title text-white font-changa font-20 font-medium mt-3">Preencha o formulário para baixar o arquivo</h5>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label text-white font-changa font-15 font-regular">Nome</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label class="form-label text-white font-changa font-15 font-regular">CNPJ</label>
                            <input type="text" inputmode="numeric" name="cnpj" id="cnpj" class="form-control" required>
                        </div>

                        <div class="mb-3 col-12 col-lg-6">
                            <label class="form-label text-white font-changa font-15 font-regular">Telefone</label>
                            <input type="text" inputmode="numeric" name="phone" id="phone" class="form-control" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn bg-yellow border">
                        Baixar arquivo
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const modal = new bootstrap.Modal(document.getElementById('modalDownloadFicha'));
        const form = document.getElementById('formDownloadFicha');

        let currentFile = null;

        document.querySelectorAll('.btn-download-ficha').forEach(button => {

            button.addEventListener('click', function(e){

                e.preventDefault();

                currentFile = this.getAttribute('href');

                modal.show();

            });

        });

        form.addEventListener('submit', function(e){

            e.preventDefault();

            const formData = new FormData(form);

            fetch("{{ route('download.ficha.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name=_token]').value
                },
                body: formData
            })
            .then(res => res.json())
            .then(res => {

                if(res.success){

                    modal.hide();

                    // FORÇA DOWNLOAD
                    const link = document.createElement('a');
                    link.href = currentFile;
                    link.setAttribute('download', '');
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);

                    form.reset();

                }

            });

        });

    });

    // mascara CNPJ
    function maskCNPJ(value) {

        value = value.replace(/\D/g, '');

        value = value.replace(/^(\d{2})(\d)/, '$1.$2');
        value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
        value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
        value = value.replace(/(\d{4})(\d)/, '$1-$2');

        return value.substring(0, 18);
    }


    // mascara celular
    function maskPhone(value) {

        value = value.replace(/\D/g, '');

        value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
        value = value.replace(/(\d{5})(\d)/, '$1-$2');

        return value.substring(0, 15);
    }


    // aplicar máscaras
    document.addEventListener('DOMContentLoaded', function () {

        const cnpj = document.getElementById('cnpj');
        const phone = document.getElementById('phone');

        if(cnpj){
            cnpj.addEventListener('input', function(){
                this.value = maskCNPJ(this.value);
            });
        }

        if(phone){
            phone.addEventListener('input', function(){
                this.value = maskPhone(this.value);
            });
        }

    });
</script>