@extends('client.themes.core.client')

@section('content')

    {{-- Section Hero --}}
    @include("client.themes.component.slide.{$theme->slug}.{$theme->template_variation}", ['slides' => $slides])
    
    {{-- Section Topic --}}
    @include("client.themes.component.topic.{$theme->slug}.{$theme->template_variation}", ['topics' => $topics])

    {{-- Section About --}}
    @include("client.themes.component.about.{$theme->slug}.{$theme->template_variation}", ['about' => $about])

    {{-- Section parameter --}}
    @include("client.themes.component.parameter.{$theme->slug}.{$theme->template_variation}", ['statute' => $statute])

    {{-- Section Step to step --}}
    @include("client.themes.component.steptostep.{$theme->slug}.{$theme->template_variation}", ['benefitTopics' => $benefitTopics])

    {{-- Section LetsGo --}}
    @include("client.themes.component.paralax.{$theme->slug}.{$theme->template_variation}", ['benefitTopics' => $benefitTopics])

    {{-- Section ProductCategory--}}
    @include("client.themes.component.product.{$theme->slug}.home.category.{$theme->template_variation}", ['productCategorieHighlights' => $productCategorieHighlights])

    {{-- Section Product --}}
    @include("client.themes.component.product.{$theme->slug}.home.{$theme->template_variation}", ['products' => $products])

    {{-- Section Blog --}}
    @include("client.themes.component.blog.{$theme->slug}.home.{$theme->template_variation}", ['blogHighlights' => $blogHighlights])

    {{-- Section Faq --}}
    @include("client.themes.component.faq.{$theme->slug}.{$theme->template_variation}", ['sessaoFaq' => $sessaoFaq, 'faqs' => $faqs])

    {{-- Section Depoiments --}}
    @include("client.themes.component.depoiment.{$theme->slug}.{$theme->template_variation}", ['depoiments' => $depoiments])
 
@endsection
