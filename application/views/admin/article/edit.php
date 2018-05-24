<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header"><?php echo $title ?></h1>
          <div class="table-responsive">
            <?php echo $article['content'] ?>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

