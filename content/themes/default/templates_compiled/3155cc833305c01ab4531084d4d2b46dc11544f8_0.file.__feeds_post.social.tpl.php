<?php
/* Smarty version 3.1.33, created on 2019-02-02 05:16:51
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/__feeds_post.social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5527c37f8a83_26738363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3155cc833305c01ab4531084d4d2b46dc11544f8' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/__feeds_post.social.tpl',
      1 => 1545977990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5527c37f8a83_26738363 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>
    <div class="post-sharing x-hidden">
        <span class="btn btn-sm btn-rounded btn-default js_share" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
            <i class="fa fa-share-square fa-fw"></i>
        </span>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-facebook" target="_blank">
            <i class="fab fa-facebook-f fa-fw"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-rounded btn-twitter" target="_blank">
            <i class="fab fa-twitter fa-fw"></i>
        </a>
        <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-google" target="_blank">
            <i class="fab fa-google fa-fw"></i>
        </a>
        <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-vk" target="_blank">
            <i class="fab fa-vk fa-fw"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-linkedin" target="_blank">
            <i class="fab fa-linkedin fa-fw"></i>
        </a>
        <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-whatsapp" target="_blank">
            <i class="fab fa-whatsapp fa-fw"></i>
        </a>
        <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-reddit" target="_blank">
            <i class="fab fa-reddit fa-fw"></i>
        </a>
        <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-pinterest" target="_blank">
            <i class="fab fa-pinterest fa-fw"></i>
        </a>
    </div>
<?php }
}
}
