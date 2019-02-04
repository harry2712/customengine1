<?php
/* Smarty version 3.1.33, created on 2019-01-31 14:25:03
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53053fe4ea28_71572811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '306339a8fc889090e3115b4e0e72ff7150acc1d7' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/events.tpl',
      1 => 1548944701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c53053fe4ea28_71572811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- page content -->

<div class="container mt20 offcanvas">

    <div class="row">



        <!-- left panel -->

        <div class="col-sm-4 col-md-2 offcanvas-sidebar">

            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

        <!-- left panel -->



        <!-- right panel -->

        <div class="col-sm-8 col-md-10 offcanvas-mainbar">

            

            <!-- tabs -->

            <div class="box-tabs-wrapper clearfix">

                <ul class="nav pull-left flip">

                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events"><?php echo __("Discover");?>
</a>

                    </li>

                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "going") {?>class="active"<?php }?>>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/going"><?php echo __("Going");?>
</a>

                    </li>

                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "interested") {?>class="active"<?php }?>>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/interested"><?php echo __("Interested");?>
</a>

                    </li>

                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "invited") {?>class="active"<?php }?>>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/invited"><?php echo __("Invited");?>
</a>

                    </li>

                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "manage") {?>class="active"<?php }?>>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/manage"><?php echo __("My Events");?>
</a>

                    </li>

                </ul>

                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>

                    <div class="mt10 pull-right flip">

                        <button class="btn btn-success btn-sm" data-toggle="modal" data-url="#create-event">

                            <i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs"><?php echo __("Create Event");?>
</span>

                        </button>

                    </div>

                <?php }?>

            </div>

            <!-- tabs -->

            

            <!-- content -->

            <div>

                <?php if ($_smarty_tpl->tpl_vars['events']->value) {?>

                    <ul class="row">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </ul>



                    <!-- see-more -->

                    <?php if (count($_smarty_tpl->tpl_vars['events']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>

                        <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
">

                            <span><?php echo __("See More");?>
</span>

                            <div class="loader loader_small x-hidden"></div>

                        </div>

                    <?php }?>

                    <!-- see-more -->

                <?php } else { ?>

                    <p class="text-center text-muted">

                        <?php echo __("No events to show");?>


                    </p>

                <?php }?>

            </div>

            <!-- content -->



        </div>

        <!-- right panel -->



    </div>

</div>

<!-- page content -->



<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
