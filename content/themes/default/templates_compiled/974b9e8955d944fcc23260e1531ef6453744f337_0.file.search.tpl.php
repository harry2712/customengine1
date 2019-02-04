<?php
/* Smarty version 3.1.33, created on 2019-01-29 18:20:23
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c509967a33783_70128717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '974b9e8955d944fcc23260e1531ef6453744f337' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/search.tpl',
      1 => 1535437346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 2,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c509967a33783_70128717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- side panel -->
        <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- side panel -->

         <div class="col-xs-12 offcanvas-mainbar">
            <div class="row">
                <!-- left panel -->
                <div class="col-sm-8">
                    <!-- search form -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="mt5">
                                <i class="fa fa-search pr5"></i>
                                <strong><?php echo __("Search");?>
</strong>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal js_search-form">
                                <div class="form-group">
                                    <div class="col-sm-10 mb5">
                                        <input type="text" name="query" class="form-control" placeholder='<?php echo __("Search for people, pages and #hashtags");?>
' required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" name="submit" class="btn btn-primary"><?php echo __("Search");?>
</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- search form -->

                    <?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
                        <!-- search results -->
                        <div id="search-full-results" class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-rss pr5 panel-icon"></i>
                                    <strong><?php echo __("Search Results");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#posts" data-toggle="tab">
                                            <i class="fa fa-newspaper pr5 panel-icon"></i>
                                            <strong><?php echo __("Posts");?>
</strong>
                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                                        <li>
                                            <a href="#articles" data-toggle="tab">
                                                <i class="fab fa-blogger-b pr5 panel-icon"></i>
                                                <strong><?php echo __("Articles");?>
</strong>
                                            </a>
                                        </li>
                                    <?php }?>
                                    <li>
                                        <a href="#users" data-toggle="tab">
                                            <i class="fa fa-user pr5 panel-icon"></i>
                                            <strong><?php echo __("Users");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#pages" data-toggle="tab">
                                            <i class="fa fa-flag pr5 panel-icon"></i>
                                            <strong><?php echo __("Pages");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#groups" data-toggle="tab">
                                            <i class="fa fa-users pr5 panel-icon"></i>
                                            <strong><?php echo __("Groups");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#events" data-toggle="tab">
                                            <i class="fa fa-calendar pr5 panel-icon"></i>
                                            <strong><?php echo __("Events");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="posts">
                                    <?php if (count($_smarty_tpl->tpl_vars['results']->value['posts']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['posts'], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php } else { ?>
                                    <div class="text-center x-muted mtb10">
                                        <i class="fa fa-rss fa-4x"></i>
                                        <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                    </div>
                                    <?php }?>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                                    <div class="tab-pane" id="articles">
                                        <?php if (count($_smarty_tpl->tpl_vars['results']->value['articles']) > 0) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['articles'], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                        <?php } else { ?>
                                        <div class="text-center x-muted mtb10">
                                            <i class="fa fa-rss fa-4x"></i>
                                            <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                        </div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <div class="tab-pane" id="users">
                                    <?php if (count($_smarty_tpl->tpl_vars['results']->value['users']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['users'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php } else { ?>
                                    <div class="text-center x-muted mtb10">
                                        <i class="fa fa-rss fa-4x"></i>
                                        <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="tab-pane" id="pages">
                                    <?php if (count($_smarty_tpl->tpl_vars['results']->value['pages']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['pages'], '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php } else { ?>
                                    <div class="text-center x-muted mtb10">
                                        <i class="fa fa-rss fa-4x"></i>
                                        <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="tab-pane" id="groups">
                                    <?php if (count($_smarty_tpl->tpl_vars['results']->value['groups']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['groups'], '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php } else { ?>
                                    <div class="text-center x-muted mtb10">
                                        <i class="fa fa-rss fa-4x"></i>
                                        <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="tab-pane" id="events">
                                    <?php if (count($_smarty_tpl->tpl_vars['results']->value['events']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['events'], '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php } else { ?>
                                    <div class="text-center x-muted mtb10">
                                        <i class="fa fa-rss fa-4x"></i>
                                        <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <!-- search results -->
                    <?php }?>
                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-sm-4">
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <!-- right panel -->
            </div>
        </div>
        
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
