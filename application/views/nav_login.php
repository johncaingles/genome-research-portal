<code><?php

	if (!$this->session->userdata('logged_in')) {
		// echo '<a class="modal-trigger" href="#login_modal">Edit Info</a>';
		echo '<a class="modal-trigger" href="#login_modal">Login</a>';
	}
	else {
		$username =  $this->session->userdata('username');
		echo '<a class="dropdown-button" href="#!" data-activates="account_dropdown">'.$username.'<i class="material-icons right">arrow_drop_down</i></a>';
	}

?></code>

