<?php $styles = ['bootstrap-socials', 'form-login']; ?>
<?php require_once('_header.php'); ?>
<div class="row mg-container bg-grey1">
	<div class="col-md-4 col-md-offset-4">
		<form class="form-signin mg-btm">
			<h1 class="heading-desc text-center uppercase">Connectez vous</h1>
			<div class="row omb_row-sm-offset-3 omb_loginOr">
				<div class="col-xs-12 col-sm-4 col-md-offset-4">
					<hr class="omb_hrOr">
					<span class="omb_spanOr"><i class="fa fa-lock"></i></span>
				</div>
			</div>
			<div class="main-form">
				<div class="form-group">	
					<input type="text" class="form-control" placeholder="Votre e-mail" autofocus>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Mot de passe">
				</div>
	    		<div class="form-group">
	    			<button type="submit" class="btn btn-primary btn-block btn-blue">Connexion</button>
	    		</div>
		 		<!-- -->
				<div class="col-md-6">
					<label class="checkbox"> <input type="checkbox" value="remember-me">Restez connecté </label>
				</div>
				<div class="col-md-6 padding-right-0"> 
					<span class="omb_forgotPwd pull-right"> <a href="#">Mot de passe oublié?</a> </span>
				</div>
		 		<!-- -->
	    	</div>
	    	<div class="social-box">
	    		<a class="btn btn-block btn-social btn-facebook"> <i class="fa fa-facebook"></i> Connectez-vous avec Facebook </a>
	    		<a class="btn btn-block btn-social btn-google-plus"> <i class="fa fa-google"></i> Connectez-vous avec Google </a>
	    		<a class="btn btn-block btn-social btn-linkedin"> <i class="fa fa-linkedin"></i> Connectez-vous avec Linkedin </a>
	    	</div>
			<div class="login-footer">
				<div class="row">
	                <div class="col-md-12">
	                    <div class="left-section"> Nouveau sur le site ? <a href="candidat_recruteur.php">Créer un compte!</a> </div>
	                </div>
	            </div>
			</div>
  		</form>
	</div>
</div>

<?php require_once('_footer.php'); ?>