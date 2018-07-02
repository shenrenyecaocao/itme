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

<?php foreach ($category_list as $index => $category) { ?>
        <div class="item <?php if ($index == 0) { echo 'active';} ?>">
          <img class="third-slide" src="<?php echo load_image($category['category_image'], 'category') ?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $category['name'] ?></h1>
              <a class="btn btn-link" href="<?php echo site_url('blog/article/' . $category['category_id']) ?>">
                <h3><?php echo $category['description'] ?></h3>
              </a>
            </div>
          </div>
        </div>
<?php } ?>

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
          <p><?php echo nl2br(substr($article['content'], 0, 50)) ?></p>
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