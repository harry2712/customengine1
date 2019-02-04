<?php
/* Smarty version 3.1.33, created on 2019-02-02 07:29:40
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/ajax.product.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5546e435c6e1_27135630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '717ae91259941a229bc787196716fe3370085b97' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/ajax.product.editor.tpl',
      1 => 1545372120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5546e435c6e1_27135630 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title">
        <i class="fa fa-shopping-cart fa-fw"></i> <?php echo __("Edit Product");?>

    </h5>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label><?php echo __("Product Name");?>
</label>
                    <input type="hidden" name="handle" value="product">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                    <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><?php echo __("Price");?>
</label>
                    <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>
">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label><?php echo __("Category");?>
</label>
                    <select name="category" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['market_categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><?php echo __("Status");?>
</label>
                    <select name="status" class="form-control">
                        <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "new") {?>selected<?php }?> value="new"><?php echo __("New");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "old") {?>selected<?php }?> value="old"><?php echo __("Used");?>
</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label><?php echo __("Location");?>
</label>
            <input name="location" type="text" class="form-control js_geocomplete" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>
">
        </div>
        <div class="form-group">
            <label><?php echo __("Description");?>
</label>
            <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    </div>
</form><?php }
}
