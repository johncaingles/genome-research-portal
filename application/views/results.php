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
	
	  <?php $this->load->view('nav_bar'); ?>

	<div class="container"><!-- 
			<div class="row">
				<div class="section content">

					<div class="col s12 m8 right-side">
				<div class="block">
					<div class="row">
						<div class="col m12 s12">
							<div class="card large">
								<div class="card-image">
								<img src="/assets/img/workstation1.jpg" alt="work">
									<div class="card-content">
										<span class="card-title grey-text darken-4">Journals <i class="mdi-navigation-more-vert right"></i></span>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text darken-4">Journals <i class="mdi-navigation-close right"></i></span>
										<a href = "#">Vaccine 21 (27-30), 4307-4316 (2003)</a></br>
										<a href = "#">Vaccine 21 (27-30), 4307-4316 (2003)</a></br>
										<a href = "#">Vaccine 21 (27-30), 4307-4316 (2003)</a></br>
										<a href = "#">Vaccine 21 (27-30), 4307-4316 (2003)</a></br>
										<a href = "#">Vaccine 21 (27-30), 4307-4316 (2003)</a></br>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
				</div>
				</div> -->

	      <div class="row">
			<?php foreach($searchResults as $queryResult): ?>
				<?php foreach($queryResult as $row): ?>
					<form class="card" method="get" action="<?php echo site_url('profile_controller/initialize'); ?>">
						<input type="hidden" name="result_type" value="<?php echo $row->result_type ?>">
						<input type="hidden" name="result_id" value="<?php echo $row->id ?>">
						<div class="col s4">
					        <div class="card " style="overflow: hidden;">
				              <div class="card-image waves-effect waves-block waves-light"  >
				                <img class="activator" src="<?php echo base_url().'/'.$row->img_source; ?>">
				                <span class="card-title"><?php echo ucfirst($row->result_type); ?></span>
				              </div>
				              <div class="card-content">
				                <span name="" class="card-title activator grey-text text-darken-4"><?php echo $row->title ?>
				                		<i class="material-icons right" sytle="cursor: pointer;">more_vert</i>
				                </span>

				                <p><a href="<?php echo base_url().'profile_controller/initializeFromLink/'.$row->id.'/'.$row->result_type; ?>">Learn more...</a></p>
				              </div>
				              <div class="card-reveal" style="display: none; transform: translateY(0px);">
				                <span class="card-title grey-text text-darken-4"><?php echo $row->title ?><i class="material-icons right">close</i></span>
				                <p>Here is some more information about this product that is only revealed once clicked on.</p>
				              </div>

				             <!--  <div class="card-action">
				                <a href="#">Link 1</a>
				                <a href="#">Link 2</a>
				              </div> -->
				            </div>
		            </div>
	            </form>
		          <?php endforeach; ?>
		      <?php endforeach; ?>	
	        </div>
	      </div>
            

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
    $('.modal-trigger').leanModal();
});
</script>	

</body>
</html>