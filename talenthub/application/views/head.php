<!DOCTYPE html>
<html lang="en">


<!-- doctors23:12-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <title>THE TALENT HUB</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/toastr.min.css">
    
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="<?php echo base_url();?>Client/employer" class="logo">
					<img src="<?php echo base_url();?>assets/img/logo.png" width="35" height="35" alt=""> <span>THE TALENT HUB</span>
				</a>
			</div>
			 <ul class="nav user-menu float-right">
                 
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?php echo base_url();?>assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span><?php echo $this->Crud_model->get_clientdetails("email");?></span>
                    </a>
					<div class="dropdown-menu">
					
						<?php	if (($this->session->userdata('user_type'))=="jobseeker"){?>
						<a class="dropdown-item" href="<?php echo base_url();?>Client/jobseeker">Profile</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Client/jobseeker/editprof">Edit Profile</a>
						<?php } ?>
						
						<a class="dropdown-item" href="<?php echo base_url();?>Client/logout">Logout</a>
					</div>
                </li>
            </ul>
            
        </div>