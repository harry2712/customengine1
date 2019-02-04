<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:39:09
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55815d75eb48_77264644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1c3b9de0f557f624f6cd5a03f42f40458dc795' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.emojis.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55815d75eb48_77264644 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/emojis/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Emoji");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-smile pr5 panel-icon"></i>
        <strong><?php echo __("Emojis");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo __("Edit Emoji");?>
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
                            <th><?php echo __("Preview");?>
</th>
                            <th><?php echo __("Pattern");?>
</th>
                            <th><?php echo __("Class");?>
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
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['emoji_id'];?>

                                </td>
                                <td>
                                    <i class="twa twa-2x twa-<?php echo $_smarty_tpl->tpl_vars['row']->value['class'];?>
"></i>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['pattern'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['class'];?>

                                </td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="emoji" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['emoji_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/emojis/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['emoji_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fa fa-info-circle fa-2x"></i>
                </div>
                <div class="text pt5">
                    <?php echo __("Sngine uses Twemoji Awesome and you can check");?>
 <a target="_blank" href="https://www.webpagefx.com/tools/emoji-cheat-sheet/"><?php echo __("Emoji Cheat Sheet");?>
</a>  <?php echo __("for the Emojis, You must replace underscores with hyphens, For example: :hatching_chick: for pattern and hatching-chickas for class");?>
.
                </div>
            </div>
            <form class="js_ajax-forms form-horizontal" data-url="admin/emojis.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Pattern");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="pattern">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Class");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="class">
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fa fa-info-circle fa-2x"></i>
                </div>
                <div class="text pt5">
                    <?php echo __("Sngine uses Twemoji Awesome and you can check");?>
 <a target="_blank" href="https://www.webpagefx.com/tools/emoji-cheat-sheet/"><?php echo __("Emoji Cheat Sheet");?>
</a>  <?php echo __("for the Emojis, You must replace underscores with hyphens, For example: :hatching_chick: for pattern and hatching-chickas for class");?>
.
                </div>
            </div>
            <form class="js_ajax-forms form-horizontal" data-url="admin/emojis.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['emoji_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Pattern");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="pattern" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pattern'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Class");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
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
