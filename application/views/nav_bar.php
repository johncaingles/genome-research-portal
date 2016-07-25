<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url() ?>" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="">Researchers</a></li>
        <li><a href="">Studies</a></li>
        <li><a href="">About</a></li> -->
        <li><?php $this->load->view('nav_login'); ?></li>
      </ul>
    </div>
  </nav>
  <?php $this->load->view('login_modal'); ?>
  <?php $this->load->view('login_dropdown'); ?>