
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <base href="<?php echo base_url(); ?>" />
    <link rel="icon" href="static/index/image/itme.png">
    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="static/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/index/css/site.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="static/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link rel="stylesheet" href="static/index/css/signin.css" rel="stylesheet">

    <script src="static/index/js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="static/index/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <header class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('blog/dashboard') ?>">桑榆非晚</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo site_url('blog/dashboard') ?>"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;首页</a>
          </li>
<?php foreach ($categorys as $index => $category) { ?>
          <?php if ($category['level'] == 1) { ?>
          <li class="dropdown">
            <a href="<?php echo site_url('blog/article/' . $category['category_id']) ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $category['name'] ?><span class="caret"></span></a>
            <ul class="dropdown-menu">
    <?php foreach ($categorys as $k => $v) { ?>
              <?php if ($category['category_id'] == $v['fid']) { ?>
              <li><a href="<?php echo site_url('blog/article/' . $v['category_id']) ?>"><?php echo $v['name'] ?></a></li>
              <?php } ?>
    <?php } ?>
            </ul>
          </li>
          <?php } ?>
<?php } ?>

          <li>
              <li><a href="javascript::void(0)">关于自己</a></li>
          </li>
          <li>
              <li><a href="<?php echo site_url('blog/album') ?>">相册</a></li>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
          <input type="text" class="form-control" name="keyword" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">
            <span class="glyphicon glyphicon-search">搜索</span>
          </button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#mymodal" data-toggle="modal">登录</a></li>
          <li><a href="#">注册</a></li>
        </ul>
      </div>
    </div>
  </header>
  <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="modal-title" align="center"><b>欢迎登录</b></h3>
        </div>
        <div class="modal-body">
          <form class="form-signin">
            <label for="user" class="sr-only">用户</label>
            <input type="text" name="user" class="form-control" placeholder="用户名或邮箱">
            <br>
            <label for="password" class="sr-only">密码</label>
            <input type="password" name="password" class="form-control" placeholder="密码">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember">记住密码
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
          </form>
        </div>
        <div class="modal-footer tcck2 d3f">
          <h4 class="text-left">第三方登录</h4>
          <h5 class="text-right">
            <a href="/User/User/addmail.html">注册</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="/User/User/memory.html" class="memory">
              <span class="text-warning">找回密码</span>
            </a>
          </h5>
          <!-- <a href="/User/Oauth/login.html" class="qq"></a> -->
        </div>
      </div>
    </div>
  </div>

