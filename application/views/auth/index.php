<h1><?php echo t('admin_page');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table table-condensed table-bordered table-striped table-hover" width="100%">
  <tr>
    <th><?php echo t('first_name');?></th>
    <th><?php echo t('last_name');?></th>
    <th><?php echo t('email');?></th>
    <th><?php echo t('groups');?></th>
    <th><?php echo t('status');?></th>
    <th><?php echo t('action');?></th>
  </tr>
  <?php foreach ($users as $user):?>
  <tr>
    <td><?php echo $user->first_name;?></td>
    <td><?php echo $user->last_name;?></td>
    <td><?php echo $user->email;?></td>
    <td>
      <?php foreach ($user->groups as $group):?>
      <?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
      <?php endforeach?>
    </td>
    <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, t('deactivate')) : anchor("auth/activate/". $user->id, t('activate'));?></td>
    <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
  </tr>
  <?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', t('create_user'))?> | <?php echo anchor('auth/create_group', t('create_group'))?></p>
