   <?php
    function isMobile()
    {
      $userAgent = $_SERVER['HTTP_USER_AGENT'];

      $mobileKeywords = array('mobile', 'android', 'iphone', 'ipad', 'blackberry', 'windows phone');

      foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
          return true;
        }
      }

      return false;
    }

    if (isMobile()) {
      // Usuário está acessando de um dispositivo móvel
    ?>
     <!-- ======= Conteúdo para dispositivos móveis ======= -->
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
       <div class="container">

         <div class="section-title">
           <h2>Comprometidos com a Sustentabilidade</h2>
           <p>A Romatec Usinagem é mais do que uma empresa de usinagem. Somos apaixonados por sustentabilidade e comprometidos em liderar o caminho em direção a um futuro mais verde e responsável. Nosso compromisso vai além da excelência na prestação de serviços.</p>
         </div>

         <div class="row">

           <div class="col-lg-6 pt-4 pt-lg-0 content">


             <div class="col-lg-6">
               <img src="assets/img/romatec/sustentabilidade.jpg" class="img-fluid" alt="">
             </div>




             <h3 class="texto">
               <br>
               <br>
               <br>
               Na Romatec Usinagem ,<strong>somos 100% sustentáveis </strong>, o que significa que nossa atuação se estende para além dos produtos e serviços que oferecemos. <br> <br> Nossa contribuição para a sustentabilidade começa com a capacidade de geração de energia própria de <strong> 7000kVA </strong>
             </h3>
             <br>
             <p class="fst-italic texto">
               Isso não apenas nos torna autossuficientes em termos de energia, mas também nos permite reduzir nossa pegada de carbono e minimizar nosso impacto ambiental.
             </p>
             <br>
             <p class="texto">
               Acreditamos que a sustentabilidade não é apenas uma responsabilidade, mas também uma oportunidade de inovação e crescimento.
             </p>


           </div>
         </div>

       </div>
     </section><!-- End About Us Section -->
   <?php
    } else {
      // Usuário está acessando de um computador
    ?>
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
       <div class="container">

         <div class="section-title">
           <h2>Comprometidos com a Sustentabilidade</h2>
           <p>A Romatec Usinagem é mais do que uma empresa de usinagem. Somos apaixonados por sustentabilidade e comprometidos em liderar o caminho em direção a um futuro mais verde e responsável. Nosso compromisso vai além da excelência na prestação de serviços.</p>
         </div>

         <div class="row">

           <div class="col-lg-6 pt-4 pt-lg-0 content">

             <h3 class="texto">
               <br>
               <br>
               <br>
               Na Romatec Usinagem ,<strong>somos 100% sustentáveis </strong>, o que significa que nossa atuação se estende para além dos produtos e serviços que oferecemos. <br> <br> Nossa contribuição para a sustentabilidade começa com a capacidade de geração de energia própria de <strong> 7000kVA </strong>
             </h3>
             <br>
             <p class="fst-italic texto">
               Isso não apenas nos torna autossuficientes em termos de energia, mas também nos permite reduzir nossa pegada de carbono e minimizar nosso impacto ambiental.
             </p>
             <br>
             <p class="texto">
               Acreditamos que a sustentabilidade não é apenas uma responsabilidade, mas também uma oportunidade de inovação e crescimento.
             </p>


           </div>

           <div class="col-lg-6">
             <img src="assets/img/romatec/sustentabilidade.jpg" class="img-fluid" alt="">
           </div>
         </div>

       </div>
     <?php
    }
      ?>