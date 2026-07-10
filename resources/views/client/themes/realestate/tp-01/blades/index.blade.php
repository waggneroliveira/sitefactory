@extends('client.themes.core.client')

@section('content')

    {{-- Section Hero --}}
    @include("client.themes.component.slide.{$theme->slug}.{$theme->template_variation}")
    
    {{-- Section search --}}
    @include("client.themes.component.search.{$theme->slug}.{$theme->template_variation}")
    
    {{-- Section announcement --}}
    @include("client.themes.includes.announcement")  
    
    {{-- Section Imovel  highlight--}}
    @include("client.themes.component.imovel.{$theme->slug}.{$theme->template_variation}")

    {{-- Section Topic --}}
    @include("client.themes.component.topic.{$theme->slug}.{$theme->template_variation}", ['topics' => $topics])
    
    {{-- Section parameter --}}
    {{-- @include("client.themes.component.parameter.{$theme->slug}.{$theme->template_variation}") --}}
    
    {{-- Section announcement --}}
    @include("client.themes.includes.announcement")

    {{-- Section Faq --}}
    @include("client.themes.component.faq.{$theme->slug}.{$theme->template_variation}", ['sessaoFaq' => $sessaoFaq, 'faqs' => $faqs])

@endsection
