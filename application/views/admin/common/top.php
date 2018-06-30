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
          <a class="navbar-brand" href="<?php echo site_url('admin/dashboard') ?>">管理员：<b><?php echo $this->session->userdata('admin_info')['name'] ?></b>&nbsp你好！</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('blog/dashboard') ?>" target="_blank">前台首页</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('admin/logout'); ?>">退出</a></li>
            <li><a href="javascript::void(0)">设置</a></li>
            <li><a href="javascript::void(0)">帮助</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container-fluid">
      <div class="row">
