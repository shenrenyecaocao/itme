<?php $this->load->view('blog/common/header') ?>
<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Best wish to you</h1>
    </div>
  </div>


<div class="container projects">
      <div id="products" class="row list-group">
    <?php foreach ($images as $index => $image) { ?>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail" style="height:350px; width: 400px">
                        <a href="<?php echo site_url('blog/album/show/' . $image['image_id'] . '/' . $current_page) ?>">
                          <img class="group list-group-image" width="400px" height="350px" src="<?php echo $image['image_url'] ?>" alt="" />
                        </a>
                    </div>
                </div>
    <?php } ?>

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
