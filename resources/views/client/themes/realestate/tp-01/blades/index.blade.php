@extends('client.themes.core.client')

@section('content')

    {{-- Section Hero --}}
    @include("client.themes.component.slide.{$theme->slug}.{$theme->template_variation}")
    
    {{-- Section search --}}
    @include("client.themes.component.search.{$theme->slug}.{$theme->template_variation}")
    
        {{-- Section Topic --}}
    @include("client.themes.component.topic.{$theme->slug}.{$theme->template_variation}", ['topics' => $topics])

    {{-- Section announcement --}}
    @include("client.themes.includes.announcement")  
    
    {{-- Section Imovel  highlight--}}
    @include("client.themes.component.imovel.{$theme->slug}.{$theme->template_variation}")
    
    {{-- Section parameter --}}
    {{-- @include("client.themes.component.parameter.{$theme->slug}.{$theme->template_variation}") --}}
    
    {{-- Section advantages --}}
    @include("client.themes.component.advantages.{$theme->slug}.{$theme->template_variation}")

    {{-- Section paralax --}}
    @include("client.themes.component.paralax.{$theme->slug}.{$theme->template_variation}")
    
    {{-- Section Faq --}}
    @include("client.themes.component.faq.{$theme->slug}.{$theme->template_variation}", ['sessaoFaq' => $sessaoFaq, 'faqs' => $faqs])
    
    {{-- Section contact --}}
    @include("client.themes.component.contact.{$theme->slug}.{$theme->template_variation}")
@endsection
