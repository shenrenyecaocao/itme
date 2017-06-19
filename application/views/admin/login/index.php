<?php $this->load->view('admin/common/header') ?>
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
        <span id="email"><?php if ($sign_in_email_error) echo $sign_in_email_error ?><?php echo form_error('email') ?></span>
        <br>
        <label for="password" class="sr-only">密码</label>
        <input type="password" name="password" class="form-control" placeholder="密码">
        <span id="password"><?php if ($sign_in_password_error) echo $sign_in_password_error ?><?php echo form_error('password') ?></span>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        <br>
        <a class="btn btn-primary" href="<?php echo base_url('admin/register') ?>" style="width: 45%">注册</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="<?php echo base_url('aa') ?>" style="width: 45%">找回密码</a>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="static/admin/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
