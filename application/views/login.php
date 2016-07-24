<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Genome Research Portal - Results</title>


  <?php $this->load->view('dependencies'); ?>

</head>

<body>
	
	<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="">Researchers</a></li>
        <li><a href="">Studies</a></li>
        <li><a href="">About</a></li>
      </ul>
    </div>
  </nav>

  <form class="container" action="<?php echo site_url('login_controller/check_credentials') ?>" style="width: 50%; height: 50px; line-height: 10px;">
      <!-- <form class="row" > -->
        <div class="row">
        <div class="input-field col s12">
            <input name="username" value="" id="pw_input" type="text" class="validate">
            <label class="active" for="pw_input">Username</label>
          </div>
        </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="password" value="" id="un_input" type="text" class="validate">
            <label class="active" for="un_input">Password</label>
          </div>
        </div>

        <div class="container" style="width: 10%; height: 50px; line-height: 10px;" type="submit">      
          <div class="row">
            <button type="submit" class="btn waves-effect waves-teal col s12">
              Login
            </button>
          </div>
        </div>

    </form>


  </body>