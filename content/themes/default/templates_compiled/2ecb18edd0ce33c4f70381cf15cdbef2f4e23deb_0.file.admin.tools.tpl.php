<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:37:51
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55810f533bc6_44879085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ecb18edd0ce33c4f70381cf15cdbef2f4e23deb' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.tools.tpl',
      1 => 1546196216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55810f533bc6_44879085 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-toolbox pr5 panel-icon"></i>
        <strong><?php echo __("Tools");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "faker") {?> &rsaquo; <strong><?php echo __("Fake Users Generator");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "faker") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/tools.php?do=faker">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Number of Users");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="users_num" value="10">
                        <span class="help-block">
                             <?php echo __("How many users you want to generate (Maximum is 1000 per request)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Password");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="default_password">
                        <span class="help-block">
                             <?php echo __("This password will be used for all generated accounts (Default is 123456789)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Random Pictures");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="random_Avatar">
                            <input type="checkbox" name="random_Avatar" id="random_Avatar">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                             <?php echo __("Profile pictures will be generated randomly and may be dublicated");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Names Language");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="language">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                <?php $_smarty_tpl->_assignInScope('parts', explode('_',$_smarty_tpl->tpl_vars['language']->value['code']));?>
                                <option <?php if ($_smarty_tpl->tpl_vars['system']->value['default_language']['language_id'] == $_smarty_tpl->tpl_vars['language']->value['language_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['parts']->value[0];?>
_<?php echo strtoupper($_smarty_tpl->tpl_vars['parts']->value[1]);?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <span class="help-block">
                             <?php echo __("Select the language of generated account names");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-bolt"></i> <?php echo __("Generate");?>
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
        </div>
    <?php }?>
</div><?php }
}
