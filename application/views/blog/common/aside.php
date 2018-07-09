 <aside class="col-md-4 sidebar">
                <!-- start widget -->
<!-- end widget -->

<!-- start tag cloud widget -->
<div class="widget">
    <h4 class="title">联系博主</h4>
    <div class="content community">
        <p>QQ：541885781</p>
        <p>微信wq541885781</p>
        <p>新浪微博 <a href="https://weibo.com/2476483980/profile?topnav=1&wvr=6&is_all=1" target="view_window">干杯------</a></p>
        <p>github <a href="https://github.com/shenrenyecaocao">shenrenyecaocao</a></p>
        <p>邮箱联系我： <br><strong>shenrenyecaocao@sina.com</strong>
            <br><strong>shenrenyecaocao@gmail.com</strong></p>
    </div>
</div>
<!-- end tag cloud widget -->

<!-- start tag cloud widget -->
<div class="widget">
    <h4 class="title">文章分类</h4>
    <div class="content tag-cloud">
        <?php foreach ($all_category as $index => $category) { ?>
        <a href="<?php echo site_url('blog/article/index/' . $category['category_id']) ?>"><?php echo $category['name'] ?></a>
        <?php } ?>
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
</aside>