<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">文章详情</h1>
          <div class="table-responsive">
            <ul class="nav">
                <li>
                    <h1><p class="text-center"><?php echo $article['title']  ?></p></h1>
                </li>
                <li>
                    <p class="text-left lead"><?php echo html_encode($article['content']) ?></p>
                </li>
                <li>
                    <p class="text-justify"><?php echo $article['father_type_name'] ?>
                    <strong>-></strong>
                    <?php echo $article['child_type_name'] ?></p>
                </li>
                <li>
                    <p class="text-nowrap"><?php echo $article['create_date'] ?></p>
                </li>
            </ul>
            <p><a href="<?php echo site_url('admin/article') ?>">返回文章管理</a></p>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

