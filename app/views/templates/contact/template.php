<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading"><?php echo($params->title); ?></h2>
            <hr class="my-4">
            <p class="mb-5"><?php echo($params->sub); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas <?php echo($params->phone->icon); ?> fa-3x mb-3 sr-contact-1"></i>
            <p> <?php echo($params->phone->label); ?> </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas <?php echo($params->mail->icon); ?> fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="#"><?php echo($params->mail->label); ?> </a>
            </p>
          </div>
        </div>
      </div>
    </section>