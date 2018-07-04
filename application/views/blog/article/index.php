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
        <li  role="presentation"><a href="<?php echo site_url('blog/album') ?>">相册</a></li>
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
    <span class="page-number">第 1 页 &frasl; 共 9 页</span>
        <a class="older-posts" href="/page/2/"><i class="fa fa-angle-right"></i></a>
</nav>


</main>

                <aside class="col-md-4 sidebar">
                <!-- start widget -->
<!-- end widget -->

<!-- start tag cloud widget -->
<div class="widget">
    <h4 class="title">社区</h4>
    <div class="content community">
        <p>QQ群：277327792</p>
        <p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>
        <p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>
    </div>
</div>
<!-- end tag cloud widget -->

<!-- start widget -->
<div class="widget">
    <h4 class="title">下载 Ghost</h4>
    <div class="content download">
        <a href="/download/" class="btn btn-default btn-block" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '下载Ghost'])">Ghost 中文版（0.6.0）</a>
    </div>
</div>
<!-- end widget -->

<!-- start tag cloud widget -->
<div class="widget">
    <h4 class="title">标签云</h4>
    <div class="content tag-cloud">
        <a href="/tag/ke-hu-duan/">客户端</a>
<a href="/tag/android/">Android</a>
<a href="/tag/jquery/">jQuery</a>
<a href="/tag/ghost-0-7-ban-ben/">Ghost 0.7 版本</a>
<a href="/tag/opensource/">开源</a>
<a href="/tag/zhu-shou-han-shu/">助手函数</a>
<a href="/tag/tag-cloud/">标签云</a>
<a href="/tag/navigation/">导航</a>
<a href="/tag/customize-page/">自定义页面</a>
<a href="/tag/static-page/">静态页面</a>
<a href="/tag/roon-io/">Roon.io</a>
<a href="/tag/configuration/">配置文件</a>
<a href="/tag/upyun/">又拍云存储</a>
<a href="/tag/upload/">上传</a>
<a href="/tag/handlebars/">Handlebars</a>
<a href="/tag/email/">邮件</a>
<a href="/tag/shortcut/">快捷键</a>
<a href="/tag/yong-hu-zhi-nan/">用户指南</a>


        <a href="/tag-cloud/">...</a>
    </div>
</div>
<!-- end tag cloud widget -->

<!-- start widget -->
<!-- end widget -->

<!-- start widget -->
<!-- end widget -->                </aside>

            </div>
        </div>
    </section>
<?php $this->load->view('blog/common/footer') ?>
