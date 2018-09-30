    <!--encabezado-->
    <header class="masthead text-center text-white d-flex" style="background-image:url(
      
    <?php
        $background=array(

          'home'=>'img/auto10.png',
          'quienes'=>'img/auto9.png',
          'servicios'=>'img/auto8.png'
    
      );
      
      echo($background[$params]);
    ?>
    );">

      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>

      <?php
      $title=array(

        'home'=>'PAGINA PRINCIPAL LIMPIADORES',            
        'quienes'=>'NUESTRA EMPRESA',
        'servicios'=>'NUESTROS SERVICIOS'
          
      );
          
      echo($title[$params]);
      ?>

              </strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">
            
      <?php
      $sub=array(

          "home"=>"Subtitulo de pagina principal",
          "quienes"=>"subtitulo para nuestra empresa",
          "servicios"=>"algo sobre nuestros servicios"
          
      );
          
      echo($sub[$params]);
      ?>

            </p>
          </div>
        </div>
      </div>
    </header>