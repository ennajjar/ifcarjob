<?php $styles = ['bootstrap-socials', 'form-login']; ?>
<?php require_once('_header.php'); ?>
<div class="row mg-container bg-grey1">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-signin mg-btm">
			<h1 class="heading-desc text-center">Nouveau candidat</h1>
			<div class="row omb_row-sm-offset-3 omb_loginOr">
				<div class="col-xs-12 col-sm-4 col-md-offset-4">
					<hr class="omb_hrOr">
					<span class="omb_spanOr"><i class="fa fa-user"></i></span>
				</div>
			</div>
			<div class="main-form-register">
				<div class="row">
					<div class="col-md-6">
						<label class="radio-inline"> <input type="radio" name="gender" id="gender" value="mr" checked>Mr </label>
						<label class="radio-inline"> <input type="radio" name="gender" id="gender" value="mme">Mme </label>
						<label class="radio-inline"> <input type="radio" name="gender" id="gender" value="mlle">Mlle</label>						
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6"><input type="text" class="form-control" placeholder="Nom(*)"></div>
					<div class="col-md-6"><input type="text" class="form-control" placeholder="Prénom(*)"></div>
					<div class="col-md-6"></div>
				</div>
				<div class="row">
					<div class="col-md-6"><input type="email" class="form-control" placeholder="Adresse email(*)"></div>
					<div class="col-md-6"><input type="email" class="form-control" placeholder="Confirmation Adresse email(*)"></div>
				</div>
				<div class="row">
					<div class="col-md-6"><input type="password" name="password" class="form-control" placeholder="Mot de passe(*)"></div>
					<div class="col-md-6"><input type="password" name="confirmation_password" class="form-control" placeholder="Confirmation Mot de passe(*)"></div>
					
				</div>				
				<div class="checkbox">
				    <label>
				      <input type="checkbox"><small>J’ai lu et j’accepte <a href="#">les conditions générales</a> d'utilisation du site ifcarjob.com</small>
				    </label>
				</div>
				<div class="row">
					<div class="col-md-6"><div class="left-section"> J'ai dêja un compte <a href="login.php">connexion</a> </div></div>
					<div class="col-md-6"><button type="submit" class="btn btn-primary btn-block btn-blue uppercase">Valider mes informations</button></div>
				</div>
	    	</div>
	    	<div class="social-box padding-top-0">
	    		<a class="btn btn-block btn-social btn-facebook"> <i class="fa fa-facebook"></i> Connectez-vous avec Facebook </a>
	    		<a class="btn btn-block btn-social btn-google-plus"> <i class="fa fa-google"></i> Connectez-vous avec Google </a>
	    		<a class="btn btn-block btn-social btn-linkedin"> <i class="fa fa-linkedin"></i> Connectez-vous avec Linkedin </a>
	    	</div>
  		</form>
	</div>
</div>

<?php require_once('_footer.php'); ?>