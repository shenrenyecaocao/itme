<?php $this->load->view('blog/common/header') ?>
<body>
  <div class="jumbotron masthead">
    <div class="container">
      <h1>Best wish for you</h1>
      <h2>简洁、直观、强悍的前端开发框架，让web开发更迅速、简单。</h2>
      <p class="masthead-button-links">
        <a class="btn btn-lg btn-primary btn-shadow" href="https://v3.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap3中文文档'])">Bootstrap3中文文档(v3.3.7)</a>
      </p>
      <ul class="masthead-links">
        <li>
          <a href="https://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
        </li>
      </ul>
    </div>
  </div>


  <div class="container projects">

    <div class="projects-header page-header">
      <h2>Bootstrap相关优质项目推荐</h2>
      <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
    </div>

    <div class="row">
<!--
      <div class="col-sm-6 col-md-4 col-lg-3 ">
        <div class="thumbnail">
          <a href="http://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">
            <img class="lazy" src="https://assets.bootcss.com/www/assets/img/null.png?1528519874373" width="300" height="150" data-src="https://assets.bootcss.com/www/assets/img/expo.png?1528519874373" alt="Bootstrap 优站精选">
          </a>
          <div class="caption">
            <h3>
                <a href="http://www.youzhan.org/" title="Bootstrap 优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan-tile'])">优站精选<br><small> Bootstrap 网站实例</small></a>
            </h3>
            <p>Bootstrap 优站精选频道收集了众多基于 Bootstrap 构建、设计精美的、有创意的网站。</p>
          </div>
        </div>
      </div>
-->
    <?php foreach ($images as $index => $image) {
    ?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <a href="<?php echo $image['image_url'] ?>" title="Bootstrap" target="_blank">
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
          <?php if ($last_page > 1) {?>
          <a class="newer-posts" href="<?php echo site_url('blog/album') . "?page=" . $last_page ?>">上一页</a>
        <?php } ?>
          <span class="page-number">第 <?php echo $current_page ?> 页/共 <?php echo $total_page ?> 页</span>
          <?php if ($next_page < $total_page) { ?>
          <a class="older-posts" href="<?php echo site_url('blog/album') . "?page=" . $next_page ?>">下一页</a>
        <?php } ?>
    </nav>
  </div>
  <!-- /.container -->
<?php $this->load->view('blog/common/footer') ?>
