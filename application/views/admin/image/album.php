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
    <a role="button" class="btn btn-primary btn-xs allsupport">赞</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a role="button" class="btn btn-primary btn-xs alldel">删</a>
    <span style="width: 20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  </div>
<?php foreach ($images as $index => $image) { ?>
  <div class="item  col-xs-2 col-lg-2">
    <div class="thumbnail" style="width: 152px">
      <div style="height:120px;">
        <img class="group list-group-image" width="150px" height="120px" src="<?php echo $image['image_url'] ?>" alt="" />
      </div>
      <div class="caption" data-id="<?php echo $image['image_id'] ?>" style="height:25px; padding:2px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="btn btn-primary btn-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a role="button" class="btn btn-primary btn-xs support">赞</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a role="button" class="btn btn-primary btn-xs del">删</a>
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
<script type="text/javascript">
    window.onload=function(){
        var log = console.log

        var input = $("input[type='checkbox']").not($(".allcheckbox"));
        $(".allcheckbox").on("change", function(){
            if ($(this).is(':checked')) {
                input.each(function(i){
                    $(this).prop('checked', true);
                });
            } else {
                input.each(function(i){
                    $(this).prop('checked', false);
                });
            }
        });

        var checkbox = new Array();
        $(".allsupport").on("click", function(){
            checkbox = []
            input.each(function(i, k){
                if ($(this).is(":checked")) {
                    var image_id = $(this).parent().data('id');
                    checkbox.push(image_id)
                }
            });
            if (checkbox.lenght > 0) {
                image_action(checkbox, 'delete')
            }
        })

        $(".alldel").on("click", function(){
            checkbox = []
            input.each(function(i, k){
                if ($(this).is(":checked")) {
                    var image_id = $(this).parent().data('id');
                    checkbox.push(image_id)
                }
            });
            if (checkbox.lenght > 0) {
                image_action(checkbox, 'delete')
            }
        })

        $(".del").on("click", function(){
            checkbox = []
            if ($(this).prev().prev().is(":checked")) {
                var image_id = $(this).parent().data('id');
                checkbox.push(image_id)
                image_action(checkbox, 'delete')
            }
        })

        $(".support").on("click", function(){
            checkbox = []
            if ($(this).prev().is(":checked")) {
                var image_id = $(this).parent().data('id');
                checkbox.push(image_id);
                image_action(checkbox, 'support');
            }
        })

        function image_action(checkbox, action)
        {
            $.ajax({
                url:'<?php echo site_url('admin/image/action') ?>',
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    image_id: checkbox,
                    action: action
                },
                timeout:5000,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(data){
                    result = data.result ? true : false;
                    if (action == "delete" && result) {
                        window.location.reload()
                    }
                }
            })
        }
    }
</script>