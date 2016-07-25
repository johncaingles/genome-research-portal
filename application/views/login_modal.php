<div id="login_modal" class="modal">
    <div class="modal-content">
        <div class="row">
        	<div class="col s6">
        		<h4> Existing User? </h4>
                <form action="<?php echo site_url('login_controller/check_credentials'); ?>" method="get">
                    <div class="input-field col s12">
                        <input name="username" value="" id="username" type="text" class="validate">
                        <label class="active" for="username">Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="password" value="" id="password" type="password" class="validate">
                        <label class="active" for="password">Password</label>
                    </div>
                    <button class="btn waves-effect waves-light blue" type="submit">Login
                        <i class="material-icons right">send</i>
                    </button>
                </form>
        	</div>

        	<div class="col s6">
        		<h4> Create an account </h4>
        	</div>
        </div>

    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>

    </div>
</div>