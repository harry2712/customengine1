<?php
/* Smarty version 3.1.33, created on 2019-01-31 04:15:20
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/ajax.chat.conversation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c527658470796_57318705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed6fbb8d30ff0956e32fe2c3426a597f49e2b21a' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/ajax.chat.conversation.tpl',
      1 => 1546373530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.conversation.messages.tpl' => 1,
  ),
),false)) {
function content_5c527658470796_57318705 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default panel-messages" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['color'];?>
" >
    <div class="panel-heading clearfix">
        <div class="pull-right flip">
            <a class="btn btn-primary js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                <i class="fa fa-comment"></i>
                <?php echo __("New Message");?>

            </a>
            <button type="button" class="btn btn-danger js_delete-conversation">
                <i class="fa fa-trash-alt"></i>
                <?php echo __("Delete");?>

            </button>
        </div>
        <div class="mt5">
            <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
                <?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_html'];?>

            <?php } else { ?>
                <span title="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span>
            <?php }?>
        </div>
    </div>
    <div class="panel-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="367px" data-slimScroll-start="bottom">
            <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.conversation.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="chat-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>
                </li>
            </ul>
        </div>
        <div class="x-form chat-form">
            <div class="chat-form-message">
                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea>
            </div>
            <ul class="x-form-tools clearfix">
                <li class="x-form-tools-attach">
                    <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                </li>
                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="far fa-smile-wink fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me">
                    <i class="fa fa-circle fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-post js_post-message">
                    <i class="far fa-paper-plane fa-lg fa-fw"></i>
                </li>
            </ul>
        </div>
    </div>
</div><?php }
}
