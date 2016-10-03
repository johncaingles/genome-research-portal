<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url() ?>" class="brand-logo"><img src="<?php echo site_url('assets/img/small_logo.png') ?>" class="responsive-img" style="width:100px; height: auto; margin-top: 9px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo site_url('search_controller/searchSingle?search_input=&filter_input=researcher') ?>">Researchers</a></li>
        <li><a href="<?php echo site_url('search_controller/searchSingle?search_input=&filter_input=study') ?>">Studies</a></li>
        <li><a href="<?php echo site_url('search_controller/searchSingle?search_input=&filter_input=genome') ?>">Genomes</a></li>
        <li><a href="">About</a></li>
        <li><?php $this->load->view('nav_login'); ?></li>
      </ul>
    </div>
  </nav>
  <?php $this->load->view('login_modal'); ?>
  <?php $this->load->view('login_dropdown'); ?>
