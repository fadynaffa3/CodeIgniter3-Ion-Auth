<h1><?php echo t('create_user');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

  <div class="form-group">
    <label> <?php echo t('first_name');?> </label>
    <?php echo form_input($first_name);?>
  </div>

  <div class="form-group">
    <label> <?php echo t('last_name');?> </label>
    <?php echo form_input($last_name);?>
  </div>

  <div class="form-group">
    <label> <?php echo t('company');?> </label>
    <?php echo form_input($company);?>
  </div>

  <div class="form-group">
    <label> <?php echo t('email');?> </label>
    <?php echo form_input($email);?>
  </div>

  <div class="form-group">
    <label> <?php echo t('phone');?> </label>
    <?php echo form_input($phone);?>
  </div>

  <div class="form-group">
    <label> <?php echo t('password');?> </label>
    <?php echo form_input($password);?>
  </div>

  <div class="form-group">
    <label> <?php echo t('password_confirm');?> </label>
    <?php echo form_input($password_confirm);?>
  </div>


  <div class="form-group"><?php echo form_submit('submit', t('submit'), 'class="btn btn-success"');?></div>

<?php echo form_close();?>
