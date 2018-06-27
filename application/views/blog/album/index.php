<?php $this->load->view('blog/common/header') ?>
<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Best wish to you</h1>
    </div>
  </div>


  <div class="container projects">
    <div class="row">
    <?php foreach ($images as $index => $image) {
    ?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <a href="<?php echo site_url('blog/album/show/' . $image['image_id'] . '/' . $current_page) ?>" title="Bootstrap" target="_blank">
                <div class="thumbnail">
                    <img class="lazy" src="static/index/images/img_null.png" width="300" height="450" data-src="<?php echo $image['image_url'] ?>" alt="Bootstrap 优站精选">
                </div>
            </a>
        </div>
    <?php
    } ?>


    </div>
    <nav class="pagination">
          <br/>
          <br/>
          <br/>
          <?php if ($current_page > 1) {?>
          <a class="newer-posts" href="<?php echo site_url('blog/album') . "?page=" . $last_page ?>">上一页</a>
        <?php } ?>
          <span class="page-number">第 <?php echo $current_page ?> 页/共 <?php echo $total_page ?> 页</span>
          <?php if ($current_page < $total_page) { ?>
          <a class="older-posts" href="<?php echo site_url('blog/album') . "?page=" . $next_page ?>">下一页</a>
        <?php } ?>
    </nav>
  </div>
  <!-- /.container -->
<?php $this->load->view('blog/common/footer') ?>
