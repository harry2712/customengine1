<?php
/* Smarty version 3.1.33, created on 2019-02-03 22:11:23
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c57670b9ceb41_93980671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eef71608de14373a63133cc3cfb9c65a469b6ca' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/reset.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c57670b9ceb41_93980671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="page-title">
    <?php echo __("Reset Password");?>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="js_ajax-forms" data-url="core/forget_password.php">
                <div class="form-group">
                    <label for="email"><?php echo __("Email");?>
</label>
                    <input name="email" id="email" type="text" class="form-control" required autofocus>
                    <p class="text-muted"><?php echo __("Enter the email address you signed up with and we'll email you a reset link");?>
.</p>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                    <div class="form-group">
                        <!-- reCAPTCHA -->
                        <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                        <!-- reCAPTCHA -->
                    </div>
                <?php }?>
                <button type="submit" class="btn btn-lg btn-info btn-block"><?php echo __("Email me a link");?>
</button>

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
