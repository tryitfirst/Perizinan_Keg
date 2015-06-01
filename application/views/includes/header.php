<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    
    
    
    
        <link rel="stylesheet" href="<?php echo base_url();?>css/style1.css">

    
    
    
  </head>

  <body>

    <div id="wrap">
  <div id="regbar">
    <div id="navthing">
     <h2><?php if(!$this->session->userdata('is_logged_in')) : ?>
	 <a href="#" id="loginform">Login</a> | 
	  <?php endif; ?>
	 <?php if(!$this->session->userdata('is_logged_in')) : ?>
		  <a href="<?php echo base_url("login/signup")?>">Create Account</a> |
		  <?php endif; ?> 
		<?php if($this->session->userdata('is_logged_in')) if($this->session->userdata('email') != 'raditiyo@gmail.com' and $this->session->userdata('email') != 'dwis@gmail.com' and $this->session->userdata('email') != 'naniks@gmail.com') : ?>
		  <a href="<?php echo base_url("upload")?>">Submiting Proposal</a> | 
		  <?php endif; ?> 
		  <?php if(!$this->session->userdata('is_logged_in')) : ?>
		  <a href="<?php echo base_url("mycal/display/")?>">Calendar</a>
			<?php endif; ?> 
			 <?php if($this->session->userdata('is_logged_in')) : ?>
		  <a href="<?php echo base_url("mycal/display/")?>">Calendar</a> |
			<?php endif; ?> 
		  <?php if($this->session->userdata('is_logged_in')) 
			  if($this->session->userdata('email') == 'raditiyo@gmail.com' or $this->session->userdata('email') == 'dwis@gmail.com' or $this->session->userdata('email') == 'naniks@gmail.com' ) : ?>
			<a href="<?php echo base_url('upload/files') ?>">Files</a> |
		  <?php endif; ?>
		  <?php if($this->session->userdata('is_logged_in'))
			  if($this->session->userdata('email') != 'raditiyo@gmail.com' and $this->session->userdata('email') != 'dwis@gmail.com' and $this->session->userdata('email') != 'naniks@gmail.com' ) :?>
			<a href="<?php echo base_url('upload/status') ?>">Status</a> |
		  <?php endif; ?>
		  <?php if($this->session->userdata('is_logged_in'))
			  if($this->session->userdata('email') == 'raditiyo@gmail.com' or $this->session->userdata('email') == 'dwis@gmail.com' or $this->session->userdata('email') == 'naniks@gmail.com' ) : ?>
			<a href="<?php echo base_url('acc') ?>">ACC</a> |
		  <?php endif; ?>
          <?php if($this->session->userdata('is_logged_in')) : ?>
			<a href="<?php echo base_url("login/logout/")?>">Logout</a>
		  <?php endif; ?></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <?php
	echo form_open('login/validate_credential');
	echo form_input(array(
  		'name' => 'email',
  		'value' => '',
  		'placeholder' => 'Username',
  ));
	echo form_password(array(
      'name' => 'password',
      'value' => '',
      'placeholder' => 'Password'
  ));
  
	echo form_submit('submit', 'Login');
	echo form_close();
	
	?>
 
           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<div id="navthing1">
	coba
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo base_url();?>js/index.js"></script>

    
    
    
  </body>
</html>