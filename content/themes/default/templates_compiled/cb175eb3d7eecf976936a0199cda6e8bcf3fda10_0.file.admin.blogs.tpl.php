<?php
/* Smarty version 3.1.33, created on 2019-02-02 14:00:18
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.blogs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55a2729dd216_75904065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb175eb3d7eecf976936a0199cda6e8bcf3fda10' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.blogs.tpl',
      1 => 1549116015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55a2729dd216_75904065 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">

    <div class="panel-heading with-icon">

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>

            <div class="pull-right flip">

                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/blogs/add_category" class="btn btn-primary">

                    <i class="fa fa-plus"></i> <?php echo __("Add New Category");?>


                </a>

            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?>

            <div class="pull-right flip">

                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/blogs/categories" class="btn btn-default">

                    <i class="fa fa-arrow-circle-left"></i> <?php echo __("Go Back");?>


                </a>

            </div>

        <?php }?>

        <i class="fab fa-blogger-b pr5 panel-icon"></i>

        <strong><?php echo __("Blogs");?>
</strong>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
</strong><?php }?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>

        <div class="panel-body">

            <div class="table-responsive">

                <table class="table table-striped table-bordered table-hover js_dataTable">

                    <thead>

                        <tr>

                            <th><?php echo __("ID");?>
</th>

                            <th><?php echo __("Title");?>
</th>

                            <th><?php echo __("Actions");?>
</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

                        <tr>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
</td>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</td>

                            <td>

                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="blogs_category" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">

                                    <i class="fas fa-trash-alt"></i>

                                </button>

                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/blogs/edit_category/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
" class="btn btn-xs btn-primary">

                                    <i class="fas fa-pencil-alt"></i>

                                </a>

                            </td>

                        </tr>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>

                </table>

            </div>

        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?>

        <div class="panel-body">

            <form class="js_ajax-forms form-horizontal" data-url="admin/blogs.php?do=add_category">

                <div class="form-group">

                    <label class="col-sm-3 control-label text-left">

                        <?php echo __("Name");?>


                    </label>

                    <div class="col-sm-9">

                        <input class="form-control" name="category_name">

                    </div>

                </div>



                <div class="form-group">

                    <div class="col-sm-9 col-sm-offset-3">

                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?>

        <div class="panel-body">

            <form class="js_ajax-forms form-horizontal" data-url="admin/blogs.php?do=edit_category&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
">

                <div class="form-group">

                    <label class="col-sm-3 control-label text-left">

                        <?php echo __("Name");?>


                    </label>

                    <div class="col-sm-9">

                        <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
">

                    </div>

                </div>



                <div class="form-group">

                    <div class="col-sm-9 col-sm-offset-3">

                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
