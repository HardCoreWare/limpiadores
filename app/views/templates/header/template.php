    <!--encabezado-->
    <header class="masthead text-center text-white d-flex" style="background-image:url(
      
    <?php
        $background=array(

          'home'=>'img/auto10.png',
          'quienes'=>'img/auto9.png',
          'servicios'=>'img/auto8.png',
          'productos'=>'img/auto7.png',
          'contacto'=>'img/auto6.png'

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
        'servicios'=>'NUESTROS SERVICIOS',
        'productos'=>'NUESTROS PRODUCTOS',
        'contacto'=>'CONTACTANOS'
          
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
          "quienes"=>"Subtitulo para nuestra empresa",
          "servicios"=>"Algo sobre nuestros servicios",
          "productos"=>"Todos nuestros productos",
          "contacto"=>"Nuestro formulario de contacto"

      );
          
      echo($sub[$params]);
      ?>

            </p>
          </div>
        </div>
      </div>
    </header>