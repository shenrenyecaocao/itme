<?php $this->load->view('admin/common/header') ?>
<?php $this->load->view('admin/common/top') ?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('admin/common/side') ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h1 class="page-header">Dashboard</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>index</th>
                <th>Category</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
              <?php foreach ($categorys as $index => $category) { ?>
              <tr>
                <td><?php echo $index ?></td>
                <td><?php echo $category['name'] ?></td>
                <td><a href="<?php echo base_url("admin/category/edit/{$category['category_id']}") ?>">edit</a></td>
                <th><a href="<?php echo base_url("admin/category/delete/{$category['category_id']}") ?>">delete</a></th>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/common/footer') ?>

