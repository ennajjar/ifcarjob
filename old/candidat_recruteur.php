<?php $styles = ['bootstrap-socials', 'form-login']; ?>
<?php require_once('_header.php'); ?>
<div class="row mg-container bg-grey1">
	<div class="col-md-6 col-md-offset-3">
		<div class="form-signin mg-btm">
			<h1 class="heading-desc text-center uppercase">Inscrivez-vous</h1>
			<div class="row omb_row-sm-offset-3 omb_loginOr">
				<div class="col-xs-12 col-sm-4 col-md-offset-4">
					<hr class="omb_hrOr bg-blue">
					<span class="omb_spanOr"><i class="fa fa-user text-blue"></i></span>
				</div>
			</div>
			<div class="main-bloc">

					<div class="col-md-8 col-md-offset-2 text-flot ">Créez votre compte candidat pour votre recherche d´emploi ou<br/> un compte recruteur pour trouver des candidatures ciblées</div>
					<div class="col-md-6 padding-left-5 padding-right-0"><a href="register_candidat.php"><img src="images/btn_candidat.png" class="img-responsive"></a></div>
					<div class="col-md-6 padding-left-0 padding-right-0"><a href="register_recruteur.php"><img src="images/btn_recruteur.png" class="img-responsive"></a></div>
				
	    	</div>
	    	
  		</div>
	</div>
</div>

<?php require_once('_footer.php'); ?>