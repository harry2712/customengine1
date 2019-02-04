<?php
/* Smarty version 3.1.33, created on 2019-02-04 04:36:42
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c57c15a605880_12255431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b012b5a29451d8e4e8d7a5ab5b0e8a3e47938489' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/settings.tpl',
      1 => 1549254999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__custom_fields.tpl' => 5,
    'file:__feeds_user.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c57c15a605880_12255431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/adminuser/public_html/eean/judefly.com/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- page content -->

<div class="container mt20 offcanvas">

    <div class="row">



        <!-- left panel -->

        <div class="col-sm-3 offcanvas-sidebar">

            <div class="panel panel-default">

                <div class="panel-body with-nav">

                    <ul class="side-nav">

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings">

                                <i class="fa fa-cog fa-fw fa-lg mr5"></i><?php echo __("Account Settings");?>


                            </a>

                        </li>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>class="active"<?php }?>>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">

                                <i class="fa fa-user fa-fw fa-lg mr5" style="color: #2b53a4;"></i><?php echo __("Edit Profile");?>


                            </a>

                        </li>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>class="active"<?php }?>>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy">

                                <i class="fa fa-lock fa-fw fa-lg mr5" style="color: #f9bd54;"></i><?php echo __("Privacy Settings");?>


                            </a>

                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_enabled']) {?>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "two-factor") {?>class="active"<?php }?>>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/two-factor">

                                <i class="fa fa-shield-alt fa-fw fa-lg mr5" style="color: #8bc34a"></i><?php echo __("Two-Factor Authentication");?>


                            </a>

                        </li>

                        <?php }?>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "sessions") {?>class="active"<?php }?>>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/sessions">

                                <i class="fas fa-fingerprint fa-fw fa-lg mr5" style="color: #8bc34a;"></i><?php echo __("Manage Sessions");?>


                            </a>

                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['email_notifications']) {?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes'] || $_smarty_tpl->tpl_vars['system']->value['email_post_comments'] || $_smarty_tpl->tpl_vars['system']->value['email_post_shares'] || $_smarty_tpl->tpl_vars['system']->value['email_wall_posts'] || $_smarty_tpl->tpl_vars['system']->value['email_mentions'] || $_smarty_tpl->tpl_vars['system']->value['email_profile_visits'] || $_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>

                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "notifications") {?>class="active"<?php }?>>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/notifications">

                                        <i class="fa fa-envelope-open fa-fw fa-lg mr5" style="color: #673ab7;"></i><?php echo __("Email Notifications");?>


                                    </a>

                                </li>

                            <?php }?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>

                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>class="active"<?php }?>>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/linked">

                                        <i class="fa fa-share-alt fa-fw fa-lg mr5" style="color: #009da0;"></i><?php echo __("Linked Accounts");?>


                                    </a>

                                </li>

                            <?php }?>

                        <?php }?>

                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>class="active"<?php }?>>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking">

                                <i class="fa fa-minus-circle fa-fw fa-lg mr5" style="color: #f44336;"></i><?php echo __("Blocking");?>


                            </a>

                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>

                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "membership") {?>class="active"<?php }?>>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/membership">

                                    <i class="fa fa-id-card fa-fw fa-lg mr5" style="color: #009688;"></i><?php echo __("Membership");?>


                                </a>

                            </li>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled']) {?>

                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>class="active"<?php }?>>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/affiliates">

                                    <i class="fa fa-exchange-alt fa-fw fa-lg mr5" style="color: #e91e63"></i><?php echo __("Affiliates");?>


                                </a>

                            </li>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled']) {?>

                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "points") {?>class="active"<?php }?>>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/points">

                                    <i class="fa fa-piggy-bank fa-fw fa-lg mr5" style="color: #3f51b5;"></i><?php echo __("Points");?>


                                </a>

                            </li>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>

                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>class="active"<?php }?>>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/verification">

                                    <i class="fa fa-check-circle fa-fw fa-lg mr5" style="color: #2196f3"></i><?php echo __("Verification");?>


                                </a>

                            </li>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['delete_accounts_enabled']) {?>

                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "delete") {?>class="active"<?php }?>>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/delete">

                                    <i class="fa fa-trash fa-fw fa-lg mr5" style="color: #f44336;"></i><?php echo __("Delete Account");?>


                                </a>

                            </li>

                        <?php }?>

                    </ul>

                </div>

            </div>

        </div>

        <!-- left panel -->



        <!-- right panel -->

        <div class="col-sm-9 offcanvas-mainbar">

            <div class="panel panel-default">



                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                    <div class="panel-heading with-icon with-nav">

                        <!-- panel title -->

                        <div class="mb20">

                            <i class="fa fa-cog pr5 panel-icon"></i>

                            <strong><?php echo __("Account Settings");?>
</strong>

                        </div>

                        <!-- panel title -->



                        <!-- panel nav -->

                        <ul class="nav nav-tabs">

                            <li class="active">

                                <a href="#username" data-toggle="tab">

                                    <i class="fa fa-cog fa-fw mr5"></i><strong class="pr5"><?php echo __("Username");?>
</strong>

                                </a>

                            </li>

                            <li>

                                <a href="#email" data-toggle="tab">

                                    <i class="fa fa-envelope fa-fw mr5"></i><strong class="pr5"><?php echo __("Email");?>
</strong>

                                </a>

                            </li>

                            <?php if (($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") || ($_smarty_tpl->tpl_vars['system']->value['two_factor_enabled'] && $_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms")) {?>

                                <li>

                                    <a href="#phone" data-toggle="tab">

                                        <i class="fa fa-mobile fa-fw mr5"></i><strong class="pr5"><?php echo __("Phone");?>
</strong>

                                    </a>

                                </li>

                            <?php }?>

                            <li>

                                <a href="#password" data-toggle="tab">

                                    <i class="fa fa-key fa-fw mr5"></i><strong class="pr5"><?php echo __("Password");?>
</strong>

                                </a>

                            </li>

                        </ul>

                        <!-- panel nav -->

                    </div>

                    <div class="panel-body tab-content">

                        <!-- username -->

                        <div class="tab-pane active" id="username">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=username">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Username");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <div class="input-group">

                                            <span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/</span>

                                            <input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">

                                        </div>

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

                        <!-- username -->



                        <!-- email -->

                        <div class="tab-pane" id="email">

                            <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_email_verified']) {?>

                                <div class="alert alert-danger">

                                    <div class="icon">

                                        <i class="fa fa-exclamation-triangle fa-2x"></i>

                                    </div>

                                    <div class="text">

                                        <strong><?php echo __("Email Verification Required");?>
</strong><br>

                                        <?php echo __("Check your email inbox");?>
 <?php echo __("to complete the verification process");?>
 - <span class="text-link" data-toggle="modal" data-url="core/activation_email_resend.php"><?php echo __("Resend Verification Email");?>
</span>

                                    </div>

                                </div>

                            <?php }?>

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=email">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Email Address");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
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

                        <!-- email -->



                        <!-- phone -->

                        <?php if (($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") || ($_smarty_tpl->tpl_vars['system']->value['two_factor_enabled'] && $_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms")) {?>

                            <div class="tab-pane" id="phone">

                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_phone_verified']) {?>

                                    <div class="alert alert-danger">

                                        <div class="icon">

                                            <i class="fa fa-exclamation-triangle fa-2x"></i>

                                        </div>

                                        <div class="text">

                                            <strong><?php echo __("Phone Verification Required");?>
</strong><br>

                                            <?php echo __("Check your phone SMS");?>
 <?php echo __("to complete phone verification process");?>


                                            <span class="btn btn-info btn-sm ml10" data-toggle="modal" data-url="#activation-phone"><?php echo __("Enter Code");?>
</span>

                                        </div>

                                    </div>

                                <?php }?>

                                <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=phone">

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">

                                            <?php echo __("Phone Number");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
">

                                            <span class="help-block">

                                                <?php echo __("Phone number (eg. +905...)");?>


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

                        <!-- phone -->



                        <!-- password -->

                        <div class="tab-pane" id="password">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=password">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Current");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="password" class="form-control" name="current">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("New");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="password" class="form-control" name="new">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Re-type New");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="password" class="form-control" name="confirm">

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

                        <!-- password -->

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>

                    <div class="panel-heading with-icon with-nav">

                        <!-- panel title -->

                        <div class="mb20">

                            <i class="fa fa-user pr5 panel-icon"></i>

                            <strong><?php echo __("Edit Profile");?>
</strong>

                        </div>

                        <!-- panel title -->



                        <!-- panel nav -->

                        <ul class="nav nav-tabs">

                            <li class="active">

                                <a href="#basic" data-toggle="tab">

                                    <i class="fa fa-user fa-fw mr5"></i><strong class="pr5"><?php echo __("Basic");?>
</strong>

                                </a>

                            </li>

                            <li>

                                <a href="#work" data-toggle="tab">

                                    <i class="fa fa-briefcase fa-fw mr5"></i><strong class="pr5"><?php echo __("Work");?>
</strong>

                                </a>

                            </li>

                            <li>

                                <a href="#location" data-toggle="tab">

                                    <i class="fa fa-map-marker fa-fw mr5"></i><strong class="pr5"><?php echo __("Location");?>
</strong>

                                </a>

                            </li>

                            <li>

                                <a href="#education" data-toggle="tab">

                                    <i class="fa fa-graduation-cap fa-fw mr5"></i><strong class="pr5"><?php echo __("Education");?>
</strong>

                                </a>

                            </li>

                            <li>

                                <a href="#social" data-toggle="tab">

                                    <i class="fab fa-facebook fa-fw mr5"></i><strong class="pr5"><?php echo __("Social Links");?>
</strong>

                                </a>

                            </li>

                            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>

                                <li>

                                    <a href="#other" data-toggle="tab">

                                        <i class="fa fa-plus fa-fw mr5"></i><strong class="pr5"><?php echo __("Other");?>
</strong>

                                    </a>

                                </li>

                            <?php }?>

                        </ul>

                        <!-- panel nav -->

                    </div>



                    <div class="panel-body tab-content">

                        <!-- basic tab -->

                        <div class="tab-pane active" id="basic">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=basic">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("First Name");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input class="form-control" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Last Name");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input class="form-control" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("I am");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <select name="gender" class="form-control">

                                            <option value="none"><?php echo __("Select Sex");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "male") {?>selected<?php }?> value="male"><?php echo __("Male");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "female") {?>selected<?php }?> value="female"><?php echo __("Female");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "other") {?>selected<?php }?> value="other"><?php echo __("Other");?>
</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Birthdate");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <div class="row">

                                            <div class="col-xs-4">

                                                <select class="form-control" name="birth_month">

                                                    <option value="none"><?php echo __("Select Month");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>

                                                </select>

                                            </div>

                                            <div class="col-xs-4">

                                                <select class="form-control" name="birth_day">

                                                    <option value="none"><?php echo __("Select Day");?>
</option>

                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>

                                                    <?php }
}
?>

                                                </select>

                                            </div>

                                            <div class="col-xs-4">

                                                <select class="form-control" name="birth_year">

                                                    <option value="none"><?php echo __("Select Year");?>
</option>

                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2015+1 - (1905) : 1905-(2015)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>

                                                    <?php }
}
?>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Country");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <select name="country" class="form-control">

                                            <option value="none"><?php echo __("Select Country");?>
</option>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>

                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </select>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Relationship Status");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <select name="relationship" class="form-control">

                                            <option value="none"><?php echo __("Select Relationship");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo __("Single");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo __("In a relationship");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo __("Married");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo __("It's complicated");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo __("Separated");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo __("Divorced");?>
</option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo __("Widowed");?>
</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("About Me");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <textarea class="form-control" name="biography"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_biography'];?>
</textarea>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Website");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="website" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_website'];?>
">

                                    </div>

                                </div>

                                <!-- custom fields -->

                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>

                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>

                                <?php }?>

                                <!-- custom fields -->

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

                        <!-- basic tab -->



                        <!-- work tab -->

                        <div class="tab-pane" id="work">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=work">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Work Title");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Work Place");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Work Website");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="work_url" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_url'];?>
">

                                    </div>

                                </div>

                                <!-- custom fields -->

                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>

                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['work'],'_registration'=>false), 0, true);
?>

                                <?php }?>

                                <!-- custom fields -->

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

                        <!-- work tab -->



                        <!-- location tab -->

                        <div class="tab-pane" id="location">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=location">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Current City");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control js_geocomplete" name="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Hometown");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control js_geocomplete" name="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">

                                    </div>

                                </div>

                                <!-- custom fields -->

                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['location']) {?>

                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['location'],'_registration'=>false), 0, true);
?>

                                <?php }?>

                                <!-- custom fields -->

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

                        <!-- location tab -->



                        <!-- education tab -->

                        <div class="tab-pane" id="education">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=education">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("School");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Major");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Class");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">

                                    </div>

                                </div>

                                <!-- custom fields -->

                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>

                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['education'],'_registration'=>false), 0, true);
?>

                                <?php }?>

                                <!-- custom fields -->

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

                        <!-- education tab -->



                        <!-- social tab -->

                        <div class="tab-pane" id="social">

                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=social">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-facebook-square fa-2x" style="color: #3B579D"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_facebook'];?>
" placeholder="<?php echo __("Facebook Profile URL");?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-twitter-square fa-2x" style="color: #55ACEE"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_twitter'];?>
" placeholder="<?php echo __("Twitter Profile URL");?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-google-plus-square fa-2x" style="color: #DC4A38"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="google" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_google'];?>
" placeholder="<?php echo __("Google+ Profile URL");?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-youtube fa-2x" style="color: #E62117"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_youtube'];?>
" placeholder="<?php echo __("YouTube Profile URL");?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-instagram fa-2x" style="color: #3f729b"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_instagram'];?>
" placeholder="<?php echo __("Instagram Profile URL");?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-linkedin fa-2x" style="color: #1A84BC"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_linkedin'];?>
" placeholder="<?php echo __("LinkedIn Profile URL");?>
">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <i class="fab fa-vk fa-2x" style="color: #527498"></i>

                                    </label>

                                    <div class="col-sm-9 mt5">

                                        <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_vkontakte'];?>
" placeholder="<?php echo __("Vkontakte Profile URL");?>
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

                        <!-- social tab -->



                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>

                            <!-- other tab -->

                            <div class="tab-pane" id="other">

                                <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=other">

                                    <!-- custom fields -->

                                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['other'],'_registration'=>false), 0, true);
?>

                                    <?php }?>

                                    <!-- custom fields -->

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

                            <!-- other tab -->

                        <?php }?>

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-lock pr5 panel-icon"></i>

                        <strong><?php echo __("Privacy Settings");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=privacy">

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>

                                <div class="form-group">

                                    <label class="col-sm-5 control-label" for="privacy_chat">

                                        <?php echo __("Chat");?>


                                    </label>

                                    <div class="col-sm-3">

                                        <select class="form-control" name="privacy_chat" id="privacy_chat">

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'] == 0) {?>selected<?php }?> value="0">

                                                <?php echo __("Offline");?>


                                            </option>

                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'] == 1) {?>selected<?php }?> value="1">

                                                <?php echo __("Online");?>


                                            </option>

                                        </select>

                                    </div>

                                </div>

                            <?php }?>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_wall">

                                    <?php echo __("Who can post on your wall");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_wall" id="privacy_wall">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_birthdate">

                                    <?php echo __("Who can see your");?>
 <?php echo __("birthdate");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_birthdate" id="privacy_birthdate">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_relationship">

                                    <?php echo __("Who can see your");?>
 <?php echo __("relationship");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_relationship" id="privacy_relationship">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_basic">

                                    <?php echo __("Who can see your");?>
 <?php echo __("basic info");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_basic" id="privacy_basic">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_work">

                                    <?php echo __("Who can see your");?>
 <?php echo __("work info");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_work" id="privacy_work">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_location">

                                    <?php echo __("Who can see your");?>
 <?php echo __("location info");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_location" id="privacy_location">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_education">

                                    <?php echo __("Who can see your");?>
 <?php echo __("education info");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_education" id="privacy_education">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_other">

                                    <?php echo __("Who can see your");?>
 <?php echo __("other info");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_other" id="privacy_other">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_friends">

                                    <?php echo __("Who can see your");?>
 <?php echo __("friends");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_friends" id="privacy_friends">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_photos">

                                    <?php echo __("Who can see your");?>
 <?php echo __("photos");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_photos" id="privacy_photos">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_pages">

                                    <?php echo __("Who can see your");?>
 <?php echo __("liked pages");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_pages" id="privacy_pages">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_groups">

                                    <?php echo __("Who can see your");?>
 <?php echo __("joined groups");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_groups" id="privacy_groups">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_events">

                                    <?php echo __("Who can see your");?>
 <?php echo __("joined events");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_events" id="privacy_events">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "public") {?>selected<?php }?> value="public">

                                            <?php echo __("Everyone");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "friends") {?>selected<?php }?> value="friends">

                                            <?php echo __("Friends");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "me") {?>selected<?php }?> value="me">

                                            <?php echo __("Just Me");?>


                                        </option>

                                    </select>

                                </div>

                            </div>



                            <div class="form-group">

                                <label class="col-sm-5 control-label" for="privacy_events">

                                    <?php echo __("Email you with our newsletter");?>


                                </label>

                                <div class="col-sm-3">

                                    <select class="form-control" name="privacy_newsletter" id="privacy_newsletter">

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_newsletter'] == 0) {?>selected<?php }?> value="0">

                                            <?php echo __("No");?>


                                        </option>

                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_newsletter'] == 1) {?>selected<?php }?> value="1">

                                            <?php echo __("Yes");?>


                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <div class="col-sm-7 col-sm-offset-5">

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

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "two-factor") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-shield-alt pr5 panel-icon"></i>

                        <strong><?php echo __("Two-Factor Authentication");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <div class="alert alert-warning">

                            <div class="icon">

                                <i class="fa fa-shield-alt fa-2x"></i>

                            </div>

                            <div class="text">

                                <strong><?php echo __("Two-Factor Authentication");?>
</strong><br>

                                <?php echo __("Log in with a code from your");?>
 

                                <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "email") {
echo __("email");
}?> 

                                <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms") {
echo __("phone");
}?> 

                                <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {
echo __("Google Authenticator App");
}?> 

                                <?php echo __("as well as a password");?>


                            </div>

                        </div>

                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=two-factor">

                            <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_two_factor_enabled'] && $_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {?>

                                <h4><?php echo __("Configuring your authenticator");?>
</h4>

                                <ol class="mtb20">

                                    <li class="mb5">

                                        <?php echo __("You need to download Google Authenticator app for");?>
 <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><?php echo __("Android");?>
</a> <?php echo __("or");?>
 <a target="_blank" href="https://itunes.apple.com/eg/app/google-authenticator/id388497605?mt=8"><?php echo __("IOS");?>
</a>

                                    </li>

                                    <li>

                                        <?php echo __("In your app, add a new account using the details below");?>
:

                                    </li>

                                </ol>

                                <div class="form-group ml0 mtb20">

                                    <div class="col-sm-6 text-center">

                                        <div>

                                            <strong><?php echo __("Scanning the QR code");?>
</strong>

                                        </div>

                                        <img src="<?php echo $_smarty_tpl->tpl_vars['two_factor_QR']->value;?>
">

                                    </div>

                                    <div class="col-sm-6 text-center">

                                        <div>

                                            <strong><?php echo __("Manually by entering this token");?>
</strong>

                                        </div>

                                        <h3>

                                            <span class="label label-info pt10 plr20"><?php echo $_smarty_tpl->tpl_vars['two_factor_gsecret']->value;?>
</span>

                                        </h3>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-5 control-label">

                                        <?php echo __("Enter the code shown on your app");?>


                                    </label>

                                    <div class="col-sm-4">

                                        <input name="gcode" type="text" class="form-control" placeholder="######" required autofocus>

                                    </div>

                                </div>

                            <?php } else { ?>

                                <div class="form-group">

                                    <label class="col-sm-5 control-label">

                                        <?php echo __("Two-Factor Authentication");?>


                                    </label>

                                    <div class="col-sm-7">

                                        <label class="switch" for="two_factor_enabled">

                                            <input type="checkbox" name="two_factor_enabled" id="two_factor_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_two_factor_enabled']) {?>checked<?php }?>>

                                            <span class="slider round"></span>

                                        </label>

                                    </div>

                                </div>

                            <?php }?>

                            <div class="form-group">

                                <div class="col-sm-7 col-sm-offset-5">

                                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['two_factor_type'];?>
">

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

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "sessions") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fas fa-fingerprint pr5 panel-icon"></i>

                        <strong><?php echo __("Manage Sessions");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead>

                                    <tr>

                                        <th><?php echo __("ID");?>
</th>

                                        <th><?php echo __("Browser");?>
</th>

                                        <th><?php echo __("OS");?>
</th>

                                        <th><?php echo __("Date");?>
</th>

                                        <th><?php echo __("IP");?>
</th>

                                        <th><?php echo __("Actions");?>
</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sessions']->value, 'session');
$_smarty_tpl->tpl_vars['session']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->iteration++;
$__foreach_session_1_saved = $_smarty_tpl->tpl_vars['session'];
?>

                                        <tr <?php if ($_smarty_tpl->tpl_vars['session']->value['session_token'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session']) {?>class="success"<?php }?>>

                                            <td><?php echo $_smarty_tpl->tpl_vars['session']->iteration;?>
</td>

                                            <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_browser'];?>
 <?php if ($_smarty_tpl->tpl_vars['session']->value['session_token'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session']) {?><span class="label label-info"><?php echo __("Active Session");?>
</span><?php }?></td>

                                            <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_os'];?>
</td>

                                            <td>

                                                <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
</span>

                                            </td>

                                            <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_ip'];?>
</td>

                                            <td>

                                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("End Session");?>
' class="btn btn-xs btn-danger js_session-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_id'];?>
">

                                                    <i class="fa fa-trash-alt"></i>

                                                </button>

                                            </td>

                                        </tr>

                                    <?php
$_smarty_tpl->tpl_vars['session'] = $__foreach_session_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "notifications") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-envelope-open pr5 panel-icon"></i>

                        <strong><?php echo __("Email Notifications");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=notifications">

                            <div class="form-group">

                                <label class="col-sm-3 control-label">

                                    <?php echo __("Email Me When");?>


                                </label>

                                <div class="col-sm-9">

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_likes']) {?>checked<?php }?>>

                                            <label for="email_post_likes"><?php echo __("Someone liked my post");?>
</label>

                                        </div>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_comments']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_comments']) {?>checked<?php }?>>

                                            <label for="email_post_comments"><?php echo __("Someone commented on my post");?>
</label>

                                        </div>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_shares']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_shares']) {?>checked<?php }?>>

                                            <label for="email_post_shares"><?php echo __("Someone shared my post");?>
</label>

                                        </div>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_wall_posts']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_wall_posts']) {?>checked<?php }?>>

                                            <label for="email_wall_posts"><?php echo __("Someone posted on my timeline");?>
</label>

                                        </div>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_mentions']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_mentions']) {?>checked<?php }?>>

                                            <label for="email_mentions"><?php echo __("Someone mentioned me");?>
</label>

                                        </div>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_profile_visits']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_profile_visits']) {?>checked<?php }?>>

                                            <label for="email_profile_visits"><?php echo __("Someone visited my profile");?>
</label>

                                        </div>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>

                                        <div class="checkbox checkbox-primary">

                                            <input type="checkbox" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_friend_requests']) {?>checked<?php }?>>

                                            <label for="email_friend_requests"><?php echo __("Someone sent me/accepted my friend requset");?>
</label>

                                        </div>

                                    <?php }?>

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

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-share-alt pr5 panel-icon"></i>

                        <strong><?php echo __("Linked Accounts");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <ul>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>

                                <li class="feeds-item">

                                    <div class="data-container">

                                        <div class="data-avatar">

                                            <i class="fab fa-facebook-square" style="color: #3B579D"></i>

                                        </div>

                                        <div class="data-content">

                                            <div class="pull-right flip">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>

                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/facebook"><?php echo __("Disconnect");?>
</a>

                                                <?php } else { ?>

                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook"><?php echo __("Connect");?>
</a>

                                                <?php }?>

                                            </div>

                                            <div>

                                                <div class="name mt5 text-primary">

                                                    <?php echo __("Facebook");?>


                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>

                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Facebook");?>


                                                <?php } else { ?>

                                                <?php echo __("Connect your account to");?>
 <?php echo __("Facebook");?>


                                                <?php }?>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>

                                <li class="feeds-item">

                                    <div class="data-container">

                                        <div class="data-avatar">

                                            <i class="fab fa-twitter-square" style="color: #55ACEE"></i>

                                        </div>

                                        <div class="data-content">

                                            <div class="pull-right flip">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>

                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/twitter"><?php echo __("Disconnect");?>
</a>

                                                <?php } else { ?>

                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter"><?php echo __("Connect");?>
</a>

                                                <?php }?>

                                            </div>

                                            <div>

                                                <div class="name mt5 text-primary">

                                                    <?php echo __("Twitter");?>


                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>

                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Twitter");?>


                                                <?php } else { ?>

                                                <?php echo __("Connect your account to");?>
 <?php echo __("Twitter");?>


                                                <?php }?>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>

                                <li class="feeds-item">

                                    <div class="data-container">

                                        <div class="data-avatar">

                                            <i class="fab fa-google-plus-square" style="color: #DC4A38"></i>

                                        </div>

                                        <div class="data-content">

                                            <div class="pull-right flip">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>

                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/google"><?php echo __("Disconnect");?>
</a>

                                                <?php } else { ?>

                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google"><?php echo __("Connect");?>
</a>

                                                <?php }?>

                                            </div>

                                            <div>

                                                <div class="name mt5 text-primary">

                                                    <?php echo __("Google");?>


                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>

                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Google");?>


                                                <?php } else { ?>

                                                <?php echo __("Connect your account to");?>
 <?php echo __("Google");?>


                                                <?php }?>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>

                                <li class="feeds-item">

                                    <div class="data-container">

                                        <div class="data-avatar">

                                            <i class="fab fa-instagram" style="color: #3f729b"></i>

                                        </div>

                                        <div class="data-content">

                                            <div class="pull-right flip">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['instagram_connected']) {?>

                                                    <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/instagram"><?php echo __("Disconnect");?>
</a>

                                                <?php } else { ?>

                                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram"><?php echo __("Connect");?>
</a>

                                                <?php }?>

                                            </div>

                                            <div>

                                                <div class="name mt5 text-primary">

                                                    <?php echo __("Instagram");?>


                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['instagram_connected']) {?>

                                                    <?php echo __("Your account is connected to");?>
 <?php echo __("Instagram");?>


                                                <?php } else { ?>

                                                    <?php echo __("Connect your account to");?>
 <?php echo __("Instagram");?>


                                                <?php }?>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>

                                <li class="feeds-item">

                                    <div class="data-container">

                                        <div class="data-avatar">

                                            <i class="fab fa-linkedin" style="color: #1A84BC"></i>

                                        </div>

                                        <div class="data-content">

                                            <div class="pull-right flip">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>

                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/linkedin"><?php echo __("Disconnect");?>
</a>

                                                <?php } else { ?>

                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin"><?php echo __("Connect");?>
</a>

                                                <?php }?>

                                            </div>

                                            <div>

                                                <div class="name mt5 text-primary">

                                                    <?php echo __("Linkedin");?>


                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>

                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Linkedin");?>


                                                <?php } else { ?>

                                                <?php echo __("Connect your account to");?>
 <?php echo __("Linkedin");?>


                                                <?php }?>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>

                                <li class="feeds-item">

                                    <div class="data-container">

                                        <div class="data-avatar">

                                            <i class="fab fa-vk" style="color: #527498"></i>

                                        </div>

                                        <div class="data-content">

                                            <div class="pull-right flip">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>

                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/vkontakte"><?php echo __("Disconnect");?>
</a>

                                                <?php } else { ?>

                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte"><?php echo __("Connect");?>
</a>

                                                <?php }?>

                                            </div>

                                            <div>

                                                <div class="name mt5 text-primary">

                                                    <?php echo __("Vkontakte");?>


                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>

                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Vkontakte");?>


                                                <?php } else { ?>

                                                <?php echo __("Connect your account to");?>
 <?php echo __("Vkontakte");?>


                                                <?php }?>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            <?php }?>

                        </ul>

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-minus-circle pr5 panel-icon"></i>

                        <strong><?php echo __("Manage Blocking");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <div class="alert alert-info">

                            <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("Once you block someone, that person can no longer see things you post on your timeline");?>
<br>

                        </div>



                        <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) > 0) {?>

                            <ul>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"blocked"), 0, true);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </ul>

                        <?php } else { ?>

                            <p class="text-center text-muted">

                                <?php echo __("No blocked users");?>


                            </p>

                        <?php }?>



                        <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>

                            <!-- see-more -->

                            <div class="alert alert-info see-more js_see-more" data-get="blocks">

                                <span><?php echo __("See More");?>
</span>

                                <div class="loader loader_small x-hidden"></div>

                            </div>

                            <!-- see-more -->

                        <?php }?>

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>

                    <div class="panel-heading with-icon with-nav">

                        <!-- panel title -->

                        <div class="mb20">

                            <i class="fa fa-exchange-alt pr5 panel-icon"></i>

                            <strong><?php echo __("Affiliates");?>
</strong>

                        </div>

                        <!-- panel title -->



                        <!-- panel nav -->

                        <ul class="nav nav-tabs">

                            <li class="active">

                                <a href="#affiliates" data-toggle="tab">

                                    <i class="fa fa-users fa-fw mr5"></i><strong class="pr5"><?php echo __("My Affiliates");?>
</strong>

                                </a>

                            </li>

                            <li>

                                <a href="#payments" data-toggle="tab">

                                    <i class="fa fa-money-bill-alt fa-fw mr5"></i><strong class="pr5"><?php echo __("Payments");?>
</strong>

                                </a>

                            </li>

                        </ul>

                        <!-- panel nav -->

                    </div>

                    <div class="panel-body tab-content">

                        <!-- affiliates tab -->

                        <div class="tab-pane active" id="affiliates">

                            <div class="alert alert-warning">

                                <div class="icon">

                                    <i class="fa fa-money-bill-alt fa-2x"></i>

                                </div>

                                <div class="text">

                                    <strong><?php echo __("Affiliates System");?>
</strong><br>

                                    <?php echo __("Earn up to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['system']->value['affiliates_per_user'],2);?>
 <?php echo __("For each user your refer");?>
.<br>

                                    <?php echo __("You will be paid when");?>
 

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "registration") {?>

                                        <?php echo __("new user registered");?>


                                    <?php } else { ?>

                                        <?php echo __("new user registered & bought a package");?>


                                    <?php }?>

                                </div>

                            </div>

                            <div class="text-center text-readable">

                                <?php echo __("Your affiliate link is");?>


                            </div>

                            <div class="text-center text-lg" style="margin: 10px auto; width: fit-content; padding: 10px 25px; border: 1px solid #ededed; border-radius: 25px;">

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" target="_blank">

                                    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>


                                </a>

                            </div>

                            <div class="text-center text-readable mb20">

                                <?php echo __("Share");?>
<br>

                                <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-facebook" target="_blank">

                                    <i class="fab fa-facebook-f fa-fw"></i>

                                </a>

                                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-rounded btn-twitter" target="_blank">

                                    <i class="fab fa-twitter fa-fw"></i>

                                </a>

                                <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-google" target="_blank">

                                    <i class="fab fa-google fa-fw"></i>

                                </a>

                                <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-vk" target="_blank">

                                    <i class="fab fa-vk fa-fw"></i>

                                </a>

                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-linkedin" target="_blank">

                                    <i class="fab fa-linkedin fa-fw"></i>

                                </a>

                                <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-whatsapp" target="_blank">

                                    <i class="fab fa-whatsapp fa-fw"></i>

                                </a>

                                <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-reddit" target="_blank">

                                    <i class="fab fa-reddit fa-fw"></i>

                                </a>

                                <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="btn btn-sm btn-rounded btn-pinterest" target="_blank">

                                    <i class="fab fa-pinterest fa-fw"></i>

                                </a>

                            </div>



                            <div class="divider"></div>



                            <?php if (count($_smarty_tpl->tpl_vars['affiliates']->value) > 0) {?>

                                <ul>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['affiliates']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </ul>

                            <?php } else { ?>

                                <p class="text-center text-muted">

                                    <?php echo __("No affiliates");?>


                                </p>

                            <?php }?>



                            <!-- see-more -->

                            <?php if (count($_smarty_tpl->tpl_vars['affiliates']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>

                                <div class="alert alert-info see-more js_see-more" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" data-get="affiliates">

                                    <span><?php echo __("See More");?>
</span>

                                    <div class="loader loader_small x-hidden"></div>

                                </div>

                            <?php }?>

                            <!-- see-more -->

                        </div>

                        <!-- affiliates tab -->



                        <!-- payments tab -->

                        <div class="tab-pane" id="payments">

                            <div class="alert alert-info">

                                <div class="icon">

                                    <i class="fa fa-info-circle fa-2x"></i>

                                </div>

                                <div class="text pt5">

                                    <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['affiliates_min_withdrawal'];?>


                                </div>

                            </div>

                            <form class="js_ajax-forms form-horizontal" data-url="users/withdraw.php?type=affiliates">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label"></label>

                                    <div class="col-sm-9 text-lg">

                                        <?php echo __("Your Balance");?>
: <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_balance'],2);?>


                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Email");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <input type="email" class="form-control" name="email">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)

                                    </label>

                                    <div class="col-sm-9">

                                        <input type="text" class="form-control" name="amount">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Payment Method");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "both" || $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "paypal") {?>

                                            <div class="radio radio-primary radio-inline">

                                                <input type="radio" name="method" id="method_paypal" value="paypal" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "paypal") {?>checked<?php }?>>

                                                <label for="method_paypal"><?php echo __("Paypal");?>
</label>

                                            </div>

                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "both" || $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "skrill") {?>

                                            <div class="radio radio-primary radio-inline">

                                                <input type="radio" name="method" id="method_skrill" value="skrill" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "skrill") {?>checked<?php }?>>

                                                <label for="method_skrill"><?php echo __("Skrill");?>
</label>

                                            </div>

                                        <?php }?>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="col-sm-9 col-sm-offset-3">

                                        <button type="submit" class="btn btn-success"><?php echo __("Make a withdrawal");?>
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



                            <div class="divider"></div>



                            <h4><?php echo __("Withdrawal History");?>
</h2>

                            <?php if (count($_smarty_tpl->tpl_vars['payments']->value) > 0) {?>

                                <div class="table-responsive mt20">

                                    <table class="table table-striped table-bordered table-hover">

                                        <thead>

                                            <tr>

                                                <th><?php echo __("ID");?>
</th>

                                                <th><?php echo __("Email");?>
</th>

                                                <th><?php echo __("Amount");?>
</th>

                                                <th><?php echo __("Method");?>
</th>

                                                <th><?php echo __("Time");?>
</th>

                                                <th><?php echo __("Status");?>
</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_4_saved = $_smarty_tpl->tpl_vars['payment'];
?>

                                            <tr>

                                                <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>

                                                <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['email'];?>
</td>

                                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2);?>
</td>

                                                <td>

                                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>


                                                </td>

                                                <td>

                                                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>

                                                </td>

                                                <td>

                                                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>

                                                        <span class="label label-warning"><?php echo __("Pending");?>
</span>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>

                                                        <span class="label label-success"><?php echo __("Approved");?>
</span>

                                                    <?php } else { ?>

                                                        <span class="label label-danger"><?php echo __("Declined");?>
</span>

                                                    <?php }?>

                                                </td>

                                            </tr>

                                            <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </tbody>

                                    </table>

                                </div>

                            <?php } else { ?>

                                <p class="text-center text-muted">

                                    <?php echo __("No withdrawal history");?>


                                </p>

                            <?php }?>

                        </div>

                        <!-- payments tab -->

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "points") {?>

                    <div class="panel-heading with-icon with-nav">

                        <!-- panel title -->

                        <div class="mb20">

                            <i class="fa fa-piggy-bank pr5 panel-icon"></i>

                            <strong><?php echo __("Points");?>
</strong>

                        </div>

                        <!-- panel title -->



                        <!-- panel nav -->

                        <ul class="nav nav-tabs">

                            <li class="active">

                                <a href="#points" data-toggle="tab">

                                    <i class="fa fa-coins fa-fw mr5"></i><strong class="pr5"><?php echo __("My Points");?>
</strong>

                                </a>

                            </li>

                            <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>

                                <li>

                                    <a href="#payments" data-toggle="tab">

                                        <i class="fa fa-money-bill-alt fa-fw mr5"></i><strong class="pr5"><?php echo __("Payments");?>
</strong>

                                    </a>

                                </li>

                            <?php }?>

                        </ul>

                        <!-- panel nav -->

                    </div>

                    <div class="panel-body tab-content">

                        <!-- points tab -->

                        <div class="tab-pane active" id="points">

                            <div class="alert alert-warning">

                                <div class="icon">

                                    <i class="fa fa-piggy-bank fa-2x"></i>

                                </div>

                                <div class="text">

                                    <strong><?php echo __("Points System");?>
</strong><br>

                                    <?php echo __("Each");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_currency'];?>
</strong> <?php echo __("points equal");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
1</strong>.<br>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>

                                        <?php echo __("You can withdraw your money");?>


                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled']) {?>

                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>

                                        <?php echo __("You can transfer your money to your");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>

                                    <?php }?>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-4">

                                    <div class="stat-panel success">

                                        <div class="stat-cell">

                                            <i class="fa fa-newspaper bg-icon"></i>

                                            <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_post'];?>
</span><br>

                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>

                                            <span><?php echo __("For creating a new post");?>
</span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-4">

                                    <div class="stat-panel warning">

                                        <div class="stat-cell">

                                            <i class="fa fa-comments bg-icon"></i>

                                            <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_comment'];?>
</span><br>

                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>

                                            <span><?php echo __("For commenting any post");?>
</span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-4">

                                    <div class="stat-panel info">

                                        <div class="stat-cell">

                                            <i class="fa fa-thumbs-up bg-icon"></i>

                                            <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_reaction'];?>
</span><br>

                                            <span class="text-lg"><?php echo __("Points");?>
</span><br>

                                            <span><?php echo __("For reacting on any post");?>
</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <!-- points balance -->

                                <div class="col-sm-6">

                                    <div class="panel-sub-title mb20"><i class="fa fa-coins"></i> <?php echo __("Your Points Balance");?>
</div>

                                    <div class="stat-panel default">

                                        <div class="stat-cell small">

                                            <i class="fa fa-coins bg-icon"></i>

                                            <span style="font-size: 20px; font-weight: normal; line-height: 40px;">

                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_points'];?>
 <?php echo __("Points");?>


                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <!-- points balance -->



                                <!-- points balance -->

                                <div class="col-sm-6">

                                    <div class="panel-sub-title mb20"><i class="fas fa-donate"></i> <?php echo __("Your Money Balance");?>
</div>

                                    <div class="stat-panel default">

                                        <div class="stat-cell small">

                                            <i class="fa fas fa-donate bg-icon"></i>

                                            <span style="font-size: 20px; font-weight: normal; line-height: 40px;">

                                                <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format(((1/$_smarty_tpl->tpl_vars['system']->value['points_per_currency'])*$_smarty_tpl->tpl_vars['user']->value->_data['user_points']),2);?>


                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <!-- points balance -->

                            </div>

                        </div>

                        <!-- points tab -->



                        <!-- payments tab -->

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>

                            <div class="tab-pane" id="payments">

                                <div class="alert alert-info">

                                    <div class="icon">

                                        <i class="fa fa-info-circle fa-2x"></i>

                                    </div>

                                    <div class="text pt5">

                                        <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['points_min_withdrawal'];?>


                                    </div>

                                </div>

                                <form class="js_ajax-forms form-horizontal" data-url="users/withdraw.php?type=points">

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label"></label>

                                        <div class="col-sm-9 text-lg">

                                            <?php echo __("Your Balance");?>
: <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format(((1/$_smarty_tpl->tpl_vars['system']->value['points_per_currency'])*$_smarty_tpl->tpl_vars['user']->value->_data['user_points']),2);?>


                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">

                                            <?php echo __("Email");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <input type="email" class="form-control" name="email">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">

                                            <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)

                                        </label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="amount">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">

                                            <?php echo __("Payment Method");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "both" || $_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "paypal") {?>

                                                <div class="radio radio-primary radio-inline">

                                                    <input type="radio" name="method" id="method_paypal" value="paypal" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "paypal") {?>checked<?php }?>>

                                                    <label for="method_paypal"><?php echo __("Paypal");?>
</label>

                                                </div>

                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "both" || $_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "skrill") {?>

                                                <div class="radio radio-primary radio-inline">

                                                    <input type="radio" name="method" id="method_skrill" value="skrill" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_payment_method'] == "skrill") {?>checked<?php }?>>

                                                    <label for="method_skrill"><?php echo __("Skrill");?>
</label>

                                                </div>

                                            <?php }?>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="col-sm-9 col-sm-offset-3">

                                            <button type="submit" class="btn btn-success"><?php echo __("Make a withdrawal");?>
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



                                <div class="divider"></div>



                                <h4><?php echo __("Withdrawal History");?>
</h2>

                                <?php if (count($_smarty_tpl->tpl_vars['payments']->value) > 0) {?>

                                    <div class="table-responsive mt20">

                                        <table class="table table-striped table-bordered table-hover">

                                            <thead>

                                                <tr>

                                                    <th><?php echo __("ID");?>
</th>

                                                    <th><?php echo __("Email");?>
</th>

                                                    <th><?php echo __("Amount");?>
</th>

                                                    <th><?php echo __("Method");?>
</th>

                                                    <th><?php echo __("Time");?>
</th>

                                                    <th><?php echo __("Status");?>
</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_5_saved = $_smarty_tpl->tpl_vars['payment'];
?>

                                                <tr>

                                                    <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>

                                                    <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['email'];?>
</td>

                                                    <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2);?>
</td>

                                                    <td>

                                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>


                                                    </td>

                                                    <td>

                                                        <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>

                                                    </td>

                                                    <td>

                                                        <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>

                                                            <span class="label label-warning"><?php echo __("Pending");?>
</span>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>

                                                            <span class="label label-success"><?php echo __("Approved");?>
</span>

                                                        <?php } else { ?>

                                                            <span class="label label-danger"><?php echo __("Declined");?>
</span>

                                                        <?php }?>

                                                    </td>

                                                </tr>

                                                <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </tbody>

                                        </table>

                                    </div>

                                <?php } else { ?>

                                    <p class="text-center text-muted">

                                        <?php echo __("No withdrawal history");?>


                                    </p>

                                <?php }?>

                            </div>

                        <?php }?>

                        <!-- payments tab -->

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-check-circle pr5 panel-icon"></i>

                        <strong><?php echo __("Verification");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>

                            <div class="text-center">

                                <div class="big-icon success">

                                    <i class="fa fa-thumbs-up fa-3x"></i>

                                </div>

                                <h4><?php echo __("Congratulations");?>
</h4>

                                <p class="mt20"><?php echo __("This account is verified");?>
</p>

                            </div>

                        <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>

                            <div class="alert alert-info">

                                <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("You can send verification request to verify your account");?>
<br>

                            </div>



                            <form class="js_ajax-forms form-horizontal" data-url="users/verify.php?node=user">

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Verification Documents");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <div class="row">

                                            <div class="col-sm-6">

                                                <div class="panel-sub-title mb10">

                                                    <i class="fas fa-camera-retro mr10"></i><?php echo __("Your Photo");?>


                                                </div>

                                                <div class="x-image full">

                                                    <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>

                                                        <span>×</span>

                                                    </button>

                                                    <div class="x-image-loader">

                                                        <div class="progress x-progress">

                                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                                                        </div>

                                                    </div>

                                                    <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>

                                                    <input type="hidden" class="js_x-image-input" name="photo" value="">

                                                </div>

                                                

                                            </div>

                                            <div class="col-sm-6">

                                                <div class="panel-sub-title mb10">

                                                    <i class="fas fa-passport mr10"></i><?php echo __("Passport or National ID");?>


                                                </div>

                                                <div class="x-image full">

                                                    <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>

                                                        <span>×</span>

                                                    </button>

                                                    <div class="x-image-loader">

                                                        <div class="progress x-progress">

                                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                                                        </div>

                                                    </div>

                                                    <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>

                                                    <input type="hidden" class="js_x-image-input" name="passport" value="">

                                                </div>

                                            </div>

                                        </div>

                                        <span class="help-block">

                                            <?php echo __("Please attach your photo and your Passport or National ID");?>


                                        </span>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label">

                                        <?php echo __("Additional Information");?>


                                    </label>

                                    <div class="col-sm-9">

                                        <textarea class="form-control" name="message"></textarea>

                                        <span class="help-block">

                                            <?php echo __("Please share why your account should be verified");?>


                                        </span>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="col-sm-9 col-sm-offset-3">

                                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle mr5"></i><?php echo __("Send Verification Request");?>
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

                        <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>

                            <div class="text-center">

                                <div class="big-icon warning">

                                    <i class="fa fa-clock fa-3x"></i>

                                </div>

                                <h4><?php echo __("Pending");?>
</h4>

                                <p class="mt20"><?php echo __("Your verification request is still awaiting admin approval");?>
</p>

                            </div>

                        <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>

                            <div class="text-center">

                                <div class="big-icon error">

                                    <i class="fa fa-frown fa-3x"></i>

                                </div>

                                <h4><?php echo __("Sorry");?>
</h4>

                                <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>

                            </div>

                        <?php }?>

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "membership") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-id-card pr5 panel-icon"></i>

                        <strong><?php echo __("Membership");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <div class="alert alert-warning">

                            <div class="icon">

                                <i class="fa fa-id-card fa-2x"></i>

                            </div>

                            <div class="text">

                                <strong><?php echo __("Membership");?>
</strong><br>

                                <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>

                            </div>

                        </div>



                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>

                            <div class="text-center">

                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade to Pro");?>
</a>

                            </div>

                        <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>

                                <form class="form-horizontal">

                                    <div class="form-group mb0">

                                        <label class="col-sm-3 control-label text-left">

                                            <?php echo __("Package");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <p class="form-control-static">

                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['user']->value->_data['price'];?>
 

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {
echo __("Life Time");
} else {
echo __("per");?>
 <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['user']->value->_data['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['user']->value->_data['period']));
}?>)

                                            </p>

                                        </div>

                                    </div>

                                    <div class="form-group mb0">

                                        <label class="col-sm-3 control-label text-left">

                                            <?php echo __("Subscription Date");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <p class="form-control-static">

                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['user_subscription_date'],"%e %B %Y");?>


                                            </p>

                                        </div>

                                    </div>

                                    <div class="form-group mb0">

                                        <label class="col-sm-3 control-label text-left">

                                            <?php echo __("Expiration Date");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <p class="form-control-static">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {?>

                                                    <?php echo __("Life Time");?>


                                                <?php } else { ?>

                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'] > 0) {
echo __("Remaining");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'];?>
 <?php echo __("Days");
} else {
echo __("Expired");
}?>)

                                                <?php }?>

                                            </p>

                                        </div>

                                    </div>

                                    <div class="form-group mb0">

                                        <label class="col-sm-3 control-label text-left">

                                            <?php echo __("Boosted Posts");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <p class="form-control-static">

                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'];?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/posts"><?php echo __("Manage");?>
</a>)

                                            </p>

                                            

                                            <div class="progress mb5">

                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
%"></div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label text-left">

                                            <?php echo __("Boosted Pages");?>


                                        </label>

                                        <div class="col-sm-9">

                                            <p class="form-control-static">

                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'];?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/pages"><?php echo __("Manage");?>
</a>)

                                            </p>

                                            

                                            <div class="progress mb5">

                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
%"></div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label text-left">

                                            

                                        </label>

                                        <div class="col-sm-9">

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade Package");?>
</a>

                                        </div>

                                    </div>

                                </form>

                            <?php }?>

                        <?php }?>

                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "delete") {?>

                    <div class="panel-heading with-icon">

                        <!-- panel title -->

                        <i class="fa fa-trash pr5 panel-icon"></i>

                        <strong><?php echo __("Delete Account");?>
</strong>

                        <!-- panel title -->

                    </div>

                    <div class="panel-body">

                        <div class="alert alert-warning">

                            <i class="fa fa-exclamation-triangle fa-lg mr10"></i><?php echo __("Once you delete your account you will no longer can access it again");?>


                        </div>

                        <div class="text-center">

                            <button class="btn btn-danger js_delete-user"><i class="fa fa-trash mr5"></i><?php echo __("Delete My Account");?>
</button>

                        </div>

                    </div>

                <?php }?>

                

            </div>

        </div>

        <!-- right panel -->

        

    </div>

</div>

<!-- page content -->



<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
