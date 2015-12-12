<h1><?php echo t('edit_user');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>
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

  <?php if ($this->ion_auth->is_admin()): ?>

    <h3><?php echo t('edit_user_groups');?></h3>
    <?php foreach ($groups as $group):?>
        <label class="checkbox">
        <?php
            $gID=$group['id'];
            $checked = null;
            $item = null;
            foreach($currentGroups as $grp) {
                if ($gID == $grp->id) {
                    $checked= ' checked="checked"';
                break;
                }
            }
        ?>
        <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
        <?php echo $group['name'];?>
        </label>
    <?php endforeach?>

  <?php endif ?>

  <?php echo form_hidden('id', $user->id);?>
  <?php echo form_hidden($csrf); ?>

  <div class="form-group"><?php echo form_submit('submit', t('submit'), 'class="btn btn-success"');?></div>

<?php echo form_close();?>
