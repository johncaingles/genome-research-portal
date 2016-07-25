<ul id="account_dropdown" class="dropdown-content">
  <li><a href="<?php echo base_url().'profile_controller/initializeFromLink/'.$this->session->userdata('account_id').'/'.'researcher' ?>">Profile</a></li>
  <li class="divider"></li>
  <li><a href="<?php echo site_url('login_controller/logout'); ?>">Logout</a></li>
</ul>