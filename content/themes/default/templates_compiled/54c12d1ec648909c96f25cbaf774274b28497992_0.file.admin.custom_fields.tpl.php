<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:38:07
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.custom_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55811f035d42_07832473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c12d1ec648909c96f25cbaf774274b28497992' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.custom_fields.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55811f035d42_07832473 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/custom_fields/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Field");?>

                </a>
            </div>
        <?php } else { ?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/custom_fields" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> <?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-bars pr5 panel-icon"></i>
        <strong><?php echo __("Custom Fields");?>
</strong>
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
                            <th><?php echo __("Label");?>
</th>
                            <th><?php echo __("For");?>
</th>
                            <th><?php echo __("Type");?>
</th>
                            <th><?php echo __("Place");?>
</th>
                            <th><?php echo __("Order");?>
</th>
                            <th><?php echo __("Mandatory");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['label'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "user") {?><i class="fa fa-user fa-fw mr5"></i><?php echo __("User");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "page") {?><i class="fa fa-flag fa-fw mr5"></i><?php echo __("Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "group") {?><i class="fa fa-users fa-fw mr5"></i><?php echo __("Group");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "event") {?><i class="fa fa-calendar fa-fw mr5"></i><?php echo __("Event");
}?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "textbox") {
echo __("Textbox");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "textarea") {
echo __("Textarea");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "selectbox") {
echo __("Select Box");
}?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "basic") {
echo __("Basic Info");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "work") {
echo __("Work Info");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "location") {
echo __("Location Info");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "education") {
echo __("Education Info");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "other") {
echo __("Other Info");
}?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_order'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['mandatory']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="custom_field" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/custom_fields/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/custom_fields.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['field_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Field For");?>

                    </label>
                    <div class="col-sm-9">
                        <select id="js_field-for" class="form-control" name="field_for">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "user") {?>selected<?php }?> value="user"><?php echo __("User Profile");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "page") {?>selected<?php }?> value="page"><?php echo __("Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "group") {?>selected<?php }?> value="group"><?php echo __("Group");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "event") {?>selected<?php }?> value="event"><?php echo __("Event");?>
</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("Where you want to use this field for user profile, page, group or event");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Label");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="label" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Type");?>

                    </label>
                    <div class="col-sm-9">
                        <select id="js_field-type" class="form-control" name="type">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "textbox") {?>selected<?php }?> value="textbox"><?php echo __("Textbox");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "textarea") {?>selected<?php }?> value="textarea"><?php echo __("Textarea");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "selectbox") {?>selected<?php }?> value="selectbox"><?php echo __("Select Box");?>
</option>
                        </select>
                    </div>
                </div>
                <div id="js_field-select-options" class="form-group <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] != 'selectbox') {?>x-hidden<?php }?>">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Select Options");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control" name="select_options"><?php echo $_smarty_tpl->tpl_vars['data']->value['select_options'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("The description will show under the field");?>

                        </span>
                    </div>
                </div>
                <div id="js_field-place" class="form-group <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] != 'user') {?>x-hidden<?php }?>">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "basic") {?>selected<?php }?> value="basic"><?php echo __("Basic Info");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "work") {?>selected<?php }?> value="work"><?php echo __("Work Info");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "location") {?>selected<?php }?> value="location"><?php echo __("Location Info");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "education") {?>selected<?php }?> value="education"><?php echo __("Education Info");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "other") {?>selected<?php }?> value="other"><?php echo __("Other Info");?>
</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("Field place in settings page");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Value Length");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="length" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['length'];?>
">
                        <span class="help-block">
                            <?php echo __("Default value is 32, and max value is 1000");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="field_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['field_order'];?>
">
                        <span class="help-block">
                            <?php echo __("The order of this field, custom fields will be displayed in ascending order");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Mandatory");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="mandatory">
                            <input type="checkbox" name="mandatory" id="mandatory" <?php if ($_smarty_tpl->tpl_vars['data']->value['mandatory']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("User must fill the field");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Show in Registration");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="in_registration">
                            <input type="checkbox" name="in_registration" id="in_registration" <?php if ($_smarty_tpl->tpl_vars['data']->value['in_registration']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show the field in the user registration, create page, create group or create event");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Show in Profile Page");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="in_profile">
                            <input type="checkbox" name="in_profile" id="in_profile" <?php if ($_smarty_tpl->tpl_vars['data']->value['in_profile']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show the field in the user's profile page, fan page, group or event");?>

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
            <form class="js_ajax-forms form-horizontal" data-url="admin/custom_fields.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Field For");?>

                    </label>
                    <div class="col-sm-9">
                        <select id="js_field-for" class="form-control" name="field_for">
                            <option value="user"><?php echo __("User Profile");?>
</option>
                            <option value="page"><?php echo __("Page");?>
</option>
                            <option value="group"><?php echo __("Group");?>
</option>
                            <option value="event"><?php echo __("Event");?>
</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("Where you want to use this field for user profile, page, group or event");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Label");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="label">
                        <span class="help-block">
                            <?php echo __("The label of your custom field, also will be used as a placeholder");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Type");?>

                    </label>
                    <div class="col-sm-9">
                        <select id="js_field-type" class="form-control" name="type">
                            <option value="textbox"><?php echo __("Textbox");?>
</option>
                            <option value="textarea"><?php echo __("Textarea");?>
</option>
                            <option value="selectbox"><?php echo __("Select Box");?>
</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("The type of your custom field");?>

                        </span>
                    </div>
                </div>
                <div id="js_field-select-options" class="form-group x-hidden">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Select Options");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control" name="select_options"></textarea>
                        <span class="help-block">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description"></textarea>
                        <span class="help-block">
                            <?php echo __("The description will show under the field");?>

                        </span>
                    </div>
                </div>
                <div id="js_field-place" class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option value="basic"><?php echo __("Basic Info");?>
</option>
                            <option value="work"><?php echo __("Work Info");?>
</option>
                            <option value="location"><?php echo __("Location Info");?>
</option>
                            <option value="education"><?php echo __("Education Info");?>
</option>
                            <option value="other"><?php echo __("Other Info");?>
</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("Field place in settings page");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Value Length");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="length" value="32">
                        <span class="help-block">
                            <?php echo __("Default value is 32, and max value is 1000");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="field_order" value="1">
                        <span class="help-block">
                            <?php echo __("The order of this field, custom fields will be displayed in ascending order");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Mandatory");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="mandatory">
                            <input type="checkbox" name="mandatory" id="mandatory">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("User must fill the field");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Show in Registration");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="in_registration">
                            <input type="checkbox" name="in_registration" id="in_registration">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show the field in the user registration, create page, create group or create event");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Show in Profile Page");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="in_profile">
                            <input type="checkbox" name="in_profile" id="in_profile">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Show the field in the user's profile page, fan page, group or event");?>

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
