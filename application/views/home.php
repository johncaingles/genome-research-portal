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

  <?php $this->load->view('nav_bar'); ?>

  <!-- <script>alert("<?php echo site_url('search_controller/searchSingle'); ?>")</script> -->

	<!-- <div class="pushdown-10p"></div> -->
<form id="user_input" method="get" action="<?php echo site_url('search_controller/searchSingle'); ?>">
	<div id="container">
		<div class="section center" style="padding-top: 5%;">
			<img src="assets/img/full_logo.png" class="responsive-img" style="width:300px; height: auto;">
			<!-- <h1>Logo</h1> -->
		</div>
		<div class="container" style="width: 50%; height: 50px; line-height: 10px;">
			<div class="row" >

			    <div class="input-field col s8">
			      <input name="search_input" value="" id="search_input" type="text" class="validate">
			      <label class="active" for="search_input">Search</label>
			    </div>

			  <div class="input-field col s4">
			    <select name="filter_input">
			      <!-- <option value="" disabled selected>Choose a filter</option> -->
			      <option value="all">All</option>
			      <option value="researcher">Researcher</option>
			      <option value="study">Study</option>
			      <option value="genome">Genome</option>
			    </select>
			    <label>Search Filter</label>
			  </div>


		    </div>
		</div>

		<div class="container" style="width: 10%; height: 50px; line-height: 10px;" type="submit">
			<div class="row">
			    <button class="btn waves-effect waves-light blue col s12">Search</button>
			</div>
		</div>
	</div>
</form>

<br><br><br><br><br><br><br>

<footer class="page-footer light-blue lighten-1">

</footer>
<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
    $('.modal-trigger').leanModal();
});
</script>

</body>
</html>
