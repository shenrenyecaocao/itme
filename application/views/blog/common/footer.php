<footer class="footer ">
    <div class="container">
      <div class="row footer-top">
        <div class="col-md-6 col-lg-6">
          <h4>
            <img src="https://assets.bootcss.com/www/assets/img/logo.png?1528519874373">
          </h4>
          <p>我们一直致力于为广大开发者提供更多的优质技术文档和辅助开发工具！</p>
        </div>
        <div class="col-md-6  col-lg-5 col-lg-offset-1">
          <div class="row about">
            <div class="col-sm-3">
              <h4>关于</h4>
              <ul class="list-unstyled">
                <li><a href="/about/">关于我们</a></li>
                <li><a href="/ad/">广告合作</a></li>
                <li><a href="/links/">友情链接</a></li>
                <li><a href="/hr/">招聘</a></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h4>联系方式</h4>
              <ul class="list-unstyled">
                <li><a href="http://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank">新浪微博</a></li>
                <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
              </ul>
            </div>
            <div class="col-sm-4">
              <h4>旗下网站</h4>
              <ul class="list-unstyled">
                <li><a href="http://www.golaravel.com/" target="_blank">Laravel中文网</a></li>
                <li><a href="http://www.ghostchina.com/" target="_blank">Ghost中国</a></li>
                <li><a href="http://www.bootcdn.cn/" target="_blank">BootCDN</a></li>
                <li><a href="https://pkg.phpcomposer.com/" target="_blank">Packagist中国镜像</a></li>
                <li><a href="https://www.return.net/" target="_blank">燃腾教育</a></li>
              </ul>
            </div>
            <div class="col-sm-2">
              <h4>赞助商</h4>
              <ul class="list-unstyled">
                <li><a href="https://www.upyun.com" target="_blank">又拍云</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <hr/>
      <div class="row footer-bottom">
        <ul class="list-inline text-center">
          <li><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></li><li>京公网安备11010802014853</li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="static/index/js/jquery.min.js"><\/script>')</script>
    <script src="static/index/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="static/index/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="static/index/js/ie10-viewport-bug-workaround.js"></script>

    <script src="static/index/js/jquery.unveil.min.js"></script>
    <script src="static/index/js/jquery.scrollUp.min.js"></script>
    <script src="static/index/js/toc.min.js"></script>
</body>
</html>

<script type="text/javascript">
    window.onload = function () {
        var log = console.log
        var dropdown_menu = $('.dropdown-menu');
        dropdown_menu.each(function(){
            if ($(this).children('li').length == 0) {
                var a_text = $(this).prev().text();
                var a_href = $(this).prev().attr('href');
                $(this).parent().html('<a href=" ' + a_href + '">' + a_text + '</a>')
            }
        });
    };
</script>