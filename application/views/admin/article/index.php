<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">文章管理</h1>
          <h3><a href="<?php echo site_url('admin/article/create') ?>">添加文章</a></h3>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <tr>
                <th><input type="checkbox"></th>
                <th>标题</th>
                <th>内容</th>
                <th>图片</th>
                <th width="100">创建日期</th>
                <th style="text-align: center;">操作</th>
              </tr>
              <?php foreach ($articles as $index => $article) { ?>
              <tr>
                <th><?php echo $index ?></th>
                <th><a href="<?php echo base_url('admin/article/show/' . $article['article_id']) ?>"><?php echo $article['title'] ?></a></th>
                <th>sss</th>
                <th><img class="img-rounded" alt="..." src="http://wx2.sinaimg.cn/mw600/0076BSS5ly1fsoubsy924j30dw0i2dic.jpg" height="40" width="45"></th>
                <th width="100"><?php echo $article['create_date'] ?></th>
                <th style="text-align: center;"><a href="<?php echo base_url('admin/article/edit/' . $article['article_id']) ?>">编辑</a>&nbsp&nbsp<a href="<?php echo base_url('admin/article/delete/' . $article['article_id']) ?>">删除</a></th>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

