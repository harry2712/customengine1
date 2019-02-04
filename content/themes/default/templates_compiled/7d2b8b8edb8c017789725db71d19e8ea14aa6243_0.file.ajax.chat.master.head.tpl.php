<?php
/* Smarty version 3.1.33, created on 2019-01-25 08:38:30
  from '/home/adminuser/public_html/eean/judefly.com/Script/content/themes/default/templates/ajax.chat.master.head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4acb067a5cc1_98070153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2b8b8edb8c017789725db71d19e8ea14aa6243' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/Script/content/themes/default/templates/ajax.chat.master.head.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4acb067a5cc1_98070153 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
