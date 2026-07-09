@extends('client.themes.core.client')

@section('content')

    {{-- Section Hero --}}
    @include("client.themes.component.slide.{$theme->slug}.{$theme->template_variation}", ['slides' => $slides])
    
 
@endsection
