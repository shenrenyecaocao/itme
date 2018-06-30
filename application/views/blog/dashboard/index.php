<?php $this->load->view('blog/common/header') ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url('static/index/images/44453.jpg') ?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url('static/index/images/92116.jpg') ?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url('static/index/images/scoup.jpg') ?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">

      <?php foreach ($top3 as $index => $article) {?>
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo load_image($article['article_image']) ?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $article['title'] ?></h2>
          <p><?php echo $article['content'] ?></p>
          <p><a class="btn btn-default" href="<?php echo site_url('blog/acticle/show/' . $article['article_id']) ?>" role="button">详细 &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      <?php } ?>

      </div><!-- /.row -->


      <hr class="featurette-divider">
      <?php foreach ($top6 as $index => $article) {?>
      <div class="row featurette">
        <div class="col-md-7">
          <!-- <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2> -->
          <h2 class="featurette-heading"><?php echo $article['title'] ?></h2>
          <p class="lead"><?php echo $article['content'] ?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo load_image($article['article_image']) ?>" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
      <?php } ?>

    </div>
      <!-- /END THE FEATURETTES -->
<?php $this->load->view('blog/common/footer') ?>