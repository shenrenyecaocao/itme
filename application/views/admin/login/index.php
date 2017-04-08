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
    <link href="static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="static/admin/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="static/admin/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="static/admin/js/ie-emulation-modes-warning.js"></script>
    <style>
      form span {
        color: red;
      }
    </style>
  </head>

  <body>

    <div class="container">

      <?php echo form_open('admin/login', array('class' => "form-signin")); ?>
        <h2 class="form-signin-heading"><b>欢迎进入后台</b></h2>
        <br>
        <label for="email" class="sr-only">邮箱</label>
        <input type="text" name="email"  class="form-control" value="<?php echo set_value('email') ?>" placeholder="邮箱">
        <span id="email"><?php echo form_error('email') ?></span>
        <br>
        <label for="password" class="sr-only">密码</label>
        <input type="password" name="password" class="form-control" placeholder="密码">
        <span id="password"><?php echo form_error('password') ?></span>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="static/admin/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
