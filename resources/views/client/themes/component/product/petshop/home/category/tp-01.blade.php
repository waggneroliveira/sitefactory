@if ($productCategorieHighlights->count(0))
    <section class="category-product position-relative">
        <img src="{{asset('build/client/images/firula-top-product.svg')}}" alt="Firula" class="position-absolute top-0 left-0">
        <div class="container py-5">
            <div class="row g-4">
                @foreach ($productCategorieHighlights as $productCategory)
                    <div class="col-12 col-md-4 mb-3 mb-lg-0">
                        <div class="card p-4 d-flex flex-row justify-content-center align-items-center border-0 rounded-4 bg-yellow">
                            @if ($productCategory->path_image <> null)                                
                                <img src="{{asset('storage/' . $productCategory->path_image)}}"
                                    class="card-img-top rounded"
                                    alt="{{$productCategory->title}}">
                            @endif

                            <div class="card-body text-center">
                                <a href="{{ route('products', ['category' => $productCategory->slug]) }}" 
                                class="stretched-link text-decoration-none">
                                    <h5 class="card-title font-changa text-black font-25 font-bold">
                                        {{$productCategory->title}}
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif