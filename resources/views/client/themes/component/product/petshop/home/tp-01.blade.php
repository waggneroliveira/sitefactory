@if ($products->count())
    <section class="products-section py-5">
        <div class="container">

            <!-- Header -->
            <div class="text-center mb-4">
                <span class="about-subtitle span-product color-yellow font-changa font-16 font-bold d-block mb-2 text-end m-0 z-3 position-relative">
                    Conheça Aqui!
                </span>

                <h3 class="about-title font-changa font-50 font-bold color-green mb-3 position-relative">
                    <img src="{{asset('build/client/images/firula-about.svg')}}" alt="Firula" class="position-absolute firula-products">
                    Nossos <span class="color-grey z-3 position-relative">Produtos</span>
                </h3>
            </div>

            <!-- Filtros -->
            <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap">
                <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2 active" data-filter="all">Todos</button>
                @foreach ($productCategories as $productCategory)
                    <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2" data-filter="{{$productCategory->slug}}">{{$productCategory->title}}</button>
                @endforeach
            </div>
            
            <!-- Produtos -->
            <div class="row g-4 products">
                <!-- Produto -->
                @foreach ($products as $product)                
                    <div class="col-6 col-sm-6 col-lg-3 product {{ $product->category ? $product->category->slug : '' }}">
                        <div class="product-card">
                            <div class="image border rounded-3 position-relative mb-3">
                                <a href="{{ $product->category ? route('client.product', ['category' => $product->category->slug, 'slug' => $product->slug]) : '#' }}" class="col-12">
                                    <span class="btn btn-view font-changa font-16 font-medium opacity-0 col-10 col-lg-5">Ver Produto</span>
                                    <img src="{{asset('storage/' . $product->path_image)}}" alt="{{$product->title}}">
                                </a>
                            </div>
                            <h6 class="font-changa font-18 font-semibold color-green">{{$product->title}}</h6>
                            <p class="color-grey font-changa font-18 font-medium">{{$product->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Botão -->
            <div class="text-end mt-4 d-flex justify-content-center justify-content-lg-end align-items-center">
                <a href="{{route('products')}}" class="btn btn-product bg-green rounded-pill px-4 text-white">
                    Ver todos os produtos
                    <svg class="ms-2" width="31" height="13" viewBox="0 0 31 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.1708 12.4741L30.4078 6.23712L24.1708 0.000120163L22.4036 1.76727L26.8527 6.23712L22.3828 10.707L24.1708 12.4741Z" fill="#10513D"></path>
                    <path d="M0 5H27V7.2H0V5Z" fill="#10513D"></path>
                    </svg>
                </a>
            </div>
            

        </div>
    </section>
@endif

<script>
    const buttons = document.querySelectorAll('.btn-filter');
    const products = document.querySelectorAll('.product');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            products.forEach(product => {
                product.classList.toggle(
                'd-none',
                filter !== 'all' && !product.classList.contains(filter)
                );
            });
        });
    });
</script>