 <table class="table table-striped table-bordered">
  <tr>
    <th width="15%" style="text-align: center;"><input type="checkbox"></th>
    <th width="20%" style="text-align: center;">分类</th>
    <th width="20%" style="text-align: center;">图片</th>
    <th width="30%" style="text-align: center;">操作</th>
  </tr>
  <?php foreach ($categorys as $index => $category) { ?>
  <tr>
    <th style="text-align: center;"><?php echo $index + 1 ?></th>
    <th style="text-align: center;"><?php echo $category['name'] ?></th>
    <th style="text-align: center;"><img width="110px" height="80" src="<?php echo load_image($category['category_image'], 'category') ?>"></th>
    <th style="text-align: center;">
      <a href="#mymodal" data-id="<?php echo $category['category_id'] ?>" data-toggle="modal">传图</a>&nbsp;&nbsp;
      <?php echo $this->session->flashdata('upload_error') ?>
    </th>
  </tr>
  <?php } ?>
</table>
  <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <form class="form-signin" role="form" method="post" enctype="multipart/form-data" action="javascript::void(0)">
            <label for="user" class="sr-only">用户</label>
            <input type="file" name="category_image">
            <br>
            <button class="btn btn-primary btn-sm" type="submit">上传</button>
          </form>
        </div>
      </div>
    </div>
  </div>
