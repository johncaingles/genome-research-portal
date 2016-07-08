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

	<div class="container">
	      <div class="row">

			<?php foreach($queryResult as $row): ?>
				<form class="card" method="get" action="<?php echo site_url('profile_controller/initialize'); ?>">
					<input type="hidden" name="result_type" value="<?php echo $row->result_type ?>">
					<input type="hidden" name="result_id" value="<?php echo $row->id ?>">
					<div class="col s4">
				        <div class="card " style="overflow: hidden;">
			              <div class="card-image waves-effect waves-block waves-light">
			                <img class="activator" src="<?php echo base_url().'/'.$img_source; ?>">
			              </div>
			              <div class="card-content">
			                <span name="" class="card-title activator grey-text text-darken-4"><?php echo $row->title ?>
			                		<i class="material-icons right" sytle="cursor: pointer;">more_vert</i>
			                </span>

			                <p><button style="background:none!important;
										     border:none; 
										     padding:0!important;
										     font: inherit;
										     /*border is optional*/
										     border-bottom:1px solid #444; 
										     cursor: pointer;" 
									     type="submit" >Learn more..
							     </button></p>
			              </div>
			              <div class="card-reveal" style="display: none; transform: translateY(0px);">
			                <span class="card-title grey-text text-darken-4"><?php echo $row->title ?><i class="material-icons right">close</i></span>
			                <p>Here is some more information about this product that is only revealed once clicked on.</p>
			              </div>

			              <div class="card-action">
			                <a href="#">Link 1</a>
			                <a href="#">Link 2</a>
			              </div>
			            </div>
	            </div>
            </form>
	          <?php endforeach; ?>
	        </div>
	      </div>
            

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
});
</script>	

</body>
</html>