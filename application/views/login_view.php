<div id="login_form">
  <h3>Login</h3>
  <?php
  //validation_errors()
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

</div>
