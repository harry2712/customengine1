<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:33:53
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.forums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5580212e5099_63550337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4920114c7ba09512035d4f20919d3022e16db2f' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.forums.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_rows.tpl' => 1,
    'file:admin.forums.recursive_options.tpl' => 2,
  ),
),false)) {
function content_5c5580212e5099_63550337 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/forums/add_forum" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Forum");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_forum" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_forum") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/forums" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> <?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-comments pr5 panel-icon"></i>
        <strong><?php echo __("Forums");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "settings") {?> &rsaquo; <strong><?php echo __("Settings");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_forum") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_forum") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['forum_name'];?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "settings") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/forums.php?do=settings">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Forums");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="forums_enabled">
                            <input type="checkbox" name="forums_enabled" id="forums_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                             <?php echo __("Turn the forums On and Off");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Online Users");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="forums_online_enabled">
                            <input type="checkbox" name="forums_online_enabled" id="forums_online_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_online_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show online users");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Statistics");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="forums_statistics_enabled">
                            <input type="checkbox" name="forums_statistics_enabled" id="forums_statistics_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_statistics_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show forums statistics");?>

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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover js_treegrid">
                    <thead>
                        <tr>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Description");?>
</th>
                            <th><?php echo __("Threads");?>
</th>
                            <th><?php echo __("Order");?>
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
                            <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_forum") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/forums.php?do=add_forum">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="forum_name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="forum_description"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Section");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="forum_section">
                            <option value="0" class="text-success"><?php echo __("Set as a Section");?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forums']->value, 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="forum_order">
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_forum") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/forums.php?do=edit_forum&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['forum_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="forum_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['forum_name'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="forum_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['forum_description'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Section");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="forum_section">
                            <option value="0" class="text-success"><?php echo __("Set as a Section");?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['sections'], 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="forum_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['forum_order'];?>
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
