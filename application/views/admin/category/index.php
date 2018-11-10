<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">分类管理</h1>
          <h3><a href="<?php echo site_url('admin/category/create') ?>">添加分类</a></h3>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <tr>
                <th width="15%"><input type="checkbox"></th>
              <?php foreach ($category_level as $level => $level_name) { ?>
                <th width="20%"><?php echo $level_name ?></th>
              <?php } ?>
                <th width="15%">描述</th>
                <th width="35%" style="text-align: center;">操作</th>
              </tr>
              <?php foreach ($categorys as $index => $category) { ?>
              <tr>
                <th><?php echo $index + 1 ?></th>
              <?php foreach ($category_level as $level => $level_name) { ?>
                <th><?php echo $category['level'] == $level ? $category['name'] : '' ?></th>
              <?php } ?>
                <th><?php echo $category['description'] ?></th>
                <th style="text-align: center;"><a href="<?php echo site_url("admin/category/edit/{$category['category_id']}") ?>">修改</a>&nbsp&nbsp<a href="<?php echo site_url("admin/category/delete/{$category['category_id']}") ?>">删除</a></th>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

