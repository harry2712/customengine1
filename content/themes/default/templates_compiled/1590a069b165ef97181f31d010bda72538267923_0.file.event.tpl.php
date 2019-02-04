<?php
/* Smarty version 3.1.33, created on 2019-01-31 17:16:29
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c532d6d04b175_27893440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1590a069b165ef97181f31d010bda72538267923' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/event.tpl',
      1 => 1542743498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_user.tpl' => 2,
    'file:__feeds_photo.tpl' => 2,
    'file:_publisher.tpl' => 1,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c532d6d04b175_27893440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/adminuser/public_html/eean/judefly.com/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
    <div class="row">

        <!-- left panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="hidden-sm col-md-2 offcanvas-sidebar mt20">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>col-md-10 offcanvas-mainbar<?php }?>">
            <!-- profile-header -->
            <div class="profile-header no-avatar">
                <!-- profile-cover -->
                <div class="profile-cover-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['event']->value['event_cover_id']) {?>
                        <img class="js_lightbox" style="top: <?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_position'];?>
" data-init-position="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
">
                    <?php }?>
                    
                    <!-- buttons -->
                    <?php if ($_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                        <div class="profile-cover-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="cover-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"></i>
                        </div>
                        <div class="profile-cover-change-loader">
                            <div class="progress x-progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['event']->value['event_cover']) {?>x-hidden<?php }?>">
                            <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                            <i class="fa fa-crop-alt js_init-position-picture" data-handle="event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"></i>
                        </div>
                        <div class="profile-cover-position-loader">
                            <i class="fa fa-arrows-alt mr5"></i><?php echo __("Drag to reposition cover");?>

                        </div>
                        <div class="profile-cover-position-buttons">
                            <button class="btn btn-primary btn-sm js_save-position-picture"><?php echo __("Save");?>
</button>
                            <button class="btn btn-default btn-sm js_cancel-position-picture"><?php echo __("Cancel");?>
</button>
                        </div>
                        <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['event']->value['event_cover']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-cover" data-handle="cover-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"></i>
                        </div>
                    <?php }?>
                    <!-- buttons -->
                </div>
                <!-- profile-cover -->

                <!-- profile-date -->
                <div class="profle-date-wrapper">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b");?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%e");?>

                </div>
                <!-- profile-date -->

                <!-- profile-name -->
                <div class="profile-name-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Public Event");?>
' class="fa fa-globe fa-fw privacy-badge"></i>
                    <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Closed Event");?>
' class="fa fa-unlock-alt fa-fw privacy-badge"></i>
                    <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Secret Event");?>
' class="fa fa-lock fa-fw privacy-badge"></i>
                    <?php }?>
                </div>
                <div class="profle-meta-wrapper">
                    <i class="fa fa-clock"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%I:%M %p");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%b %e %I:%M %p");?>

                </div>
                <!-- profile-name -->

                <!-- profile-buttons -->
                <div class="profile-buttons-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public" || $_smarty_tpl->tpl_vars['event']->value['i_joined'] || $_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']['is_going']) {?>
                            <button type="button" class="btn btn-default js_ungo-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                <i class="fa fa-check"></i> <?php echo __("Going");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-success js_go-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                <i class="fa fa-calendar-check"></i> <?php echo __("Going");?>

                            </button>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']['is_interested']) {?>
                            <button type="button" class="btn btn-default js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                <i class="fa fa-check"></i> <?php echo __("Interested");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                <i class="fa fa-star"></i> <?php echo __("Interested");?>

                            </button>
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings" class="btn btn-default">
                            <i class="fa fa-cog"></i> <?php echo __("Settings");?>

                        </a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-default js_report" data-handle="event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                            <i class="fa fa-flag"></i> <?php echo __("Report");?>

                        </a>
                    <?php }?>
                </div>
                <!-- profile-buttons -->

                <!-- profile-tabs -->
                <div class="profile-tabs-wrapper">
                    <ul class="nav">
                        <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public" || $_smarty_tpl->tpl_vars['event']->value['i_joined'] || $_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                    <?php echo __("Timeline");?>

                                </a>
                            </li>
                            <li class="middle-tabs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos">
                                    <?php echo __("Photos");?>

                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo __("More");?>

                                    <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="middle-tabs-alt">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going"><?php echo __("Going");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/interested"><?php echo __("Interested");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invited"><?php echo __("Invited");?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']) {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites"><?php echo __("Invite Friends");?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                    <?php echo __("About");?>

                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <!-- profile-tabs -->
            </div>
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- profile-buttons alt -->
                <div class="col-sm-12">
                    <div class="panel panel-default profile-buttons-wrapper-alt">
                        <div class="panel-body">
                            <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public" || $_smarty_tpl->tpl_vars['event']->value['i_joined'] || $_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']['is_going']) {?>
                                    <button type="button" class="btn btn-default js_ungo-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                        <i class="fa fa-check"></i> <?php echo __("Going");?>

                                    </button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-success js_go-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                        <i class="fa fa-calendar-check"></i> <?php echo __("Going");?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']['is_interested']) {?>
                                    <button type="button" class="btn btn-default js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                        <i class="fa fa-check"></i> <?php echo __("Interested");?>

                                    </button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                        <i class="fa fa-star"></i> <?php echo __("Interested");?>

                                    </button>
                                <?php }?>
                            <?php }?>

                            <div class="pull-right flip">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings" class="btn btn-default">
                                        <i class="fa fa-cog"></i> <?php echo __("Settings");?>

                                    </a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-default js_report" data-handle="event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                        <i class="fa fa-flag"></i> <?php echo __("Report");?>

                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile-buttons alt -->

                <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <!-- right panel -->
                    <div class="col-sm-4 col-md-push-8">
                        <!-- about -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php if (!is_empty($_smarty_tpl->tpl_vars['event']->value['event_description'])) {?>
                                    <div class="about-bio">
                                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_description'];?>

                                    </div>
                                <?php }?>
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-item">
                                            <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>
                                                <i class="fa fa-globe fa-fw fa-lg"></i>
                                                <?php echo __("Public Event");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>
                                                <i class="fa fa-unlock-alt fa-fw fa-lg"></i>
                                                <?php echo __("Closed Event");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>
                                                <i class="fa fa-lock fa-fw fa-lg"></i>
                                                <?php echo __("Secret Event");?>

                                            <?php }?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-clock fa-fw fa-lg"></i>
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%B %e");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%B %e");?>
<br>
                                            <small class="text-muted"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b %e %I:%M %p");?>
 <?php echo __("to");?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%b %e %I:%M %p");?>
</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-user fa-fw fa-lg"></i>
                                            <?php echo __("Hosted By");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['user_lastname'];?>
</a>
                                        </div>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['event_location']) {?>
                                        <!-- Event Location -->
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>

                                            </div>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                                        <div style="margin-left: -15px; margin-right: -15px;">
                                            <iframe width="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
&amp;q=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>
&amp;language=en"></iframe>
                                        </div>
                                        <?php }?>
                                        <!-- Event Location -->
                                    <?php }?>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-calendar-check fa-fw fa-lg"></i>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_going'];?>
 <?php echo __("Going");?>
</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-star fa-fw fa-lg"></i>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/interested"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-envelope-open fa-fw fa-lg"></i>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invited"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_invited'];?>
 <?php echo __("Invited");?>
</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- custom fields -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-info-circle fa-fw text-info"></i> <?php echo __("Info");?>

                                </div>
                                <div class="panel-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['basic'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- custom fields -->

                        <!-- invite friends -->
                        <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined'] && $_smarty_tpl->tpl_vars['event']->value['invites']) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading light no_border">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong class="text-muted"><?php echo __("Invite Friends");?>
</strong>
                                </div>
                                <div class="panel-body ptb5 plr5">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['invites'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- invite friends -->

                        <!-- photos -->
                        <?php if ($_smarty_tpl->tpl_vars['event']->value['photos']) {?>
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- photos -->
                    </div>
                    <!-- right panel -->

                    <!-- left panel -->
                    <div class="col-sm-8 col-md-pull-4">
                        <!-- publisher -->
                        <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"event",'_id'=>$_smarty_tpl->tpl_vars['event']->value['event_id']), 0, false);
?>
                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value,'_get'=>"posts_event"), 0, false);
?>
                        <?php }?>
                        <!-- pinned post -->

                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_event",'_id'=>$_smarty_tpl->tpl_vars['event']->value['event_id']), 0, false);
?>
                        <!-- posts -->
                    </div>
                    <!-- left panel -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
                    <!-- photos -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-photos">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-file-image pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos">
                                            <strong class="pr5"><?php echo __("Photos");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['event']->value['photos']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['event']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have photos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-file-image pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['event']->value['albums']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['albums'], 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['event']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have albums");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- back to albums -->
                                <div class="pull-right flip">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums" class="btn btn-default btn-sm">
                                        <i class="fa fa-arrow-circle-left"></i> <?php echo __("Back to Albums");?>

                                    </a>
                                </div>
                                <!-- back to albums -->
                                
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-file-image pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                            <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "going" || $_smarty_tpl->tpl_vars['view']->value == "interested" || $_smarty_tpl->tpl_vars['view']->value == "invited" || $_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                    <!-- members -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Members");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "going") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going">
                                            <strong class="pr5"><?php echo __("Going");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_going'];?>
</span>
                                        </a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "interested") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/interested">
                                            <strong class="pr5"><?php echo __("Interested");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_interested'];?>
</span>
                                        </a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "invited") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invited">
                                            <strong class="pr5"><?php echo __("Invited");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_invited'];?>
</span>
                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites">
                                                <strong class="pr5"><?php echo __("Invites");?>
</strong>
                                            </a>
                                        </li>
                                    <?php }?>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['total_members'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['members'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>

                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['total_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="event_<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                                            <?php echo __("No friends to invite");?>

                                        <?php } else { ?>
                                            <?php echo __("No people available");?>

                                        <?php }?>
                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- members -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings"><i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Event Settings");?>
</a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings/delete"><i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Event");?>
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <!-- edit -->
                        <div class="panel panel-default">
                            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-cog pr5 panel-icon"></i>
                                    <strong><?php echo __("Event Settings");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                        <div class="form-group">
                                            <label for="title"><?php echo __("Name Your Event");?>
</label>
                                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <label for="location"><?php echo __("Location");?>
</label>
                                            <input type="text" class="form-control" name="location" id="location" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo __("Start Date");?>
</label>
                                            <div class='input-group date js_datetimepicker'>
                                                <input type='text' class="form-control" name="start_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['event']->value['event_start_date']);?>
" />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo __("End Date");?>
</label>
                                            <div class='input-group date js_datetimepicker'>
                                                <input type='text' class="form-control" name="end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['event']->value['event_end_date']);?>
" />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="privacy"><?php echo __("Select Privacy");?>
</label>
                                            <select class="form-control selectpicker" name="privacy">
                                                <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>selected<?php }?> value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Event");?>
</b><br><?php echo __("Anyone can see the event, its users and posts");?>
.
                                                </div></div>"><?php echo __("Public Event");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>selected<?php }?> value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Event");?>
</b><br><?php echo __("Only event users can see posts");?>
.
                                                </div></div>"><?php echo __("Closed Event");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>selected<?php }?> value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Event");?>
</b><br><?php echo __("Only invited users and event users can find the event");?>
.
                                                </div></div>"><?php echo __("Secret Event");?>
</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="category"><?php echo __("Category");?>
</label>
                                            <select class="form-control" name="category">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"><?php echo __("About");?>
</label>
                                            <textarea class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_description'];?>
</textarea>
                                        </div>
                                        <!-- custom fields -->
                                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>true), 0, false);
?>
                                        <?php }?>
                                        <!-- custom fields -->
                                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-trash pr5 panel-icon"></i>
                                    <strong><?php echo __("Delete Event");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle fa-lg mr10"></i><?php echo __("Once you delete your event you will no longer can access it again");?>

                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger js_delete-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                            <i class="fa fa-trash-alt"></i>
                                            <?php echo __("Delete Event");?>

                                        </button>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <!-- edit -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "about") {?>
                    <!-- info -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon">
                                <strong><?php echo __("About");?>
</strong>
                            </div>
                            <div class="panel-body">
                                <?php echo __("This event is private and you need to be invited to see its info, members and posts");?>

                            </div>
                        </div>
                    </div>
                    <!-- info -->
                <?php }?>
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
