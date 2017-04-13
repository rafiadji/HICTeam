<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Hardware Interactive Club</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
	
	
	<!-- <link rel="shortcut icon" href="favicon.ico" /> -->
</head>
<body class="login">
	<div class="logo">
		<img src="<?=base_url();?>assets/img/logo-big.png" alt="" /> 
	</div>
	<div class="content">
		<?php if($this->session->flashdata('notif')): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clr');?>">
			<button class="close" data-dismiss="alert"></button>
			<?php echo $this->session->flashdata('notif'); ?>
		</div>
		<?php endif; ?>
		<form class="form-vertical login-form" method="post" action="<?php echo base_url()?>admin/login">
			<h3 class="form-title">Login to your account</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Enter any username and password.</span>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn green pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>
			</div>
		</form>
	</div>
	<div class="copyright">
		2013 &copy; Metronic. Admin Dashboard Template.
	</div>
	
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery.pulsate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery.bootpag.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/login.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/scripts/ui-general.js"></script>
	
	<script>
		timeout();

		function timeout(){
			window.setTimeout(function(){
				$('.close').click();
			}, 2000);
		}
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		  UIGeneral.init();
		});
	</script>
</body>
</html>