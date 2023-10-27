<!-- ======= More Services Section ======= -->
<section id="galeria" class="more-services section-bg">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
          <img src="assets/img/detalhes/cncdetalhes.jpg" class="card-detalhes" alt="...">
          <div class="card-body">
            <h5 class="card-title">EQUIPAMENTOS</h5>
            <a href="#" class="btn ver-mais-btn" data-text="Equipamentos">Ver mais</a>




          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
          <img src="assets/img/detalhes/peca.jpg" class="card-detalhes" alt="...">
          <div class="card-body">
            <h5 class="card-title">PRODUTOS DESENVOLVIDOS</h5>
            <a href="#" class="btn ver-mais-btn" data-text="Produtos">Ver mais</a>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
          <img src="assets/img/detalhes/trabalhador.jpg" class="card-detalhes" alt="...">
          <div class="card-body">
            <h5 class="card-title">ROMATEC EM AÇÃO
            </h5>
            <a href="#" class="btn ver-mais-btn" data-text="Acao">Ver mais</a>

          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    const verMaisButtons = document.querySelectorAll('.ver-mais-btn');

    verMaisButtons.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        const buttonText = button.getAttribute('data-text');
        window.location.href = `galeria.php?texto=${encodeURIComponent(buttonText)}`;
      });
    });
  </script>

</section><!-- End More Services Section -->