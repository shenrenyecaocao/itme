<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">文章编辑</h1>
          <!-- <div class="table-responsive"> -->
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/article/update/' . $article_id) ?>">
              <div class="container">
                <div class="row form-group">
                    <label class="control-label col-lg-1" for="title">标题</label>
                    <div class="col-lg-5 col-md-6">
                        <input class="form-control" value="<?php echo set_value('title', $article['title']) ?>" name="title" id="title" type="text" placeholder="请输入文章标题">
                        <?php echo form_error('title', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-lg-1" for="content">内容</label>
                    <div class="col-lg-7 col-md-8">
                        <textarea class="form-control" style="height: 220px;width: 700px;resize: none;" name="content" id="content" placeholder="请输入文章内容"><?php echo set_value('content', $article['content']) ?></textarea>
                        <?php echo form_error('content', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-lg-1" for="article_image">图片</label>
                    <div class="col-lg-3 col-md-4">
                        <input name="article_image" id="article_image" type="file">
                    </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-lg-1" for="article_type">分类</label>
                    <div class="col-lg-3 col-md-4">
                      <select class="form-control" name="father_type" id="level_1">
                        <option value="">选择一级分类</option>
                    <?php foreach ($categorys as $index => $category) { ?>
                        <option value="<?php echo $category['category_id'] ?>" <?php echo set_select('father_type', $category['category_id'], $category['category_id'] == $father_type) ?>><?php echo $category['name'] ?></option>
                    <?php } ?>
                      </select>
                      <?php echo form_error('father_type', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                    <div class="col-lg-3 col-md-4">
                      <select class="form-control" name="child_type" id="level_2">
                        <option value="">选择二级分类</option>
                      </select>
                      <?php echo form_error('child_type', '<p class="help-block" style="color: red">', '</p>') ?>
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

<script type="text/javascript">
    $(function(){
        $("#level_1").change(function(){
            var child_type = <?php echo $child_type ?>;
            $.ajax({
                url:'<?php echo site_url('admin/category/get_category_level_2') ?>',
                type:'POST',
                async:true,
                dataType:'json',
                data:{
                    category_id: $(this).val()
                },
                success:function(data,textStatus,jqXHR){
                    var html = '<option value="">选择二级分类</option>'
                    $.each(data ,function(i,n) {
                        if (child_type == n['category_id']) {
                            html += '<option value="' + n['category_id'] + '"' + "selected" + '>' + n['name'] + '</option>';
                        } else {
                            html += '<option value="' + n['category_id'] + '">' + n['name'] + '</option>';
                        }
                    });
                    $("#level_2").html(html);
                }
            })
        });
        $("#level_1").trigger("change");
    })
</script>