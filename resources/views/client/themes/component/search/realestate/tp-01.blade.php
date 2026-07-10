<div class="col-8 position-relative bg-white shadow-lg mt-negative rounded-3">
    <div class="property-search p-3">
        <div class="row align-items-center g-0">
    
            <!-- Tipo -->
            <div class="col-lg-3 col-md-6">
                <div class="property-search__item d-flex justify-content-center align-items-center gap-0">
    
                    <div class="property-search__icon">
                        <i class="bi bi-building font-30"></i>
                    </div>
    
                    <div class="property-search__content">
                        <small class="label-imovel font-changa font-15 font-regular">Tipo de imóvel</small>
    
                        <select class="form-select border-0 shadow-none pt-0">
                            <option class="font-changa font-15 font-regular">Todos</option>
                            <option class="font-changa font-15 font-regular">Apartamento</option>
                            <option class="font-changa font-15 font-regular">Casa</option>
                            <option class="font-changa font-15 font-regular">Terreno</option>
                            <option class="font-changa font-15 font-regular">Sala Comercial</option>
                        </select>
                    </div>
    
                </div>
            </div>
    
            <!-- Cidade -->
            <div class="col-lg-3 col-md-6">
                <div class="property-search__item d-flex justify-content-center align-items-center gap-0">
    
                    <div class="property-search__icon">
                        <i class="bi bi-geo-alt font-30"></i>
                    </div>
    
                    <div class="property-search__content">
                        <small class="label-imovel font-changa font-15 font-regular">Cidade / Bairro</small>
    
                        <select class="form-select border-0 shadow-none pt-0">
                            <option class="font-changa font-15 font-regular">Selecione</option>
                        </select>
                    </div>
    
                </div>
            </div>
    
            <!-- Faixa de preço -->
            <div class="col-lg-3 col-md-6">
                <div class="property-search__item d-flex justify-content-center align-items-center gap-0">
    
                    <div class="property-search__icon">
                        <i class="bi bi-currency-dollar font-30"></i>
                    </div>
    
                    <div class="property-search__content">
                        <small class="label-imovel font-changa font-15 font-regular">Faixa de preço</small>
    
                        <select class="form-select border-0 shadow-none pt-0">
                            <option class="font-changa font-15 font-regular">Selecione</option>
                        </select>
                    </div>
    
                </div>
            </div>
    
            <!-- Botão -->
            <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                <div class="property-search__button w-100">
    
                    <button type="submit" class="btn-search rounded-3 py-2 px-4 w-100 text-white text-center font-changa font-15 font-regular">
                        Buscar imóveis
                        <i class="bi bi-search ms-2"></i>
                    </button>
    
                </div>
            </div>
    
        </div>
    </div>
</div>

<style>
    .btn-search{
        all: unset; 
        cursor: pointer;
    }
    .property-search__button button{
        background-color: var(--yellow-color);
        max-width: 160px;
    }
    .mt-negative{
        margin: 0 auto;
        margin-top: -40px;
        z-index: 4;
    }
    .label-imovel{
        padding-left: 12px;
    }
</style>