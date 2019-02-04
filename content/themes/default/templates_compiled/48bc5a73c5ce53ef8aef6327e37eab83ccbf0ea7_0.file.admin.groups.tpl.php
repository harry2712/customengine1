<?php
/* Smarty version 3.1.33, created on 2019-02-02 13:55:18
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55a146659256_58260362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48bc5a73c5ce53ef8aef6327e37eab83ccbf0ea7' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.groups.tpl',
      1 => 1549115713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55a146659256_58260362 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">

    <div class="panel-heading with-icon">

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_group") {?>

            <div class="pull-right flip">

                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
" class="btn btn-info">

                    <i class="fa fa-tv fa-fw mr5"></i><?php echo __("View Group");?>


                </a>

            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>

            <div class="pull-right flip">

                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups/add_category" class="btn btn-primary">

                    <i class="fa fa-plus"></i> <?php echo __("Add New Category");?>


                </a>

            </div>

        <?php }?>

        <i class="fa fa-users pr5 panel-icon"></i>

        <strong><?php echo __("Groups");?>
</strong>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_group") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['group_title'];?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
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

                            <th><?php echo __("Group");?>
</th>

                            <th><?php echo __("Admin");?>
</th>

                            <th><?php echo __("Privacy");?>
</th>

                            <th><?php echo __("Members");?>
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

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
</a>

                            </td>

                            <td>

                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
">

                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_picture'];?>
">

                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['group_title'];?>


                                </a>

                            </td>

                            <td>

                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">

                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">

                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];?>


                                </a>

                            </td>

                            <td>

                                <?php if ($_smarty_tpl->tpl_vars['row']->value['group_privacy'] == "public") {?>

                                    <i class="fa fa-globe fa-fw fa-lg"></i>

                                    <?php echo __("Public");?>


                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['group_privacy'] == "closed") {?>

                                    <i class="fas fa-unlock-alt fa-fw fa-lg"></i>

                                    <?php echo __("Closed");?>


                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['group_privacy'] == "secret") {?>

                                    <i class="fa fa-lock fa-fw fa-lg"></i>

                                    <?php echo __("Secret");?>


                                <?php }?>

                            </td>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['group_members'];?>
</td>

                            <td>

                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
">

                                    <i class="fas fa-trash-alt"></i>

                                </button>

                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups/edit_group/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_group") {?>

        <div class="panel-body">

            <div class="row">

                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">

                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_picture'];?>
">

                </div>

                <div class="col-xs-12 col-sm-10 mb10">

                    <ul class="list-group">

                        <li class="list-group-item">

                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
</span>

                            <?php echo __("Group ID");?>


                        </li>

                        <li class="list-group-item">

                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_members'];?>
</span>

                            <?php echo __("Members");?>


                        </li>

                        <li class="list-group-item">

                            <span class="badge">

                                <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "public") {?>

                                    <i class="fa fa-globe fa-fw fa-lg"></i>

                                    <?php echo __("Public");?>


                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "closed") {?>

                                    <i class="fas fa-unlock-alt fa-fw fa-lg"></i>

                                    <?php echo __("Closed");?>


                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "secret") {?>

                                    <i class="fa fa-lock fa-fw fa-lg"></i>

                                    <?php echo __("Secret");?>


                                <?php }?>

                            </span>

                            <?php echo __("Privacy");?>


                        </li>

                    </ul>

                </div>

            </div>



            <!-- tabs nav -->

            <ul class="nav nav-tabs mb20">

                <li class="active">

                    <a href="#basic" data-toggle="tab">

                        <i class="fa fa-cog fa-fw mr5"></i><strong class="pr5"><?php echo __("Group Info");?>
</strong>

                    </a>

                </li>

            </ul>

            <!-- tabs nav -->



            <!-- tabs content -->

            <div class="tab-content">

                <!-- basic tab -->

                <div class="tab-pane active" id="basic">

                    <form class="js_ajax-forms form-horizontal" data-url="admin/groups.php?do=edit_group&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
">

                        <div class="form-group">

                            <label class="col-sm-3 control-label text-left">

                                <?php echo __("Admin");?>


                            </label>

                            <div class="col-sm-9 mt5">

                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">

                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">

                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>


                                </a> <a target="_blank" data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" class="btn btn-xs btn-default ml10">

                                    <i class="fas fa-pencil-alt"></i>

                                </a>

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="col-sm-3 control-label text-left">

                                <?php echo __("Name Your Group");?>


                            </label>

                            <div class="col-sm-9">

                                <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_title'];?>
">

                            </div>

                        </div>



                        <div class="form-group">

                            <label class="col-sm-3 control-label text-left">

                                <?php echo __("Web Address");?>


                            </label>

                            <div class="col-sm-9">

                                <div class="input-group">

                                    <span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span>

                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
">

                                </div>

                            </div>

                        </div>



                        <div class="form-group">

                            <label class="col-sm-3 control-label text-left">

                                <?php echo __("Select Privacy");?>


                            </label>

                            <div class="col-sm-9">

                                <select class="form-control selectpicker" name="privacy">

                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "public") {?>selected<?php }?> value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Group");?>
</b><br><?php echo __("Anyone can see the group, its members and their posts");?>
.

                                    </div></div>"><?php echo __("Public Group");?>
</option>

                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "closed") {?>selected<?php }?> value="closed" data-content="<div class='option'><div class='icon'><i class='fas fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Group");?>
</b><br><?php echo __("Only members can see posts");?>
.

                                    </div></div>"><?php echo __("Closed Group");?>
</option>

                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "secret") {?>selected<?php }?> value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Group");?>
</b><br><?php echo __("Only members can find the group and see posts");?>
.

                                    </div></div>"><?php echo __("Secret Group");?>
</option>

                                </select>

                            </div>

                        </div>



                        <div class="form-group">

                            <label class="col-sm-3 control-label text-left">

                                <?php echo __("Category");?>


                            </label>

                            <div class="col-sm-9">

                                <select class="form-control" name="category">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>

                                        <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>

                            </div>

                        </div>



                        <div class="form-group">

                            <label class="col-sm-3 control-label text-left">

                                <?php echo __("About");?>


                            </label>

                            <div class="col-sm-9">

                                <textarea class="form-control" name="description" rows="5"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_description'];?>
</textarea>

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

            </div>

            <!-- tabs content -->

        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>

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
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="group_category" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">

                                    <i class="fas fa-trash-alt"></i>

                                </button>

                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups/edit_category/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
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

            <form class="js_ajax-forms form-horizontal" data-url="admin/groups.php?do=add_category">

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

            <form class="js_ajax-forms form-horizontal" data-url="admin/groups.php?do=edit_category&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
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
