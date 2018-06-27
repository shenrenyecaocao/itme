<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">文章管理</h1>
          <!-- <div class="table-responsive"> -->
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/article/store') ?>">
              <div class="container">
                <div class="row form-group">
                    <label class="control-label col-lg-1" for="title">标题</label>
                    <div class="col-lg-5 col-md-6">
                        <input class="form-control" value="<?php echo set_value('title') ?>" name="title" id="title" type="text" placeholder="请输入文章标题">
                        <?php echo form_error('title', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-lg-1" for="content">内容</label>
                    <div class="col-lg-7 col-md-8">
                        <textarea class="form-control" style="height: 220px;width: 700px;resize: none;" name="content" id="content" placeholder="请输入文章内容"></textarea>
                        <?php echo form_error('content', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-lg-1" for="image">图片</label>
                    <div class="col-lg-3 col-md-4">
                        <input name="image" id="image" type="file">
                    </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-lg-1" for="article_type">类型</label>
                    <div class="col-lg-3 col-md-4">
                      <select class="form-control" name="article_type">
                        <option value="">未选择</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-lg-1">完成</label>
                    <div class="col-lg-2 col-md-3">
                        <input class="form-control" value="提交" type="submit">
                    </div>
                </div>
              </div>
            </form>
          <!-- </div> -->
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

