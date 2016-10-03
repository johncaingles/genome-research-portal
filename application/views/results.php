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

	<div class="container">
		<!-- <div class="row" > -->
			<div class="card-panel hoverable" style="margin-top: 20px;">

				<div class="row">
					<form id="user_input" method="get" action="<?php echo site_url('search_controller/searchSingle'); ?>">
						    <div class="input-field col s7">
						      <input name="search_input" value="" id="search_input" type="text" class="validate">
						      <label class="active" for="search_input">Search</label>
						    </div>

						  <div class="input-field col s3">
						    <select name="filter_input">
						      <!-- <option value="" disabled selected>Choose a filter</option> -->
						      <option value="all">All</option>
						      <option value="researcher">Researcher</option>
						      <option value="study">Study</option>
						      <option value="genome">Genome</option>
						    </select>
						    <label>Search Filter</label>
						  </div>

						<div class="col s1" style="margin-top: 20px;" type="submit">
						    <button class="btn waves-effect waves-light blue">Search</button>
						</div>
					</form>
				</div>

			</div>
		<!-- </div> -->

		  
	      <div class="row">
			<?php foreach($searchResults as $queryResult): ?>
				<div class="row">
				<?php $isFirstGenomeItem = true; ?>
				<?php $currentResultType; ?>
				<?php foreach($queryResult as $row): ?>
					<form method="get" action="<?php echo site_url('profile_controller/initialize'); ?>">

						
					<?php if ($row->result_type == 'genome') { 
						$currentResultType  = 'genome'; ?>
						<?php if($isFirstGenomeItem==true) { ?>
							<h3> Genomes </h3>
					    	<div class="collection col s12">
					    <?php $isFirstGenomeItem=false; } ?>
				        	<a href="<?php echo base_url().'profile_controller/initializeFromLink/'.$row->id.'/'.$row->result_type; ?>" class="collection-item"><?php echo $row->title; ?></a>
					<?php  } ?>
						<!-- <?php if($isFirstGenomeItem==true) { ?>
							</div>
						<?php $isFirstGenomeItem=false; } ?> -->


					<?php if ($row->result_type != 'genome') {
						$currentResultType  = 'pwet'; ?>

						<div class="card hoverable">
							<input type="hidden" name="result_type" value="<?php echo $row->result_type ?>">
							<input type="hidden" name="result_id" value="<?php echo $row->id ?>">
							<div class="col s12 m6 l4">
						        <div class="card " style="overflow: hidden;">
					              <div class="card-image waves-effect waves-block waves-light"  >
					                <a href="<?php echo base_url().'profile_controller/initializeFromLink/'.$row->id.'/'.$row->result_type; ?>"><img class="activator" src="<?php echo base_url().'/assets/img/researcher_'.mt_rand(1,10).".png" ?>"></a>
					                <span class="card-title"><?php echo ucfirst($row->result_type); ?></span>
					              </div>
					              <div class="card-content">
					                <span name="" class="card-title activator grey-text text-darken-4"><?php echo $row->title ?>
					                		<i class="material-icons right" sytle="cursor: pointer;">more_vert</i>
					                </span>

					                <p><a href="<?php echo base_url().'profile_controller/initializeFromLink/'.$row->id.'/'.$row->result_type; ?>">Learn more...</a></p>
					              </div>
					              <!-- <div class="card-reveal" style="display: none; transform: translateY(0px);">
					                <span class="card-title grey-text text-darken-4"><?php echo $row->title ?><i class="material-icons right">close</i></span>
					                <p>Here is some more information about this product that is only revealed once clicked on.</p>
					              </div> -->

					             <!--  <div class="card-action">
					                <a href="#">Link 1</a>
					                <a href="#">Link 2</a>
					              </div> -->
					            </div>
		            		</div>
		            	</div>
		            <?php } ?>
	            </form>
		          <?php endforeach; ?>
		          <?php if ($currentResultType=='genome') {
		          	echo '</div>';
		          } ?>
		          </div>
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
