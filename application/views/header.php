<!DOCTYPE html>
<html>

	<head>
		<title>Family Module</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/jquery-ui/jquery-ui.min.css">
		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.min.js"></script>


	</head>
	<body>

<body>


<div class="navbar navbar-inverse">
	<div class="container">
	<a class="navbar-brand" href="#" style="color: #FFF;"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;Family Module</a>
	<?php
		if(isset($this->session->userdata['logged_in'])){
      	?>
				<ul class="nav navbar-nav navbar-right">
			 <li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color: #FFF;"><span class="glyphicon glyphicon-cog"></span></a>
				 <ul class="dropdown-menu">
					 <li><a href="#">Account Settings</a></li>
					 <li><a href="<?php echo base_url() ?>admin/Admin/logout">Logout</a></li>
				 </ul>
				<?php
      }
			?>
	 </li>
 </ul>
	</div>
</div>
<div class="container">
