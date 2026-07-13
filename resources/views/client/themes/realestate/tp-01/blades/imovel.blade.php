@extends('client.themes.core.client')

@section('content')
    <!-- =======================================================
   HERO
   ======================================================= -->
<section class="py-5">
   <div class="container">
      <div class="row g-5 align-items-center">
         <div class="col-lg-7">
            <img src="assets/images/imovel.jpg"
               class="img-fluid rounded-4 shadow-sm w-100">
         </div>
         <div class="col-lg-5">
            <span class="badge bg-success mb-3">
            Lançamento
            </span>
            <h1 class="fw-bold mb-3">
               Residencial Villa Prime
            </h1>
            <p class="text-muted mb-4">
               Apartamentos de 2 e 3 quartos em localização privilegiada,
               com lazer completo e condições facilitadas.
            </p>
            <div class="row g-3 mb-4">
               <div class="col-6">
                  <div class="border rounded-3 p-3 text-center">
                     <strong>2 e 3</strong><br>
                     Quartos
                  </div>
               </div>
               <div class="col-6">
                  <div class="border rounded-3 p-3 text-center">
                     <strong>68m²</strong><br>
                     Área Privativa
                  </div>
               </div>
               <div class="col-6">
                  <div class="border rounded-3 p-3 text-center">
                     <strong>1 ou 2</strong><br>
                     Vagas
                  </div>
               </div>
               <div class="col-6">
                  <div class="border rounded-3 p-3 text-center">
                     <strong>Entrega</strong><br>
                     Dez/2027
                  </div>
               </div>
            </div>
            <div class="d-grid gap-3">
               <a href="#" class="btn btn-success btn-lg">
               <i class="fab fa-whatsapp me-2"></i>
               Falar com um especialista
               </a>
               <a href="#" class="btn btn-outline-dark">
               Simular financiamento
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =======================================================
   GALERIA
   ======================================================= -->
<section class="py-5 bg-light">
   <div class="container">
      <div class="text-center mb-5">
         <h2 class="fw-bold">
            Galeria
         </h2>
      </div>
      <div class="row g-4">
         <div class="col-md-4">
            <img src="assets/images/g1.jpg" class="img-fluid rounded-4">
         </div>
         <div class="col-md-4">
            <img src="assets/images/g2.jpg" class="img-fluid rounded-4">
         </div>
         <div class="col-md-4">
            <img src="assets/images/g3.jpg" class="img-fluid rounded-4">
         </div>
      </div>
   </div>
</section>
<!-- =======================================================
   SOBRE
   ======================================================= -->
<section class="py-5">
   <div class="container">
      <div class="row g-5">
         <div class="col-lg-6">
            <h2 class="fw-bold mb-4">
               Sobre o empreendimento
            </h2>
            <p class="text-muted">
               Lorem ipsum dolor sit amet...
            </p>
         </div>
         <div class="col-lg-6">
            <div class="row g-3">
               <div class="col-6">
                  <div class="border rounded-3 p-3">
                     <strong>Endereço</strong><br>
                     Centro
                  </div>
               </div>
               <div class="col-6">
                  <div class="border rounded-3 p-3">
                     <strong>Torres</strong><br>
                     02
                  </div>
               </div>
               <div class="col-6">
                  <div class="border rounded-3 p-3">
                     <strong>Apartamentos</strong><br>
                     96
                  </div>
               </div>
               <div class="col-6">
                  <div class="border rounded-3 p-3">
                     <strong>Status</strong><br>
                     Em construção
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =======================================================
   PLANTA
   ======================================================= -->
<section class="py-5 bg-light">
   <div class="container">
      <div class="text-center mb-5">
         <h2 class="fw-bold">
            Planta Baixa
         </h2>
      </div>
      <div class="row align-items-center g-5">
         <div class="col-lg-7">
            <img src="assets/images/planta.png"
               class="img-fluid">
         </div>
         <div class="col-lg-5">
            <h3 class="fw-bold">
               Apartamento Tipo A
            </h3>
            <ul class="list-group">
               <li class="list-group-item">68m²</li>
               <li class="list-group-item">2 Quartos</li>
               <li class="list-group-item">1 Suíte</li>
               <li class="list-group-item">Varanda Gourmet</li>
               <li class="list-group-item">1 Vaga</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- =======================================================
   DIFERENCIAIS
   ======================================================= -->
<section class="py-5">
   <div class="container">
      <div class="row text-center g-4">
         <div class="col-md-3">
            Academia
         </div>
         <div class="col-md-3">
            Piscina
         </div>
         <div class="col-md-3">
            Salão de Festas
         </div>
         <div class="col-md-3">
            Playground
         </div>
      </div>
   </div>
</section>
<!-- =======================================================
   ANDAMENTO DA OBRA
   ======================================================= -->
<section class="py-5 bg-light">
   <div class="container">
      <div class="text-center mb-5">
         <h2 class="fw-bold">
            Andamento da Obra
         </h2>
      </div>
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Serviços Preliminares</span>
                  <strong>100%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-success" style="width:100%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Terraplanagem</span>
                  <strong>100%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-success" style="width:100%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Fundação</span>
                  <strong>95%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-success" style="width:95%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Estrutura</span>
                  <strong>80%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-info" style="width:80%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Alvenaria</span>
                  <strong>65%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-primary" style="width:65%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Instalações</span>
                  <strong>40%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-warning" style="width:40%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Acabamento</span>
                  <strong>15%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-danger" style="width:15%"></div>
               </div>
            </div>
            <div class="mb-4">
               <div class="d-flex justify-content-between">
                  <span>Entrega Final</span>
                  <strong>0%</strong>
               </div>
               <div class="progress" style="height:10px;">
                  <div class="progress-bar bg-secondary" style="width:0%"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =======================================================
   LOCALIZAÇÃO
   ======================================================= -->
<section class="py-5">
   <div class="container">
      <h2 class="fw-bold text-center mb-5">
         Localização
      </h2>
      <div class="ratio ratio-21x9">
         <iframe src=""></iframe>
      </div>
   </div>
</section>
<!-- =======================================================
   CTA
   ======================================================= -->
<section class="py-5 bg-success text-white">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-8">
            <h2 class="fw-bold">
               Gostou deste empreendimento?
            </h2>
            <p class="mb-0">
               Fale agora com um especialista e receba todas as informações, tabela de preços, plantas e disponibilidade.
            </p>
         </div>
         <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
            <a href="#" class="btn btn-light btn-lg">
            <i class="fab fa-whatsapp me-2"></i>
            Conversar no WhatsApp
            </a>
         </div>
      </div>
   </div>
</section>
@endsection