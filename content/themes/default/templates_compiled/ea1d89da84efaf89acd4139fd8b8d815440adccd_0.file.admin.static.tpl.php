<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:38:23
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.static.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55812f4e2996_93376241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea1d89da84efaf89acd4139fd8b8d815440adccd' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.static.tpl',
      1 => 1545977990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55812f4e2996_93376241 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/static/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Page");?>

                </a>
            </div>
        <?php } else { ?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/static" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> <?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-file pr5 panel-icon"></i>
        <strong><?php echo __("Static Pages");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Page URL");?>
</th>
                            <th><?php echo __("Page Title");?>
</th>
                            <th><?php echo __("In Footer Menu");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
</td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['page_in_footer']) {?>
                                        <span class="label label-success"><?php echo __("Yes");?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-danger"><?php echo __("No");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="static_page" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/static/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/static.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['page_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Web Address");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/</span>
                            <input type="text" class="form-control" name="page_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_url'];?>
">
                        </div>
                        <span class="help-block">
                            <?php echo __("Valid web address must be a-z0-9_.");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Page Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="page_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Page Content");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control js_wysiwyg" name="page_text"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_text'];?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Add to Footer Menu");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="page_in_footer">
                            <input type="checkbox" name="page_in_footer" id="page_in_footer" <?php if ($_smarty_tpl->tpl_vars['data']->value['page_in_footer']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show the page in the footer links menu");?>

                        </span>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/static.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Web Address");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/</span>
                            <input type="text" class="form-control" name="page_url">
                        </div>
                        <span class="help-block">
                            <?php echo __("Valid web address must be a-z0-9_.");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Page Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="page_title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Page Content");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control js_wysiwyg" name="page_text"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Add to Footer Menu");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="page_in_footer">
                            <input type="checkbox" name="page_in_footer" id="page_in_footer">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show the page in the footer links menu");?>

                        </span>
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
