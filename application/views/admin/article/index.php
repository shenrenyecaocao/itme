<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">文章管理</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>序号</th>
                <th>标题</th>
                <th>图片</th>
                <th>创建日期</th>
                <th colspan="2">操作</th>
              </tr>
              <?php foreach ($articles as $index => $article) { ?>
              <tr>
                <td><?php echo $index ?></td>
                <td><a href="<?php echo base_url('admin/article/show/' . $article['article_id']) ?>"><?php echo $article['title'] ?></a></td>
                <td><img src=""></td>
                <th><?php echo $article['create_data'] ?></th>
                <th><a href="<?php echo base_url('admin/article/edit/' . $article['article_id']) ?>">编辑</a></th>
                <th><a href="<?php echo base_url('admin/article/delete/' . $article['article_id']) ?>">删除</a></th>
                t
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

