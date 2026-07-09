@extends('client.themes.core.client')

@section('content')

    {{-- Section Hero --}}
    @include("client.themes.component.slide.{$theme->slug}.{$theme->template_variation}", ['slides' => $slides])
    
    {{-- Section Topic --}}
    @include('client.themes.component.topic', ['topics' => $topics])

    {{-- Section About --}}
    @include("client.themes.component.about.{$theme->slug}.{$theme->template_variation}", ['about' => $about])

    {{-- Section parameter --}}
    @include('client.themes.component.parameter', ['statute' => $statute])

    {{-- Section Step to step --}}
    @include('client.themes.component.steptostep', ['benefitTopics' => $benefitTopics])

    {{-- Section LetsGo --}}
    @include('client.themes.component.letsgo', ['benefitTopics' => $benefitTopics])

    {{-- Section ProductCategory--}}
    @include('client.themes.component.productcategoriehighlight', ['productCategorieHighlights' => $productCategorieHighlights])

    {{-- Section Product --}}
    @include('client.themes.component.productshome', ['products' => $products])

    {{-- Section Blog --}}
    @include('client.themes.component.blogshome', ['blogHighlights' => $blogHighlights])

    {{-- Section Faq --}}
    @include('client.themes.component.faq', ['sessaoFaq' => $sessaoFaq, 'faqs' => $faqs])

    {{-- Section Depoiments --}}
    @include('client.themes.component.depoiments', ['depoiments' => $depoiments])
 
@endsection
