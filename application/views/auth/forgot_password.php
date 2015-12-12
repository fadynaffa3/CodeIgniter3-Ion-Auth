<h1><?php echo t('forgot_password');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

  <div class="form-group">
    <label for="email"><?php echo t('forgot_password_email')?></label>
    <?php echo form_input($email);?>
  </div>

  <div class="form-group"><?php echo form_submit('submit', t('submit'), 'class="btn btn-success"');?></div>

<?php echo form_close();?>
