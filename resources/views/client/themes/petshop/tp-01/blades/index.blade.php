@extends('client.themes.petshop.tp-01.core.client')

@section('content')

    {{-- Section Hero --}}
    @include('client.themes.petshop.tp-01.component.slide', ['slides' => $slides])
    
    {{-- Section Topic --}}
    @include('client.themes.petshop.tp-01.component.topic', ['topics' => $topics])

    {{-- Section About --}}
    @include('client.themes.petshop.tp-01.component.about', ['about' => $about])

    {{-- Section parameter --}}
    @include('client.themes.petshop.tp-01.component.parameter', ['statute' => $statute])

    {{-- Section Step to step --}}
    @include('client.themes.petshop.tp-01.component.steptostep', ['benefitTopics' => $benefitTopics])

    {{-- Section LetsGo --}}
    @include('client.themes.petshop.tp-01.component.letsgo', ['benefitTopics' => $benefitTopics])

    {{-- Section ProductCategory--}}
    @include('client.themes.petshop.tp-01.component.productcategoriehighlight', ['productCategorieHighlights' => $productCategorieHighlights])

    {{-- Section Product --}}
    @include('client.themes.petshop.tp-01.component.productshome', ['products' => $products])

    {{-- Section Blog --}}
    @include('client.themes.petshop.tp-01.component.blogshome', ['blogHighlights' => $blogHighlights])

    {{-- Section Faq --}}
    @include('client.themes.petshop.tp-01.component.faq', ['sessaoFaq' => $sessaoFaq, 'faqs' => $faqs])

    {{-- Section Depoiments --}}
    @include('client.themes.petshop.tp-01.component.depoiments', ['depoiments' => $depoiments])
 
@endsection
