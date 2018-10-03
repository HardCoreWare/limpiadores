    <!--services-->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php echo($params->title); ?></h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <?php

            $items=$params->items;
          
            foreach ($items as $item) {

              echo('<div class="col-lg-6 col-md-6 text-center">');
              echo('<div class="service-box mt-5 mx-auto">');
              echo('<i class="fas fa-4x '.$item->icon.' text-primary mb-3 sr-icon-2"></i>');
              echo('<h3 class="mb-3">'.$item->title.'</h3>');
              echo('<p class="text-muted mb-0">'.$item->sub.'</p>');
              echo('</div></div>');

            }

          ?>


        </div>
      </div>
    </section>
