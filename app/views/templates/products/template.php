    <!--portfolio-->
    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">

          <?php
          
          foreach ($params as $item) {

            echo('<div class="col-lg-6 col-sm-6">');
            echo('<a class="portfolio-box" href="img/auto10.png">');
            echo('<img class="img-fluid" src="'.$item->img.'" alt="">');
            echo('<div class="portfolio-box-caption">');
            echo('<div class="portfolio-box-caption-content">');
            echo('<div class="project-category text-faded">');
            echo($item->title);
            echo('</div>');
            echo('<div class="project-name">');
            echo($item->sub);
            echo('</div>');
            echo('</div>');
            echo('</div>');
            echo('</a>');
            echo('</div>');

          }
          
          ?>

        </div>
      </div>
    </section>