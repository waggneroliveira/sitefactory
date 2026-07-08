<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0d0d0d">
    <meta name="description" content="A Girollato é uma distribuidora especializada em rações, alimentos e artigos pet, oferecendo produtos de qualidade para cães, gatos e outros animais com variedade, cuidado e confiança.">
    <meta name="keywords" content="Girollato, distribuidora de rações, artigos pet, produtos pet, ração para cães, ração para gatos, acessórios pet, pet shop, alimentos para animais, higiene pet, brinquedos para pets, areia para gatos, distribuidora pet, casa de ração, produtos para cães e gatos, pet store, ração premium, produtos pet em Lauro de Freitas, distribuidora de rações Bahia">    <meta name="google-site-verification" content="-bUd4PZJ-3xvnf7cOkcmNLV7jzTk5106hfB0mPtvhqE" />
    <title>Girollato</title>
    @if(isset($blogInner))
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $blogInner->title }}">
        <meta property="og:description" content="{{ Str::limit(strip_tags($blogInner->text), 150) }}">
        <meta property="og:image" content="{{ asset('storage/' . $blogInner->path_image_thumbnail) }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $blogInner->title }}">
        <meta name="twitter:description" content="{{ Str::limit(strip_tags($blogInner->text), 150) }}">
        <meta name="twitter:image" content="{{ asset('storage/' . $blogInner->path_image_thumbnail) }}">
    @else
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Girollato">
        <meta property="og:description" content="A Girollato é uma distribuidora especializada em rações, alimentos e artigos pet, oferecendo produtos de qualidade para cães, gatos e outros animais com variedade, cuidado e confiança.">
        <meta property="og:image" content="https://girolato.com.br/build/client/images/logo.svg">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="Girollato">
        <meta name="twitter:description" content="A Girollato é uma distribuidora especializada em rações, alimentos e artigos pet, oferecendo produtos de qualidade para cães, gatos e outros animais com variedade, cuidado e confiança.">
        <meta name="twitter:image" content="https://girolato.com.br/build/client/images/logo.svg">
    @endif

    
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="copyright" content="Direitos reservados WHI">
    <meta name="author" content="WHI">
    <link rel="shortcut icon" href="https://girolato.com.br/build/client/images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" onload='this.onload=null,this.rel="stylesheet"'>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap">
    </noscript>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"></noscript>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>
    <link href="{{ asset('build/client/lgpd/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="{{ asset('build/client/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="preload" href="{{ asset('build/client/css/bootstrap-icons/bootstrap-icons.css') }}" as="style" onload="this.rel='stylesheet'">
    <link href="{{ asset('build/client/css/default.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset("build/client/css/{$theme->template_variation}/style.css") }}">   
    <link href="{{ asset("build/client/css/{$theme->template_variation}/responsivo.css") }}" rel="stylesheet" type="text/css" />

    <script type=application/ld+json>
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "@id": "#organization",
            "name": "Girollato",
            "legalName": "Girollato",
            "url": "https://girolato.com.br/",
            "logo": "https://girolato.com.br/build/client/images/logo.svg",
            "image": "https://girolato.com.br/build/client/images/logo.svg",
            "description": "A Girollato é uma distribuidora especializada em rações, alimentos e artigos pet, oferecendo produtos de qualidade para cães, gatos e outros animais com variedade, cuidado e confiança.",
            "foundingDate": "2010",
            "email": "contato@girollato.com.br",
            "telephone": "+55 71 9 9623-8037",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Alameda Maji, 144 - Quingoma",
                "addressLocality": "Lauro de Freitas",
                "addressRegion": "BA",
                "postalCode": "42725-610",
                "addressCountry": "BR"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55 71 9 9623-8037",
                "contactType": "customer service",
                "email": "contato@girollato.com.br",
                "areaServed": "BR",
                "availableLanguage": ["pt", "en"]
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "17:00"
            },
            "slogan": "Girollato",
            "keywords": [
                "distribuidora de rações",
                "ração para cães",
                "ração para gatos",
                "artigos pet",
                "produtos pet",
                "acessórios para pets",
                "pet shop",
                "distribuidora pet",
                "alimentos para animais",
                "ração premium",
                "ração super premium",
                "produtos para cães e gatos",
                "brinquedos para pets",
                "higiene pet",
                "areia para gatos",
                "pet store",
                "distribuidor de produtos pet",
                "ração em Lauro de Freitas",
                "produtos pet em Lauro de Freitas",
                "distribuidora de rações Bahia",
                "produtos para animais domésticos",
                "suplementos pet",
                "petshop online",
                "casa de ração",
                "loja pet"
            ]
        }
    </script>
</head>
<body>
    <div id="organization" hidden></div>

    @include('client/themes/includes/lgpd/lgpd')

     @if (isset($contact) && $contact->phone_one <> null)
        @php
            // Remove caracteres não numéricos do telefone
            $phone = preg_replace('/\D/', '', $contact->phone_one);

            // Monta mensagem com ícones e quebras de linha
            $mensagem = "Olá! Encontrei seu site e gostaria de conhecer mais sobre os planos disponíveis.%0A";
        @endphp

        <a
            href="https://wa.me/55{{ $phone }}?text={{ $mensagem }}"
            class="whatsapp-float"
            aria-label="Fale conosco no WhatsApp"
            target="_blank"
            rel="noopener noreferrer"
            >
            <!-- Ícone SVG do WhatsApp -->
            <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M19.11 17.27c-.23-.12-1.37-.67-1.58-.75-.21-.08-.36-.12-.52.12-.16.23-.6.74-.74.89-.14.15-.27.17-.5.06-.23-.12-.97-.36-1.85-1.12-.68-.6-1.14-1.34-1.27-1.57-.13-.23-.01-.35.1-.47.1-.1.23-.27.35-.4.12-.13.16-.23.24-.39.08-.16.04-.3-.02-.42-.06-.12-.52-1.25-.71-1.72-.19-.46-.38-.4-.52-.4h-.45c-.16 0-.42.06-.64.3-.22.23-.84.82-.84 2 0 1.18.86 2.32.98 2.48.12.16 1.69 2.58 4.1 3.61.57.25 1.01.4 1.35.52.57.18 1.1.16 1.52.1.46-.07 1.37-.56 1.57-1.1.19-.54.19-1 .13-1.1-.06-.1-.21-.16-.44-.27zM16 3.2c-7.06 0-12.8 5.73-12.8 12.8 0 2.26.61 4.36 1.67 6.17L3.2 28.8l6.78-1.6c1.74.95 3.74 1.5 5.87 1.5 7.07 0 12.8-5.73 12.8-12.8S23.07 3.2 16 3.2zm0 22.94c-1.98 0-3.81-.58-5.35-1.57l-.38-.24-4.02.95.95-3.92-.25-.4a10.58 10.58 0 0 1-1.64-5.62c0-5.86 4.77-10.62 10.63-10.62S26.62 9.38 26.62 15.24 21.86 26.14 16 26.14z"/>
            </svg>
        </a>
    @endif
        
    <style>
        :root {
            --green-color: {{ $theme->primary_color ?? '#10513D' }};
            --yellow-color: {{ $theme->secondary_color ?? '#FDC20C' }};
            --gradient: {{ $theme->accent_color ?? 'rgb(16 81 61 / 50%)' }};
            --grey-color: {{ $theme->text_color ?? '#565656' }};
        }
        .whatsapp-float{
            position: fixed;
            bottom: 30%;
            right: 18px;
            transform: translateY(-30%);
            width: 56px;
            height: 56px;
            border-radius: 9999px;
            background: #25D366;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(0,0,0,.15);
            z-index: 9999;
            transition: transform .15s ease, filter .15s ease, box-shadow .15s ease;
        }
        .whatsapp-float svg{
            width: 40px;
            height: 40px;
            fill: #fff;
            display: block;
        }
        .whatsapp-float:hover{
            transform: translateY(-30%) scale(1.05);
            filter: brightness(1.05);
            box-shadow: 0 14px 32px rgba(0,0,0,.2);
        }
        /* Ajuste em telas menores */
        @media (max-width: 768px){
            .whatsapp-float{
            right: 12px;
            width: 52px;
            height: 52px;
            }
            .whatsapp-float svg{ width: 35px; height: 35px; }
        }
        /* Não mostrar na impressão */
        @media print{
            .whatsapp-float{ display: none; }
        }
        /* Respeita usuários com redução de movimento */
        @media (prefers-reduced-motion: reduce){
            .whatsapp-float{ transition: none; }
            .whatsapp-float:hover{ transform: translateY(-50%); }
        }
    </style>

    {{-- header tp-01 --}}
    @include("client.themes.component.core.header.{$theme->template_variation}")

    <main>
        @yield('content') 
    </main>

    {{-- header tp-01 --}}
    @include("client.themes.component.core.footer.{$theme->template_variation}")

    <script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('build/client/css/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('build/client/lgpd/script.js') }}"></script>
    <script src="{{ asset('build/client/js/default.js') }}"></script>

    {{-- Modais alert --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            let successMessage = @json(session('success'));
            let errorMessage = @json(session('error'));

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timerProgressBar: true,
                timer: 3000,
                didOpen: (toast) => {

                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);

                }
            });

            if (successMessage) {

                Toast.fire({
                    icon: 'success',
                    title: successMessage,
                    background: '#f0fdf4',
                    color: '#166534',
                    iconColor: '#22c55e'
                });

            }

            if (errorMessage) {

                Toast.fire({
                    icon: 'error',
                    title: errorMessage,
                    background: '#fef2f2',
                    color: '#991b1b',
                    iconColor: '#ef4444'
                });

            }

        });
    </script>
</body>
</html>