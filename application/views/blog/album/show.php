<?php $this->load->view('blog/common/header') ?>
<body>
  <div class="jumbotron masthead">
    <div class="container">
      <h1>Best wish to you</h1>
      <h2>Do you like it ?</h2>
      <ul class="masthead-links">
        <li>
          <img src="<?php echo $image_url; ?>">
        </li>
        <li>
            <p><a href="<?php echo site_url('blog/album') . '?page=' . $current_page ?>">返回</a></p>
        </li>
      </ul>
    </div>
  </div>

<?php $this->load->view('blog/common/footer') ?>
