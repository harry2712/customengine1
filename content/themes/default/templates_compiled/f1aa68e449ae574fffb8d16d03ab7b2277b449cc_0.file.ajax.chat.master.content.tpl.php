<?php
/* Smarty version 3.1.33, created on 2019-01-25 08:38:30
  from '/home/adminuser/public_html/eean/judefly.com/Script/content/themes/default/templates/ajax.chat.master.content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4acb068152b2_87095018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1aa68e449ae574fffb8d16d03ab7b2277b449cc' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/Script/content/themes/default/templates/ajax.chat.master.content.tpl',
      1 => 1536332184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4acb068152b2_87095018 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
        <li class="feeds-item">
            <div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
">
                <img class="data-avatar rounded" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
">
                <div class="data-content">
                    <div>
                        <strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong>
                    </div>
                </div>
            </div>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
