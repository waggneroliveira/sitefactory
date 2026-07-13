<!-- IMÓVEIS EM DESTAQUE / DIVULGAÇÃO -->
<section id="imoveis" class="section-padding">
    <div class="container">
        <div class="text-start mb-5">
            <span class="font-changa font-18 font-semibold color-green mb-2 text-uppercase">
            Destaques
            </span>
            <h2 class="font-changa font-40 font-bold mb-2 color-yellow section-title">Empreendimentos em Destaque</h2>
            <p class="font-changa font-15 font-regular text-muted text-start section-subtitle">Confira nossos empreendimentos mais procurados com as melhores oportunidades do mercado</p>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            @for($i = 0; $i < 4; $i++)              
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-transparent border-1 shadow-sm card-shadow h-100">
                      <div class="image position-relative">
                        <div class="status d-flex justify-content-between align-items-start position-absolute">
                            <span class="badge badge-featured rounded-2 text-uppercase font-changa font-12 font-semibold color-yellow"></i> Lançamento</span>
                        </div>
                        <img src="{{asset('build/client/images/slide.jpg')}}" class="card-img-top property-img" alt="Apartamento moderno">
                      </div>
                      <div class="card-body bg-transparent">
                          <h5 class="card-title font-changa font-15 font-semibold color-yellow my-0">Apê Alto Padrão – Vila Nova</h5>
                          <p class="card-text text-muted small"> R. das Acácias, 455</p>
                          <div class="d-flex gap-3 mb-3 small">
                              <span><i class="bi bi-arrows-expand"></i> 84m²</span>
                              <span><i class="bi bi-bed"></i> 3</span>
                              <span><i class="bi bi-car-front"></i> 2 vagas</span>
                          </div>
                          <div class="d-flex justify-content-between align-items-end">
                            <div class="d-flex flex-column">
                                <small>a partir de</small>
                                <span class="font-changa font-20 font-semibold color-yellow text-accent">R$ 250.000</span>
                              </div>
                              <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-3">Detalhes <i class="bi bi-arrow-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
            @endfor
        </div>
        <!-- chamada extra -->
        <div class="text-center mt-5">
            <a href="#" class="btn bg-yellow border text-white border-white px-5 py-3 rounded-3 font-changa font-16 font-semibold">Ver todos os imóveis <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
</section>