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
<?php $this->load->view('blog/common/navigation') ?>
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">

                <main class="col-md-8 main-content">

<article id=111 class="post">

    <div class="post-head">
        <h1 class="post-title"><a href="/ghost-5-years/"><?php echo $article_info['title'] ?></a></h1>
        <div class="post-meta">
            <span class="author">作者：<a href="javascript::void(0)">王琪</a></span> &bull;
            <?php $_date = date("Y年m月d日", strtotime($article_info['create_date'])) ?>
            <time class="post-date" datetime="<?php echo $_date ?>" title="<?php echo $_date ?>"><?php echo $_date ?></time>
        </div>
    </div>
    <div class="post-content">
        <p><?php echo html_encode($article_info['content']) ?></p>
    </div>

    <footer class="post-footer clearfix">
        <div class="pull-left tag-list">
            <i class="fa fa-folder-open-o"></i>

        </div>
        <div class="pull-right share">
        </div>
    </footer>
</article>

</main>
<?php $this->load->view('blog/common/aside') ?>
            </div>
        </div>
    </section>
<?php $this->load->view('blog/common/footer') ?>
