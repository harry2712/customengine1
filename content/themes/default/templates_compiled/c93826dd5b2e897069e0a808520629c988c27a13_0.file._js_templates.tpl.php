<?php
/* Smarty version 3.1.33, created on 2019-02-01 13:33:06
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/_js_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c544a92c7f350_51770751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c93826dd5b2e897069e0a808520629c988c27a13' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/_js_templates.tpl',
      1 => 1549027984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 4,
  ),
),false)) {
function content_5c544a92c7f350_51770751 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modals --><div id="modal" class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="loader pt10 pb10"></div></div></div></div></div><?php echo '<script'; ?>
 id="modal-login" type="text/template"><div class="modal-header"><h5 class="modal-title"><?php echo __("Not Logged In");?>
</h5></div><div class="modal-body"><p><?php echo __("Please log in to continue");?>
</p></div><div class="modal-footer"><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Login");?>
</a></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-message" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-success" type="text/template"><div class="modal-body text-center"><div class="big-icon success"><i class="fa fa-thumbs-up fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-error" type="text/template"><div class="modal-body text-center"><div class="big-icon error"><i class="fa fa-times fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-confirm" type="text/template"><div class="modal-header"><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button><button type="button" class="btn btn-primary" id="modal-confirm-ok"><?php echo __("Confirm");?>
</button></div><?php echo '</script'; ?>
><!-- Modals --><!-- Translator --><?php echo '<script'; ?>
 id="translator" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Select Your Language");?>
</h5></div><div class="modal-body"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?><li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;"><a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
<div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;"><img width="50" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"></div></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php echo '</script'; ?>
><!-- Translator --><!-- Search --><?php echo '<script'; ?>
 id="search-for" type="text/template"><div class="ptb10 plr10"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/{{#hashtag}}hashtag/{{/hashtag}}{{query}}"><i class="fa fa-search pr5"></i> <?php echo __("Search for");?>
 {{#hashtag}}#{{/hashtag}}{{query}}</a></div><?php echo '</script'; ?>
><!-- Search --><!-- Lightbox --><?php echo '<script'; ?>
 id="lightbox" type="text/template"><div class="lightbox"><div class="container lightbox-container"><div class="lightbox-preview"><div class="lightbox-next js_lightbox-slider"><i class="fa fa-chevron-right fa-3x"></i></div><div class="lightbox-prev js_lightbox-slider"><i class="fa fa-chevron-left fa-3x"></i></div><img alt="" class="img-responsive" src="{{image}}"></div><div class="lightbox-data"><div class="clearfix"><div class="pt5 pr5 pull-right flip"><button data-toggle="tooltip" data-placement="bottom" title='<?php echo __("Press Esc to close");?>
' type="button" class="close lightbox-close js_lightbox-close"><span aria-hidden="true">&times;</span></button></div></div><div class="lightbox-post"><div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%"><div class="loader mtb10"></div></div></div></div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="lightbox-nodata" type="text/template"><div class="lightbox"><div class="container lightbox-container"><div class="lightbox-preview nodata"><img alt="" class="img-responsive" src="{{image}}"></div></div></div><?php echo '</script'; ?>
><!-- Lightbox --><!-- Payments --><?php echo '<script'; ?>
 id="payment" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Select Your Payment Method");?>
</h5></div><div class="modal-body text-center"><?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_enabled']) {?><button class="js_payment-paypal btn btn-payment btn-lg mr10 mb10" data-handle="{{handle}}"{{#id}} data-id="{{id}}" {{/id}}{{#price}} data-price="{{price}}" {{/price}}{{#name}} data-name="{{name}}" {{/name}}{{#img}} data-img="{{img}}" {{/img}}data-loading-text="<i class='fas fa-circle-notch fa-spin'></i> <?php echo __("Loading");?>
"><i class="fab fa-paypal fa-lg fa-fw" style="color: #00186A;"></i> <?php echo __("Paypal");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['creditcard_enabled']) {?><button class="js_payment-stripe btn btn-payment btn-lg mr10 mb10" data-handle="{{handle}}"{{#id}} data-id="{{id}}" {{/id}}{{#price}} data-price="{{price}}" {{/price}}{{#name}} data-name="{{name}}" {{/name}}{{#img}} data-img="{{img}}" {{/img}}data-loading-text="<i class='fas fa-circle-notch fa-spin'></i> <?php echo __("Loading");?>
" data-method="credit"><i class="fa fa-credit-card fa-lg fa-fw" style="color: #8798CC;"></i> <?php echo __("Credit Card");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['alipay_enabled']) {?><button class="js_payment-stripe btn btn-payment btn-lg" data-handle="{{handle}}"{{#id}} data-id="{{id}}" {{/id}}{{#price}} data-price="{{price}}" {{/price}}{{#name}} data-name="{{name}}" {{/name}}{{#img}} data-img="{{img}}" {{/img}}data-loading-text="<i class='fas fa-circle-notch fa-spin'></i> <?php echo __("Loading");?>
" data-method="alipay"><i class="fab fa-alipay fa-lg fa-fw" style="color: #5B9EDD;"></i> <?php echo __("Alipay");?>
</button><?php }?></div><?php echo '</script'; ?>
><!-- Payments --><?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?><!-- Forget Password --><?php echo '<script'; ?>
 id="forget-password-confirm" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Check Your Email");?>
</h5></div><form class="js_ajax-forms" data-url="core/forget_password_confirm.php"><div class="modal-body"><div class="mb20"><?php echo __("Check your email");?>
 - <?php echo __("We sent you an email with a six-digit confirmation code. Enter it below to continue to reset your password");?>
.</div><div class="row"><div class="col-md-6"><div class="form-group"><input name="reset_key" type="text" class="form-control" placeholder="######" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="col-md-6"><label class="mb0"><?php echo __("We sent your code to");?>
</label> {{email}}</div></div></div><div class="modal-footer"><input name="email" type="hidden" value="{{email}}"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="forget-password-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Your Password!");?>
</h5></div><form class="js_ajax-forms" data-url="core/forget_password_reset.php"><div class="modal-body"><div class="form-group"><label for="password"><?php echo __("New Password");?>
</label><input name="password" id="password" type="password" class="form-control" required autofocus></div><div class="form-group"><label for="confirm"><?php echo __("Confirm Password");?>
</label><input name="confirm" id="confirm" type="password" class="form-control" required></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><input name="email" type="hidden" value="{{email}}"><input name="reset_key" type="hidden" value="{{reset_key}}"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Forget Password --><!-- Two-Factor Authentication --><?php echo '<script'; ?>
 id="two-factor-authentication" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Two-factor authentication required");?>
</h5></div><form class="js_ajax-forms" data-url="core/two_factor_authentication.php"><div class="modal-body"><div class="mb20"><?php echo __("You've asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser");?>
.</div><div class="mb20"><?php echo __("Enter the 6-digit code that we sent to your");?>
 <strong>{{method}}</strong></div><div class="form-group"><input name="two_factor_key" type="text" class="form-control" placeholder="######" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><input name="user_id" type="hidden" value="{{user_id}}">{{#remember}}<input name="remember" type="hidden" value="true">{{/remember}}<button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button></div></form><?php echo '</script'; ?>
><!-- Two-Factor Authentication --><?php } else { ?><!-- Email Activation --><?php echo '<script'; ?>
 id="activation-email-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Email Address");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_email_reset.php"><div class="modal-body"><div class="form-group"><label><?php echo __("Current Email");?>
</label><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</p></div><div class="form-group"><label for="email"><?php echo __("New Email");?>
</label><input name="email" id="email" type="email" class="form-control" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Email Activation --><!-- Phone Activation --><?php echo '<script'; ?>
 id="activation-phone" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Enter the code from the SMS message");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_phone_confirm.php"><div class="modal-body"><div class="mb20"><?php echo __("Let us know if this mobile number belongs to you. Enter the code in the SMS");?>
</div><div class="row"><div class="col-md-6"><div class="form-group"><input name="token" type="text" class="form-control" placeholder="######" required autofocus><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><span class="help-block"><span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php"><?php echo __("Resend SMS");?>
</span></span><?php }?></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="col-md-6"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><label class="mb0"><?php echo __("We sent your code to");?>
</label> <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];
}?></div></div></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="activation-phone-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Phone Number");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_phone_reset.php"><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><div class="form-group"><label><?php echo __("Current Phone");?>
</label><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
</p></div><?php }?><div class="form-group"><label for="phone"><?php echo __("New Phone");?>
</label><input name="phone" id="phone" type="text" class="form-control" required autofocus><span class="help-block"><?php echo __("For example");?>
: +12344567890</span></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Phone Activation --><!-- x-uploader -->

    <?php echo '<script'; ?>
 id="x-uploader" type="text/template">

        <form class="x-uploader" action="{{url}}" method="post" enctype="multipart/form-data">

            {{#multiple}}

            <input name="file[]" type="file" multiple="multiple">

            {{/multiple}}

            {{^multiple}}

            <input name="file" type="file">

            {{/multiple}}

            <input type="hidden" name="secret" value="{{secret}}">

        </form>

    <?php echo '</script'; ?>
>

    <!-- x-uploader --><!-- Noty Notification --><?php if ($_smarty_tpl->tpl_vars['system']->value['noty_notifications_enabled']) {
echo '<script'; ?>
 id="noty-notification" type="text/template"><div class="data-container small"><img class="data-avatar" src="{{image}}"><div class="data-content">{{message}}</div></div><?php echo '</script'; ?>
><?php }?><!-- Noty Notification --><!-- Adblock Detector --><?php if ($_smarty_tpl->tpl_vars['system']->value['adblock_detector_enabled']) {
echo '<script'; ?>
 id="adblock-detector" type="text/template"><div class="adblock-detector"><?php echo __("Our website is made possible by displaying online advertisements to our visitors");?>
<br><?php echo __("Please consider supporting us by disabling your ad blocker");?>
.</div><?php echo '</script'; ?>
><?php }?><!-- Adblock Detector --><!-- Keyboard Shortcuts --><?php echo '<script'; ?>
 id="keyboard-shortcuts" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><i class="fa fa-keyboard mr5"></i><?php echo __("Keyboard Shortcuts");?>
</h5></div><div class="modal-body text-readable"><div class="mb10"><kbd>J</kbd> <?php echo __("Scroll to the next post");?>
</div><div><kbd>K</kbd> <?php echo __("Scroll to the previous post");?>
</div></div><?php echo '</script'; ?>
><!-- Keyboard Shortcuts --><!-- Emoji Menu --><?php echo '<script'; ?>
 id="emoji-menu" type="text/template"><div class="emoji-menu"><div class="tab-content"><div class="tab-pane active" id="tab-emojis-{{id}}"><div class="js_scroller" data-slimScroll-height="180"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->get_emojis(), 'emoji');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['emoji']->value) {
?><div class="item"><i data-emoji="<?php echo $_smarty_tpl->tpl_vars['emoji']->value['pattern'];?>
" class="js_emoji twa twa-2x twa-<?php echo $_smarty_tpl->tpl_vars['emoji']->value['class'];?>
"></i></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="tab-pane" id="tab-stickers-{{id}}"><div class="js_scroller" data-slimScroll-height="180"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->get_stickers(), 'sticker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->value) {
?><div class="item"><img data-emoji=":STK-<?php echo $_smarty_tpl->tpl_vars['sticker']->value['sticker_id'];?>
:" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['sticker']->value['image'];?>
" class="js_emoji"></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><ul class="nav nav-tabs"><li class="active"><a href="#tab-emojis-{{id}}" data-toggle="tab"><i class="fa fa-smile fa-fw"></i> <?php echo __("Emojis");?>
</a></li><li><a href="#tab-stickers-{{id}}" data-toggle="tab"><i class="fa fa-hand-peace fa-fw"></i> <?php echo __("Stickers");?>
</a></li></ul></div><?php echo '</script'; ?>
><!-- Emoji Menu --><!-- Chat --><?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?><!-- Desktop Chat Sidebar --><div class="chat-sidebar js_chat-widget-master <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>disabled<?php }?>"><div class="chat-sidebar-header"><div class="pull-right flip"><a class="js_chat-new mr5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new"><i class="fa fa-edit"></i></a><i class="fa fa-cog" data-toggle="dropdown"></i><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking"><?php echo __("Manage Blocking");?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy"><?php echo __("Privacy Settings");?>
</a></li><li class="divider"></li><li><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?><a href="#" class="js_chat-toggle" data-status="on"><?php echo __("Turn Off Chat");?>
</a><?php } else { ?><a href="#" class="js_chat-toggle" data-status="off"><?php echo __("Turn On Chat");?>
</a><?php }?></li></ul></div><?php echo __("Chat");?>
 (<span class="js_chat-online-users"><?php echo $_smarty_tpl->tpl_vars['online_friends_count']->value;?>
</span>)</div><div class="chat-sidebar-content"><div class="js_scroller" data-slimScroll-height="100%"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?><li class="feeds-item"><div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><img class="data-avatar rounded" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
"><div class="data-content"><div class="pull-right flip"><i class="fa fa-circle online"></i></div><div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><div class="chat-sidebar-footer"><input type="text" class="form-control js_chat-search" placeholder='<?php echo __("Search");?>
'></div></div><!-- Desktop Chat Sidebar --><!-- Mobile Chat Sidebar --><div class="chat-widget js_chat-widget-master"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?><div class="chat-widget-head"><div class="chat-head-title"><i class="fa fa-circle"></i><?php echo __("Chat");?>
 (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)</div></div><div class="chat-widget-content"><div class="js_scroller"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?><li class="feeds-item"><div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
"><div class="data-content"><div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><div class="x-form chat-form"><div class="chat-form-message"><input type="text" class="form-control" placeholder='<?php echo __("Search");?>
'></div></div></div><?php } else { ?><div class="chat-widget-content"><div class="js_scroller"></div></div><div class="chat-widget-head"><div class="chat-head-title"><i class="fa fa-user-secret"></i><?php echo __("Offline");?>
</div></div><?php }?></div><!-- Mobile Chat Sidebar --><?php }
echo '<script'; ?>
 id="chat-box-new" type="text/template"><div class="chat-widget chat-box opened fresh"><!-- head --><div class="chat-widget-head"><?php echo __("New Message");?>
<!-- buttons--><div class="pull-right flip"><i class="fa fa-times-circle js_chat-box-close"></i></div><!-- buttons--></div><!-- head --><!-- content --><div class="chat-widget-content"><div class="chat-conversations js_scroller"></div><div class="chat-to clearfix js_autocomplete-tags"><div class="to"><?php echo __("To");?>
:</div><ul class="tags"></ul><div class="typeahead"><input type="text" size="1" autofocus></div></div><div class="chat-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></li></ul></div><div class="x-form chat-form x-visible"><div class="chat-form-message"><textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea></div><ul class="x-form-tools clearfix"><li class="x-form-tools-attach"><i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i></li><li class="x-form-tools-emoji js_emoji-menu-toggle"><i class="far fa-smile-wink fa-lg fa-fw"></i></li></ul></div></div><!-- content --></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-box" type="text/template"><div class="chat-widget chat-box opened" id="{{chat_key_value}}"{{#user_id}}data-uid="{{user_id}}"{{/user_id}}{{#conversation_id}}data-cid="{{conversation_id}}"{{/conversation_id}}><!-- head --><div class="chat-widget-head js_chat-color-me">{{^multiple}}<i class="fa fa-user-secret mr5 js_chat-box-status"></i><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/{{link}}" title="{{name_list}}">{{name}}</a>{{/multiple}}{{#multiple}}<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/{{link}}" title="{{name_list}}">{{name}}</a>{{/multiple}}<!-- label --><div class="chat-head-label"><span class="label label-danger js_chat-box-label"></span></div><!-- label --><!-- buttons--><div class="pull-right flip"><i class="fa fa-times-circle js_chat-box-close"></i></div><!-- buttons--></div><!-- head --><!-- content --><div class="chat-widget-content"><div class="chat-conversations js_scroller"><ul></ul></div><div class="chat-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></li></ul></div><div class="x-form chat-form"><div class="chat-form-message"><textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea></div><ul class="x-form-tools clearfix"><li class="x-form-tools-attach"><i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i></li><li class="x-form-tools-emoji js_emoji-menu-toggle"><i class="far fa-smile-wink fa-lg fa-fw"></i></li><li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me {{^conversation_id}}x-hidden{{/conversation_id}}"><i class="fa fa-circle fa-lg fa-fw"></i></li></ul></div></div><!-- content --></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-message" type="text/template"><li><div class="conversation clearfix right" id="{{id}}"><div class="conversation-body"><div class="text js_chat-color-me" {{#color}}style="background-color: {{color}}"{{/color}}>{{{message}}}{{#image}}<span class="text-link js_lightbox-nodata {{#message}}mt5{{/message}}" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}"><img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}"></span>{{/image}}</div><div class="time js_moment" data-time="{{time}}">{{time}}</div></div></div></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-voice-calling" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-phone-volume mr5"></i><?php echo __("Calling");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_transfer"><div class="modal-body"><?php echo __("Please wait for answer");?>
</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-colors-menu" type="text/template">

        <div class="chat-colors-menu">

            <div class="js_scroller" data-slimScroll-height="180">

                <div class="item js_chat-color" data-color="#597ba5" style="color: #597ba5;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#0ba05d" style="color: #0ba05d;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#ed9e6a" style="color: #ed9e6a;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#a085e2" style="color: #a085e2;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#01a5a5" style="color: #01a5a5;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#2b87ce" style="color: #2b87ce;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#ff72d2" style="color: #ff72d2;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#c9605e" style="color: #c9605e;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#056bba" style="color: #056bba;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#fc9cde" style="color: #fc9cde;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#70a0e0" style="color: #70a0e0;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#f2812b" style="color: #f2812b;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#8ec96c" style="color: #8ec96c;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#f33d4c" style="color: #f33d4c;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#aa2294" style="color: #aa2294;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#0e71ea" style="color: #0e71ea;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#b582af" style="color: #b582af;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#a1ce79" style="color: #a1ce79;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#56c4c5" style="color: #56c4c5;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#f9a722" style="color: #f9a722;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#f9c270" style="color: #f9c270;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#609b41" style="color: #609b41;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#51bcbc" style="color: #51bcbc;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#008484" style="color: #008484;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

                <div class="item js_chat-color" data-color="#5462a5" style="color: #5462a5;">

                    <i class="fa fa-circle fa-2x"></i>

                </div>

            </div>

        </div>

    <?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_chat-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><!-- Chat --><!-- DayTime Messages --><?php if ($_smarty_tpl->tpl_vars['page']->value == "index") {
echo '<script'; ?>
 id="message-morning" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_morning.png"><strong><?php echo __("Good Morning");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="message-afternoon" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_afternoon.png"><strong><?php echo __("Good Afternoon");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="message-evening" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_night.png"><strong><?php echo __("Good Evening");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php }?><!-- DayTime Messages --><?php if ($_smarty_tpl->tpl_vars['page']->value == "index" || $_smarty_tpl->tpl_vars['page']->value == "profile" || $_smarty_tpl->tpl_vars['page']->value == "page" || $_smarty_tpl->tpl_vars['page']->value == "group" || $_smarty_tpl->tpl_vars['page']->value == "event" || $_smarty_tpl->tpl_vars['page']->value == "post" || $_smarty_tpl->tpl_vars['page']->value == "photo" || $_smarty_tpl->tpl_vars['page']->value == "market" || $_smarty_tpl->tpl_vars['page']->value == "blogs" || $_smarty_tpl->tpl_vars['page']->value == "directory") {?><!-- Publisher --><?php echo '<script'; ?>
 id="publisher-attachments-image-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close {{#mini}}js_publisher-mini-attachment-image-remover{{/mini}}{{^mini}}js_publisher-attachment-image-remover{{/mini}}" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="publisher-attachments-video-item" type="text/template"><li class="item deletable" data-src="{{src}}"><div class="name">{{name}}</div><button type="button" class="close js_publisher-mini-attachment-video-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-media" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="embed-responsive embed-responsive-16by9">{{{html}}}</div><div class="post-media-meta"><a class="title mb5" href="{{url}}" target="_blank">{{title}}</a><div class="text mb5">{{text}}</div><div class="source">{{provider}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-photo" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="post-media-image"><div style="background-image:url('{{url}}');"></div></div><div class="post-media-meta"><div class="source">{{provider}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-link" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media">{{#thumbnail}}<div class="post-media-image"><div style="background-image:url('{{thumbnail}}');"></div></div>{{/thumbnail}}<div class="post-media-meta"><a class="title mb5" href="{{url}}" target="_blank">{{title}}</a><div class="text mb5">{{text}}</div><div class="source">{{host}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="poll-option" type="text/template"><div class="publisher-meta" data-meta="poll"><i class="fa fa-plus fa-fw"></i><input type="text" placeholder='<?php echo __("Add an option");?>
...'></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="pubisher-gif" type="text/template"><div class="publisher-scraper-remover js_publisher-gif-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="post-media-image"><div style="background-image:url('{{src}}');"></div></div></div><?php echo '</script'; ?>
><!-- Publisher --><!-- Comments --><?php echo '<script'; ?>
 id="comment-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_comment-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><!-- Comments --><!-- Edit (Posts|Comments) --><?php echo '<script'; ?>
 id="edit-post" type="text/template"><div class="post-edit"><div class="x-form comment-form"><textarea rows="2" class="js_autosize js_mention js_update-post">{{text}}</textarea><ul class="x-form-tools clearfix"><li class="x-form-tools-post js_update-post"><i class="far fa-paper-plane fa-lg fa-fw"></i></li><li class="x-form-tools-emoji js_emoji-menu-toggle"><i class="far fa-smile-wink fa-lg fa-fw"></i></li></ul></div><small class="text-link js_unedit-post"><?php echo __("Cancel");?>
</small></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="edit-comment" type="text/template"><div class="comment-edit"><div class="x-form comment-form"><textarea rows="1" class="js_autosize js_mention js_update-comment">{{text}}</textarea><ul class="x-form-tools clearfix"><li class="x-form-tools-post js_update-comment"><i class="far fa-paper-plane fa-lg fa-fw"></i></li><li class="x-form-tools-attach"><i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i></li><li class="x-form-tools-emoji js_emoji-menu-toggle"><i class="far fa-smile-wink fa-lg fa-fw"></i></li></ul></div><div class="comment-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></li></ul></div><small class="text-link js_unedit-comment"><?php echo __("Cancel");?>
</small></div><?php echo '</script'; ?>
><!-- Edit (Posts|Comments) --><!-- Hidden (Posts|Authors) --><?php echo '<script'; ?>
 id="hidden-post" type="text/template"><div class="post flagged" data-id="{{id}}"><div class="text-semibold mb5"><?php echo __("Post Hidden");?>
</div><?php echo __("This post will no longer appear to you");?>
 <span class="text-link js_unhide-post"><?php echo __("Undo");?>
</span></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="hidden-author" type="text/template"><div class="post flagged" data-id="{{id}}"><?php echo __("You won't see posts from");?>
 {{name}} <?php echo __("in News Feed anymore");?>
. <span class="text-link js_unhide-author" data-author-id="{{uid}}" data-author-name="{{name}}"><?php echo __("Undo");?>
</span></div><?php echo '</script'; ?>
><!-- Hidden (Posts|Authors) --><?php }?><!-- Pages & Groups & Events --><?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {
echo '<script'; ?>
 id="create-page" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Page");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Page");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="username"><?php echo __("Web Address");?>
</label><div class="input-group"><span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/</span><input type="text" class="form-control" name="username" id="username"></div></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['page']->value == "groups") {
echo '<script'; ?>
 id="create-group" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Group");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=group&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Group");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="username"><?php echo __("Web Address");?>
</label><div class="input-group"><span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span><input type="text" class="form-control" name="username" id="username"></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Group");?>
</b><br><?php echo __("Anyone can see the group, its members and their posts");?>
.</div></div>"><?php echo __("Public Group");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Group");?>
</b><br><?php echo __("Only members can see posts");?>
.</div></div>"><?php echo __("Closed Group");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Group");?>
</b><br><?php echo __("Only members can find the group and see posts");?>
.</div></div>"><?php echo __("Secret Group");?>
</option></select></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, true);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['page']->value == "events") {
echo '<script'; ?>
 id="create-event" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Event");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Event");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="location"><?php echo __("Location");?>
</label><input type="text" class="form-control js_geocomplete" name="location" id="location"></div><div class="form-group"><label><?php echo __("Start Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="start_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label><?php echo __("End Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="end_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Event");?>
</b><br><?php echo __("Anyone can see the event, its users and posts");?>
.</div></div>"><?php echo __("Public Event");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Event");?>
</b><br><?php echo __("Only event users can see posts");?>
.</div></div>"><?php echo __("Closed Event");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Event");?>
</b><br><?php echo __("Only invited users and event users can find the event");?>
.</div></div>"><?php echo __("Secret Event");?>
</option></select></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, true);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php }?><!-- Pages & Groups & Events --><?php if ($_smarty_tpl->tpl_vars['page']->value == "mytrips") {
echo '<script'; ?>
 id="create-trip" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Trip");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Trip");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="location"><?php echo __("Location");?>
</label><input type="text" class="form-control js_geocomplete" name="location" id="location"></div><div class="form-group"><label><?php echo __("Start Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="start_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label><?php echo __("End Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="end_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Trip");?>
</b><br><?php echo __("Anyone can see the event, its users and posts");?>
.</div></div>"><?php echo __("Public Trip");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Trip");?>
</b><br><?php echo __("Only event users can see posts");?>
.</div></div>"><?php echo __("Closed Trip");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Trip");?>
</b><br><?php echo __("Only invited users and event users can find the event");?>
.</div></div>"><?php echo __("Secret Trip");?>
</option></select></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, true);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php }?><!-- Pages & Groups & Events --><!-- Wallet --><?php if ($_smarty_tpl->tpl_vars['page']->value == "ads") {
echo '<script'; ?>
 id="wallet-transfer" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-gift mr5"></i><?php echo __("Send Money");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_transfer"><div class="modal-body"><div class="form-group"><label><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><div class="form-group"><label for="send_to"><?php echo __("Send To");?>
</label><div class="relative js_autocomplete"><input type="text" class="form-control" placeholder="<?php echo __("Search for user name or email");?>
" name="send_to" id="send_to" autocomplete="off"><input type="hidden" name="send_to_id"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Send");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="wallet-replenish" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_replenish"><div class="modal-body"><div class="form-group"><label for="amount"><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="wallet-withdraw-affiliates" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-exchange-alt mr5"></i><?php echo __("Withdraw Affiliates Credit");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_withdraw_affiliates"><div class="modal-body"><div class="form-group"><label for="amount"><?php echo __("Your Affiliates Credit");?>
</label><div class="text-lg"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_balance'],2);?>
</div></div><div class="form-group"><label for="amount"><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="wallet-withdraw-points" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-piggy-bank mr5"></i><?php echo __("Withdraw Points Credit");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_withdraw_points"><div class="modal-body"><div class="form-group"><label for="amount"><?php echo __("Your Points Credit");?>
</label><div class="text-lg"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format(((1/$_smarty_tpl->tpl_vars['system']->value['points_per_currency'])*$_smarty_tpl->tpl_vars['user']->value->_data['user_points']),2);?>
</div></div><div class="form-group"><label for="amount"><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php }?><!-- Wallet --><!-- Crop Profile Picture --><?php if ($_smarty_tpl->tpl_vars['page']->value == "started" || $_smarty_tpl->tpl_vars['page']->value == "profile" || $_smarty_tpl->tpl_vars['page']->value == "page" || $_smarty_tpl->tpl_vars['page']->value == "group") {
echo '<script'; ?>
 id="crop-profile-picture" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-crop-alt mr5"></i><?php echo __("Crop Picture");?>
</h5></div><div class="modal-body text-center"><img id="cropped-profile-picture" src="{{image}}" style="max-width: 100%;"></div><div class="modal-footer"><button type="button" class="btn btn-primary js_crop-picture" data-handle="{{handle}}" data-id="{{id}}"><?php echo __("Save");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div><?php echo '</script'; ?>
><?php }?><!-- Crop Profile Picture --><!-- Verification Documents --><?php if ($_smarty_tpl->tpl_vars['page']->value == "admin") {
echo '<script'; ?>
 id="verification-documents" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-paperclip mr5"></i><?php echo __("Verification Documents");?>
</h5></div><form class="form-horizontal"><div class="modal-body"><div class="form-group"><label class="col-sm-3 control-label"><?php echo __("Documents");?>
</label><div class="col-sm-9"><div class="row"><div class="col-sm-6"><div class="panel-sub-title mb10"><i class="fas fa-camera-retro mr10"></i><?php echo __("Personal Photo");?>
</div><a target="_blank" href="{{photo}}"><img class="img-responsive" src="{{photo}}"></a></div><div class="col-sm-6"><div class="panel-sub-title mb10"><i class="fas fa-passport mr10"></i><?php echo __("Passport or National ID");?>
</div><a target="_blank" href="{{passport}}"><img class="img-responsive" src="{{passport}}"></a></div></div></div></div><div class="form-group"><label class="col-sm-3 control-label"><?php echo __("Message");?>
</label><div class="col-sm-9"><p class="pt5 pb0">{{message}}</p></div></div></div><div class="modal-footer"><button class="btn btn-success js_admin-verify" data-handle="{{handle}}" data-id="{{node-id}}"><i class="fa fa-check mr5"></i><?php echo __("Verify");?>
</button><button class="btn btn-danger js_admin-unverify" data-id="{{request-id}}"><i class="fa fa-times mr5"></i><?php echo __("Decline");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php }?><!-- Verification Documents --><?php }
}
}
