<?php
/* Smarty version 3.1.33, created on 2019-01-31 17:31:48
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c533104b0fbd1_28921986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56997ce8b0b25e87852cc6f5e39cc2e03e003b80' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.notifications.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c533104b0fbd1_28921986 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-bell pr5 panel-icon"></i>
        <strong><?php echo __("Mass Notifications");?>
</strong>
    </div>
    <div class="panel-body">

        <!-- Mass Notifications -->
        <form class="js_ajax-forms form-horizontal" data-url="admin/notifications.php">

            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fa fa-bell fa-2x"></i>
                </div>
                <div class="text">
                    <strong><?php echo __("Mass Notifications");?>
</strong><br>
                    <?php echo __("Enable you to send notifications to all site users");?>
.<br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("URL");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="url">
                    <span class="help-block">
                        <?php echo __("Notification link used when user clicks on the notification");?>

                    </span>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Message");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="3" name="message"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary"><?php echo __("Send");?>
</button>
                </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
            <!-- error -->

        </form>
        <!-- Mass Notifications -->
        
    </div>
</div><?php }
}
