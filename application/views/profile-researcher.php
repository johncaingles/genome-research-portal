<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Genome Research Portal - Researcher</title>


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

	<section id="top-bar">
<div class="spinner-layer spinner-green">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
	  <div class="gap-patch">
        <div class="circle"></div>
      </div>
	  <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

</section>

  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit Info</a>
  <div class="container">
    <div class="section content">

      <!--   Icon Section   -->
      <div class="row">
		<div class="col s12 m12">
			<div class="col s12 m4 left-side">
				<img src="/assets/img/scientist.jpg" alt="" class="circle user-img responsive-img">
			  <div class="block"> 
				<h4 class="center indigo-text">Sean Lat</h4>
				<h5 class="light center">Scientist</h5>
			  </div>
			  <hr>
			  <h5 class="center indigo-text">Affiliations</h5>
			  <p>Laboratory of Infectious Diseases, National Institute of Allergy and Infectious Diseases, National Institutes of Health</p>
			</div>

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
    </div>

  </div>

  <!--  Scripts-->

 <!-- START OF THE EDITS SHIZZ -->

 <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Edit Info</h4>
      <div class="row">
	      <ul class="tabs">
	            <li class="tab col s3"><a href="#personal_info_modal_select">Personal Info</a></li>
	            <li class="tab col s3"><a class="active" href="#journals_modal_select">Journals</a></li>
          </ul>
      </div>
      <!-- <div id="inbox" class="col s12">Inbox</div>
        <div id="unread" class="col s12">Unread</div>
        <div id="outbox" class="col s12">Outbox (Disabled)</div>
        <div id="sent" class="col s12">Sent</div> -->
      <div class="row">
      	<div id="personal_info_modal_select" class="col s12">
			    <div class="input-field col s12">
			      <input name="search_input" value="<?php echo $profile_name; ?>" id="search_input" type="text" class="validate">
			      <label class="active" for="search_input">Name</label>
			    </div>


			    <div class="modal-footer">
			      <button href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Update</button>
			      <button href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</button>
			    </div>

			  </div>

	    <div id="journals_modal_select" class="col s12">
	    	<form method="post" action="<?php echo site_url('profile_edit_controller/edit_journal')  ?>">
	    		<input type="hidden" value="<?php echo $profile_id; ?>" name="profile_id">
	    		<h5>Add a Journal that You Contributed to</h5>
	    		<div class="input-field col s12">
				    <select name="journal_add_choice">
				      <!-- <option value="" disabled selected>Choose a filter</option> -->
				      	<option value="0">Add a new journal...</option>
				      <?php foreach ($all_journals_result as $row) : ?>
				      	<option value="<?php echo $row->id; ?>"><?php echo $row->title; ?></option>
				      <?php endforeach; ?>
				    </select>
				    <label>Existing Journals</label>
			    </div>

			    <div class="input-field col s12">
			      <input name="journal_add_input" value=" " id="search_input" type="text" class="validate">
			      <label class="active" for="search_input">New Journal</label>
			    </div>

			    <h5>Remove a Journal</h5>
	    		<div class="input-field col s12">
				    <select name="journal_remove_choice">
				      <!-- <option value="" disabled selected>Choose a filter</option> -->
				      	<option value="0">None</option>
				      <?php foreach ($journals_result as $row) : ?>
				      	<option value="<?php echo $row->id; ?>"><?php echo $row->title; ?></option>
				      <?php endforeach; ?>
				    </select>
				    <label>Add an existing journal</label>
			    </div>


			
			    <div class="modal-footer">
			      <button href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" type="submit">Update</button>
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			    </form>
			
			  </div>

      </div>
    </div>
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