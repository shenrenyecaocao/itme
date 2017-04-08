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
    <link href="static/admin/css/dashboard.css" rel="stylesheet">

    <script src="static/admin/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('admin/home') ?>">管理员：<b><?php echo $_SESSION['admin_userinfo']['name'] ?></b>你好！</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('index') ?>">前台首页</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('admin/logout'); ?>">退出</a></li>
            <li><a href="#">设置</a></li>
            <li><a href="#">帮助</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container-fluid">
      <div class="row">
