        <!-- start navigation -->
    <nav class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="menu">
        <li class="nav-current" role="presentation"><a href="<?php echo site_url('blog/article') ?>">首页</a></li>
<?php foreach ($categorys as $index => $category) { ?>
        <li  role="presentation"><a href="<?php echo site_url('blog/article/index/' . $category['category_id']) ?>"><?php echo $category['name'] ?></a></li>
<?php } ?>
        <li  role="presentation"><a href="javascript::void(0)">关于</a></li>
</ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
