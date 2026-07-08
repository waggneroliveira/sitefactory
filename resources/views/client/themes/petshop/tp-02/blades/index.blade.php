@extends('client.themes.core.client')

@section('content')

    {{-- Section Hero --}}
    @include('client.themes.component.slide.tp-02', ['slides' => $slides])
    
 
@endsection
