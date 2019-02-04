<?php
/* Smarty version 3.1.33, created on 2019-01-25 09:02:31
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/_header.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4ad0a7e33204_01542878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d1ac9e32006991967b2123eae8c4a2455bd36c' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/_header.notifications.tpl',
      1 => 1534341496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_5c4ad0a7e33204_01542878 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-notifications">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell fa-lg"></i>
        <span class="label <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'] == 0) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'];?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-widget with-arrow js_dropdown-keepopen">
        <div class="dropdown-widget-header">
            <?php echo __("Notifications");?>


            <label class="switch sm pull-right flip" for="notifications_sound">
                <input type="checkbox" class="js_notifications-sound-toggle" name="notifications_sound" id="notifications_sound" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications_sound']) {?>checked<?php }?>>
                <span class="slider round"></span>
            </label>
            <div class="pull-right flip mr5 fw-normal">
                <?php echo __("Alert Sound");?>

            </div>
        </div>
        <div class="dropdown-widget-body">
            <div class="js_scroller" style="height: 280px;">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['notifications'], 'notification');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php } else { ?>
                    <p class="text-center text-muted mt10">
                        <?php echo __("No notifications");?>

                    </p>
                <?php }?>
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/notifications"><?php echo __("See All");?>
</a>
    </div>
</li><?php }
}
