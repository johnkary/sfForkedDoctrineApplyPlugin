<?php //TODO! fix this later ?>
<?php use_stylesheets_for_form( $form ) ?>
<?php use_helper("I18N") ?>
<div class="sf_apply sf_apply_settings">
<h2><?php echo __("Edit Email", array(), 'sfForkedApply') ?></h2>
<form method="POST" action="<?php echo url_for("sfApply/editEmail") ?>" name="sf_apply_email_edit_form" id="sf_apply_email_edit_form">
<ul>
<?php echo $form ?>
<li>
<input type="submit" value="<?php echo __("Save", array(), 'sfForkedApply') ?>" /> <?php echo(__("or", array(), 'sfForkedApply')) ?>
 <?php echo link_to(__('Cancel', array(), 'sfForkedApply'), sfConfig::get('app_sfApplyPlugin_after', '@settings')) ?>
</li>
</ul>
</form>
</div>
