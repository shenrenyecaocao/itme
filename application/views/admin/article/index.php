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
                <th width="10%"><input type="checkbox"></th>
                <th width="20%">标题</th>
                <th width="20%">内容</th>
                <th width="10%">图片</th>
                <th width="20%">文章归类</th>
                <th width="10%">创建日期</th>
                <th width="20%" style="text-align: center;">操作</th>
              </tr>
              <?php foreach ($article_list as $index => $article) { ?>
              <tr>
                <th><?php echo $index + 1 ?></th>
                <th><a href="<?php echo site_url('admin/article/show/' . $article['article_id']) ?>"><?php echo $article['title'] ?></a></th>
                <th><?php echo html_encode(mb_substr($article['content'], 0, 50)) ?></th>
                <th><img class="img-rounded" alt="封面" src="<?php echo load_image($article['article_image']) ?>" height="40" width="45"></th>
                <th><?php echo $article['father_type_name'] ?><b>-></b><?php echo $article['child_type_name'] ?></th>
                <th width="100"><?php echo $article['create_date'] ?></th>
                <th style="text-align: center;"><a href="<?php echo site_url('admin/article/edit/' . $article['article_id']) ?>">编辑</a>&nbsp&nbsp<a href="<?php echo site_url('admin/article/delete/' . $article['article_id']) ?>">删除</a></th>
              </tr>
              <?php } ?>
            </table>
          </div>
        <nav class="pagination">
          <br/>
          <?php if ($current_page > 1) {?>
          <a class="newer-posts" href="<?php echo site_url('admin/article/index') . "?page=" . $last_page ?>">上一页</a>
        <?php } ?>
          <span class="page-number">第 <?php echo $current_page ?> 页/共 <?php echo $total_page ?> 页</span>
          <?php if ($current_page < $total_page) { ?>
          <a class="older-posts" href="<?php echo site_url('admin/article/index') . "?page=" . $next_page ?>">下一页</a>
        <?php } ?>
    </nav>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

