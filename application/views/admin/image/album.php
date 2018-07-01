<div id="products" class="list-group">
  <div class="text-right">
    <div class="text-left">
      <form class="form-inline" method="get" action="<?php echo site_url('admin/image/index/' . $type) ?>">
        <div class="form-group">
          <label for="image">搜索：</label>
          <input type="text" class="form-control" name="image" id="image" placeholder="图片ID或URL">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
    </div>
    <input class="btn btn-primary btn-xs allcheckbox" type="checkbox"><strong>全选</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a role="button" class="btn btn-primary btn-xs">赞</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a role="button" class="btn btn-primary btn-xs">删</a>
    <span style="width: 20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  </div>
<?php foreach ($images as $index => $image) { ?>
  <div class="item  col-xs-2 col-lg-2">
    <div class="thumbnail" style="width: 152px">
      <div style="height:120px;">
        <img class="group list-group-image" width="150px" height="120px" src="<?php echo $image['image_url'] ?>" alt="" />
      </div>
      <div class="caption" data-id="<?php echo $image['image_id'] ?>" style="height:25px; padding:2px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="btn btn-primary btn-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a role="button" class="btn btn-primary btn-xs">赞</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a role="button" class="btn btn-primary btn-xs">删</a>
      </div>
    </div>
  </div>
<?php } ?>
      <nav class="pagination">
          <br/>
          <br/>
          <br/>
          <?php if ($current_page > 1) {?>
          <a class="newer-posts" href="<?php echo site_url('admin/image/index/album') . "?page=" . $last_page ?>">上一页</a>
        <?php } ?>
          <span class="page-number">第 <?php echo $current_page ?> 页/共 <?php echo $total_page ?> 页</span>
          <?php if ($current_page < $total_page) { ?>
          <a class="older-posts" href="<?php echo site_url('admin/image/index/album') . "?page=" . $next_page ?>">下一页</a>
        <?php } ?>
    </nav>
</div>
