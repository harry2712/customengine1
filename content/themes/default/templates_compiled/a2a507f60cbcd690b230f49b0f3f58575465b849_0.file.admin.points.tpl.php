<?php
/* Smarty version 3.1.33, created on 2019-01-29 14:02:37
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.points.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c505cfd8fd157_70143904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a507f60cbcd690b230f49b0f3f58575465b849' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.points.tpl',
      1 => 1545977990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c505cfd8fd157_70143904 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-piggy-bank pr5 panel-icon"></i>
        <strong><?php echo __("Points System");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <strong><?php echo __("Payment Requests");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=points">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Points Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="points_enabled">
                            <input type="checkbox" name="points_enabled" id="points_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable or Disable the points system");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Users can withdraw earned money");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="points_money_withdraw_enabled">
                            <input type="checkbox" name="points_money_withdraw_enabled" id="points_money_withdraw_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("If enabled users will be able to withdraw earned money");?>
<br>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Payment Method");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="points_payment_method" id="method_paypal" value="paypal" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "paypal") {?>checked<?php }?>>
                            <label for="method_paypal"><?php echo __("Paypal");?>
</label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="points_payment_method" id="method_skrill" value="skrill" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "skrill") {?>checked<?php }?>>
                            <label for="method_skrill"><?php echo __("Skrill");?>
</label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="points_payment_method" id="method_both" value="both" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "both") {?>checked<?php }?>>
                            <label for="method_both"><?php echo __("Both");?>
</label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Users can send withdrawal requests via any of these methods");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_min_withdrawal'];?>
">
                        <span class="help-block">
                            <?php echo __("The minimum amount of money so user can send a withdrawal request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Users can transfer earned money to wallet");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="points_money_transfer_enabled">
                            <input type="checkbox" name="points_money_transfer_enabled" id="points_money_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("If Ads enabled users will be able to transfer earned money to their wallet");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Points");?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
1.00
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_currency" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_currency'];?>
">
                        <span class="help-block">
                            <?php echo __("How much points eqaul to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
1
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Points/Post");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_post" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_post'];?>
">
                        <span class="help-block">
                            <?php echo __("How many points user will get for each new post");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Points/Comment");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_comment" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_comment'];?>
">
                        <span class="help-block">
                            <?php echo __("How many points user will get for each new comment");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Points/Reaction");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_reaction" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_reaction'];?>
">
                        <span class="help-block">
                            <?php echo __("How many points user will get for each reaction");?>

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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>
        <div class="panel-body">
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fab fa-paypal fa-2x"></i>
                </div>
                <div class="text">
                    <strong><?php echo __("Payment Requests");?>
</strong><br>
                    <?php echo __("You will need to make the payments from your Paypal/Skrill account");?>
.<br>
                    <?php echo __("After making the payment you can mark the payment request as paid");?>
.
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("User");?>
</th>
                            <th><?php echo __("Email");?>
</th>
                            <th><?php echo __("Amount");?>
</th>
                            <th><?php echo __("Method");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['row']->value['amount'],2);?>
</td>
                            <td>
                                <label class="label <?php if ($_smarty_tpl->tpl_vars['row']->value['method'] == 'paypal') {?>label-info<?php } else { ?>label-danger<?php }?>">
                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['method']);?>

                                </label>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Paid");?>
' class="btn btn-xs btn-success js_admin-withdraw" data-type="points" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                        <i class="fa fa-check"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-xs btn-danger js_admin-withdraw" data-type="points" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                    <i class="fa fa-times"></i>
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
    <?php }?>
</div><?php }
}
