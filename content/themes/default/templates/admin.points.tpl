<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-piggy-bank pr5 panel-icon"></i>
        <strong>{__("Points System")}</strong>
        {if $sub_view == "payments"} &rsaquo; <strong>{__("Payment Requests")}</strong>{/if}
    </div>
    {if $sub_view == ""}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=points">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Points Enabled")}
                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="points_enabled">
                            <input type="checkbox" name="points_enabled" id="points_enabled" {if $system['points_enabled']}checked{/if}>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            {__("Enable or Disable the points system")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Users can withdraw earned money")}
                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="points_money_withdraw_enabled">
                            <input type="checkbox" name="points_money_withdraw_enabled" id="points_money_withdraw_enabled" {if $system['points_money_withdraw_enabled']}checked{/if}>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            {__("If enabled users will be able to withdraw earned money")}<br>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Payment Method")}
                    </label>
                    <div class="col-sm-9">
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="points_payment_method" id="method_paypal" value="paypal" {if $system['points_payment_method'] == "paypal"}checked{/if}>
                            <label for="method_paypal">{__("Paypal")}</label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="points_payment_method" id="method_skrill" value="skrill" {if $system['points_payment_method'] == "skrill"}checked{/if}>
                            <label for="method_skrill">{__("Skrill")}</label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="points_payment_method" id="method_both" value="both" {if $system['points_payment_method'] == "both"}checked{/if}>
                            <label for="method_both">{__("Both")}</label>
                        </div>
                        <span class="help-block">
                            {__("Users can send withdrawal requests via any of these methods")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Minimum Withdrawal Request")} ({$system['system_currency']})
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_min_withdrawal" value="{$system['points_min_withdrawal']}">
                        <span class="help-block">
                            {__("The minimum amount of money so user can send a withdrawal request")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Users can transfer earned money to wallet")}
                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="points_money_transfer_enabled">
                            <input type="checkbox" name="points_money_transfer_enabled" id="points_money_transfer_enabled" {if $system['points_money_transfer_enabled']}checked{/if}>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            {__("If Ads enabled users will be able to transfer earned money to their wallet")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Points")}/{$system['system_currency_symbol']}1.00
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_currency" value="{$system['points_per_currency']}">
                        <span class="help-block">
                            {__("How much points eqaul to")} {$system['system_currency_symbol']}1
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Points/Post")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_post" value="{$system['points_per_post']}">
                        <span class="help-block">
                            {__("How many points user will get for each new post")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Points/Comment")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_comment" value="{$system['points_per_comment']}">
                        <span class="help-block">
                            {__("How many points user will get for each new comment")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Points/Reaction")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="points_per_reaction" value="{$system['points_per_reaction']}">
                        <span class="help-block">
                            {__("How many points user will get for each reaction")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
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
    {elseif $sub_view == "payments"}
        <div class="panel-body">
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fab fa-paypal fa-2x"></i>
                </div>
                <div class="text">
                    <strong>{__("Payment Requests")}</strong><br>
                    {__("You will need to make the payments from your Paypal/Skrill account")}.<br>
                    {__("After making the payment you can mark the payment request as paid")}.
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("User")}</th>
                            <th>{__("Email")}</th>
                            <th>{__("Amount")}</th>
                            <th>{__("Method")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['payment_id']}</td>
                            <td>
                                <a target="_blank" href="{$system['system_url']}/{$row['user_name']}">
                                    <img class="tbl-image" src="{$row['user_picture']}">
                                    {$row['user_firstname']} {$row['user_lastname']}
                                </a>
                            </td>
                            <td>{$row['email']}</td>
                            <td>{$system['system_currency_symbol']}{$row['amount']|number_format:2}</td>
                            <td>
                                <label class="label {if $row['method'] == 'paypal'}label-info{else}label-danger{/if}">
                                    {$row['method']|ucfirst}
                                </label>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Mark as Paid")}' class="btn btn-xs btn-success js_admin-withdraw" data-type="points" data-handle="approve" data-id="{$row['payment_id']}">
                                        <i class="fa fa-check"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Decline")}' class="btn btn-xs btn-danger js_admin-withdraw" data-type="points" data-handle="decline" data-id="{$row['payment_id']}">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {/if}
</div>