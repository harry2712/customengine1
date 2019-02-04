<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:37:21
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.banned_ips.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5580f1179bc2_54363845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38af65a992fd48322d2e1d2329e0c41f7097b40d' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.banned_ips.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5580f1179bc2_54363845 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New IP");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-user-times pr5 panel-icon"></i>
        <strong><?php echo __("Banned IPs");?>
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
                            <th><?php echo __("IP Address");?>
</th>
                            <th><?php echo __("Time");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ip_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="ip" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['ip_id'];?>
">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/banned_ips.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("IP Address");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="ip">
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
