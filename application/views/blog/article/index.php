<?php $this->load->view('blog/common/header') ?>

    <!-- start header -->
    <div class="main-header"  style="background-image: url(http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- start logo -->
                    <a class="branding" href="<?php echo site_url('blog/article') ?>" title="Ghost 开源博客平台"><img src="static/index/images/4f5566c1f7bc28b3f7ac1fada8abe.png" alt="开源博客平台"></a>
                    <!-- end logo -->
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

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

    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">

                <main class="col-md-8 main-content">
<?php
if (empty($article_list)) {
?>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
对不起，请等待博主发表相关文章！</h3>

<?php
} ?>

<?php foreach ($article_list as $index => $article) { ?>
<article id=111 class="post">

    <div class="post-head">
        <h1 class="post-title"><a href="<?php echo site_url('blog/article/show/' . $article['article_id']) ?>"><?php echo $article['title'] ?></a></h1>
        <div class="post-meta">
            <span class="author">作者：<a href="javascript::void(0)">王琪</a></span> &bull;
            <?php $_date = date("Y年m月d日", strtotime($article['create_date'])) ?>
            <time class="post-date" datetime="<?php echo $_date ?>" title="<?php echo $_date ?>"><?php echo $_date ?></time>
        </div>
    </div>
    <div class="post-content">
        <p><?php echo html_encode(substr($article['content'], 0, 200)) ?></p>
    </div>
    <div class="post-permalink">
        <a href="<?php echo site_url('blog/article/show/' . $article['article_id']) ?>" class="btn btn-default">阅读全文</a>
    </div>

    <footer class="post-footer clearfix">
        <div class="pull-left tag-list">
            <i class="fa fa-folder-open-o"></i>

        </div>
        <div class="pull-right share">
        </div>
    </footer>
</article>
<?php } ?>



<nav class="pagination" role="navigation">
        <?php if ($current_page > 1) {?>
        <a class="older-posts" href="<?php echo site_url('blog/article/index') . "?page=" . $last_page ?>"><i class="fa fa-angle-right">上一页</i></a>
        <?php } ?>
    <span class="page-number">第 <?php echo $current_page ?> 页 &frasl; 共 <?php echo $total_page ?> 页</span>
        <?php if ($current_page < $total_page) { ?>
        <a class="older-posts" href="<?php echo site_url('blog/article/index') . "?page=" . $next_page ?>"><i class="fa fa-angle-right">下一页</i></a>
        <?php } ?>
</nav>


</main>
<?php $this->load->view('blog/common/aside') ?>
            </div>
        </div>
    </section>
<?php $this->load->view('blog/common/footer') ?>
