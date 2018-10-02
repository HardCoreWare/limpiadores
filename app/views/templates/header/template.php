    <!--encabezado-->
    <header class="masthead text-center text-white d-flex" style="background-image:url(
      
    <?php

        echo($params['img']);

    ?>
    );">

      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>

      <?php
      echo($params['title']);
      ?>

              </strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">
            
      <?php
      echo($params['sub']);
      ?>

            </p>
          </div>
        </div>
      </div>
    </header>