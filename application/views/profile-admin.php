<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Genome Research Portal</title>


  <?php $this->load->view('dependencies'); ?>

</head>
<body>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="">Researchers</a></li>
        <li><a href="">Studies</a></li>
        <li><a href="">About</a></li>
        <li><a href="<?php echo site_url('login_controller/index'); ?>">Login</a></li>
      </ul>
    </div>
  </nav>

</body>