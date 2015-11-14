<div class='row'>
  <div id="infoMessage"><?php echo $message;?></div>
  <div style="width:50%; margin: 0 auto;">
    <?php echo form_open("auth/login");?>

    <div class="form-group">
      <label for="identity"><?php echo t('identity');?></label>
      <?php echo form_input($identity);?>
    </div>

    <div class="form-group">
      <label for="password"><?php echo t('password');?></label>
      <?php echo form_input($password);?>
    </div>

    <div class="form-group">
      <label for="remember"><?php echo t('remember');?></label>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </div>


    <div class="form-group"><?php echo form_submit('submit', t('submit'), 'class="btn btn-success"');?></div>

    <?php echo form_close();?>

    <div><a href="forgot_password"><?php echo t('forgot_password');?></a></div>
  </div>
</div>
