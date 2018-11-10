<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">编辑分类</h1>
          <!-- <div class="table-responsive"> -->
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('admin/category/update/' . $category_id) ?>">
              <div class="container">

                <div class="row form-group">
                    <label class="control-label col-lg-1" for="level">级别</label>
                    <div class="col-lg-3 col-md-4">
                        <select class="form-control" name="level" id="level">
                            <option value="">未选择分类级别</option>
                            <?php foreach ($category_level as $level => $level_name) { ?>
                            <option value="<?php echo $level ?>" <?php echo  set_select('level', $level, $level == $category_info['level']); ?>><?php echo $level_name ?></option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('level', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <select class="form-control" name="fid" id="fid">
                            <option value="">未选择父类</option>
                        </select>
                        <?php echo form_error('fid', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-lg-1" for="name">分类</label>
                    <div class="col-lg-5 col-md-6">
                        <input class="form-control" value="<?php echo set_value('name', $category_info['name']) ?>" name="name" id="name" type="text" placeholder="请输入分类名称">
                        <?php echo form_error('name', '<p class="help-block" style="color: red">', '</p>') ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-lg-1" for="article_type">描述</label>
                    <div class="col-lg-5 col-md-6">
                      <input class="form-control" value="<?php echo set_value('description', $category_info['description']) ?>" type="text" name="description" placeholder="请输入分类描述">
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
        $("#level").change(function(){
            if ($(this).val() != 1) {
                $.ajax({
                    url:'<?php echo site_url('admin/category/get_category') ?>',
                    type:'POST',
                    async:true,
                    dataType:'json',
                    data:{
                        level: $(this).val()
                    },
                    success:function(data,textStatus,jqXHR){
                        var html = '<option value="">未选择父类</option>';
                        var fid = <?php echo $fid == '' ? 0 : $fid ?>;

                        console.log(data);
                        $.each(data ,function(i,n) {
                            if (n['category_id'] == fid) {
                                html += '<option value="' + n['category_id'] + '"' + "selected" + '>' + n['name'] + '</option>';
                            } else {
                                html += '<option value="' + n['category_id'] + '"' + '>' + n['name'] + '</option>';
                            }
                        });
                        $("#fid").html(html);
                        $("#fid").parent().show();
                    }
                })
            } else {
                $("#fid").parent().hide();
            }
        });
        $("#level").trigger("change");
    })
</script>
