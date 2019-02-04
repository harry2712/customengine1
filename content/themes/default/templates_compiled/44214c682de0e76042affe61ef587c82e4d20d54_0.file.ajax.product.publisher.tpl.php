<?php
/* Smarty version 3.1.33, created on 2019-01-31 17:14:39
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/ajax.product.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c532cff621a11_97431467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44214c682de0e76042affe61ef587c82e4d20d54' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/ajax.product.publisher.tpl',
      1 => 1545372120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c532cff621a11_97431467 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title">
        <i class="fa fa-shopping-cart fa-fw"></i> <?php echo __("Sell New Product");?>

    </h5>
</div>
<form class="publisher-mini">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label><?php echo __("Product Name");?>
</label>
                    <input name="name" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><?php echo __("Price");?>
</label>
                    <input name="price" type="text" class="form-control">
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
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
                        <option value="new"><?php echo __("New");?>
</option>
                        <option value="old"><?php echo __("Used");?>
</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label><?php echo __("Location");?>
</label>
            <input name="location" type="text" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>
" class="form-control js_geocomplete">
        </div>
        <div class="form-group">
            <label><?php echo __("Description");?>
</label>
            <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
        </div>
        <div class="form-group">
            <label><?php echo __("Photos");?>
</label>
            <div class="attachments clearfix" data-type="photos">
                <ul>
                    <li class="add">
                        <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                    </li>
                </ul>
            </div>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary js_publisher-product"><?php echo __("Publish");?>
</button>
    </div>
</form><?php }
}
