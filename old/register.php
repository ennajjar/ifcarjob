<?php $styles = ['bootstrap-socials', 'form-login']; ?>
<?php require_once('_header.php'); ?>
<div class="row mg-container bg-grey1">
	<div class="col-md-6 col-md-offset-3">
		<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group">
		    <div class="btn-group" role="group">
		        <button type="button" id="stars" class="btn btn-primary-blue no-border" href="#tab1" data-toggle="tab">
		        	<span class="fa fa-users" aria-hidden="true"></span>
		            <div class="hidden-xs">Inscription Candidat</div>
		        </button>
		    </div>
		    <div class="btn-group" role="group">
		        <button type="button" id="favorites" class="btn btn-default no-border" href="#tab2" data-toggle="tab">
		        	<span class="fa fa-user-secret" aria-hidden="true"></span>
		            <div class="hidden-xs">Inscription Recruteur</div>
		        </button>
		    </div>
		</div>

		<div class="well no-border">
			<div class="tab-content">
		    	<div class="tab-pane fade in active" id="tab1">
		      		<?php include('candidat.php') ?>
		    	</div>
		    	<div class="tab-pane fade in" id="tab2">
		      		<?php include('recruteur.php') ?>
		    	</div>
		  	</div>
		</div>
	</div>
</div>
<?php require_once('_footer.php'); ?>