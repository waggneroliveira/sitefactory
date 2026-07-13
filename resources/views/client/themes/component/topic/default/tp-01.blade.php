@if ($topics->count() > 0)
    <section id="topic" class="topics pt-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ($topics as $topic)   
                    <div class="col-6 col-md-4 col-lg-2 topic-col">
                        @if ($topic->link <> null)
                            <a href="{{$topic->link}}" class="topic-item d-block" rel="noopener noreferrer">
                                <img src="{{asset('storage/'.$topic->path_image)}}" alt="Tópico 1" class="img-fluid d-block m-auto" loading="lazy">
                            </a>
                            @else
                            <a class="topic-item d-block">
                                <img src="{{asset('storage/'.$topic->path_image)}}" alt="Tópico 1" class="img-fluid d-block m-auto" loading="lazy">
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif