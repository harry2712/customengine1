<?php
/* Smarty version 3.1.33, created on 2019-01-25 09:02:31
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/_header.friend_requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4ad0a7cdfca7_99072614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '326e98b262db6fa84939f2916df5fe687724599f' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/_header.friend_requests.tpl',
      1 => 1534341496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 2,
  ),
),false)) {
function content_5c4ad0a7cdfca7_99072614 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-requests">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-users fa-lg"></i>
        <span class="label <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'] == 0) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'];?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-widget with-arrow js_dropdown-keepopen">
        <div class="dropdown-widget-header">
            <?php echo __("Friend Requests");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="js_scroller">
                <!-- Friend Requests -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_count'] > 0) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0, true);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php } else { ?>
                    <p class="text-center text-muted mt10">
                        <?php echo __("No new requests");?>

                    </p>
                <?php }?>
                <!-- Friend Requests -->
                
                <!-- People You May Know -->
                <div class="title">
                    <?php echo __("People You May Know");?>

                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['new_people'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add"), 0, true);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php } else { ?>
                    <p class="text-center text-muted mt10">
                        <?php echo __("No people available");?>

                    </p>
                <?php }?>
                <!-- People You May Know -->
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests"><?php echo __("See All");?>
</a>
    </div>
</li><?php }
}
