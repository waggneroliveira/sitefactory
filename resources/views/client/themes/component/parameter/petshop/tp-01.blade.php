@if ($benefitTopics->count())
    <section id="stats-section" class="stats-section py-5 position-relative container-fluid">
        <img src="{{asset('build/client/images/firula-count.svg')}}" alt="Firula" class="position-absolute top-0 left-0 firula-count">

        <div class="container">
            <div class="row text-center align-items-center g-4">
                @foreach ($benefitTopics as $parametro)                
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <h3 class="stat-number font-changa font-bold font-44" data-target="{{$parametro->number}}">0</h3>
                            <p class="font-changa font-bold font-16 color-green">{{$parametro->title}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif