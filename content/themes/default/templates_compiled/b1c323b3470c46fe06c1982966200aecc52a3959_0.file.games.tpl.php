<?php
/* Smarty version 3.1.33, created on 2019-02-01 07:50:09
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53fa31470b83_17752739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c323b3470c46fe06c1982966200aecc52a3959' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/games.tpl',
      1 => 1549007406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 2,
    'file:__feeds_game.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c53fa31470b83_17752739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <?php if ($_smarty_tpl->tpl_vars['view']->value == "game") {?>

            <!-- side panel -->
            <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <!-- side panel -->

            <div class="col-xs-12 offcanvas-mainbar">
                <div class="post">
                    <div class="post-body">
                        <div class="post-header mb0">
                            <div class="post-avatar">
                                <div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['game']->value['thumbnail'];?>
);">
                                </div>
                            </div>
                            <div class="post-meta">
                                <!-- game name -->
                                <h3 style="margin-top: 5px; margin-bottom: 0;"><?php echo $_smarty_tpl->tpl_vars['game']->value['title'];?>
</h3>
                                <!-- game name -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <iframe frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['game']->value['source'];?>
" width="940" height="560"></iframe>
                </div>
            </div>

        <?php } else { ?>

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <!-- left panel -->

            <!-- right panel -->
            <div class="col-sm-8 col-md-10 offcanvas-mainbar">

                <!-- tabs -->
                <!--<div class="box-tabs-wrapper clearfix">
                    <ul class="nav pull-left flip">
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games"><?php echo __("Discoversss");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "played") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/played"><?php echo __("Your Games");?>
</a>
                        </li>
                    </ul>
                </div>-->
                <!-- tabs -->
                
                <!-- content -->
                <!--<div>
                    <?php if (count($_smarty_tpl->tpl_vars['games']->value) > 0) {?>
                        <ul class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, '_game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>

                        <!-- see-more -->
                        <?php if (count($_smarty_tpl->tpl_vars['games']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
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
                            <?php echo __("No games to show");?>

                        </p>
                    <?php }?>
                </div>-->
				
     <div class="" style="background-color:white;padding: 10px;">
				<div class="row" style="padding-left: 15px;">
				<h3>Trips You have Booked!</h3>
			</div>

			<div class="filter-section gray-area clearfix">
			<form>
		
		<div style="display: inline-block;">
            <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
            <label for="radio-1" class="radio-inline radio-custom-label">All Types</label>
        </div>
        <div style="display: inline-block;">
            <input id="radio-2" class="radio-custom"name="radio-group" type="radio">
            <label for="radio-2" class="radio-inline radio-custom-label">Hotels</label>
        </div>
        <div style="display: inline-block;">
            <input id="radio-3" class="radio-custom" name="radio-group" type="radio">
            <label for="radio-3" class="radio-inline radio-custom-label">Flights</label>
        </div>
		<div style="display: inline-block;">
            <input id="radio-4" class="radio-custom" name="radio-group" type="radio">
            <label for="radio-4" class="radio-inline radio-custom-label">Cars</label>
        </div>
		<div style="display: inline-block;">
            <input id="radio-5" class="radio-custom" name="radio-group" type="radio">
            <label for="radio-5" class="radio-inline radio-custom-label">Cruises</label>
        </div>
		<div class="pull-right col-md-6 action">
			<h5 class="pull-left no-margin col-md-4" style="font-size: 17px;margin-top:5px;">Sort results by:</h5>
			<button class="btn-small white gray-color" style="margin-top: 5px;">UPCOMING</button>
			<button class="btn-small white gray-color" style="margin-top: 5px;">CANCELLED</button>
		</div>
	</form>
            </div>
		
		<div class="container-fluid">
			
			<!--<div class="row">
					<div class="col-md-1 date">
					<label class="month">NOV</label><br/>
					<label class="date">23</label><br/>
					<label class="day">SAT</label>
					</div>
			</div>-->
			
			<div class="row">
				<div class="booking-info clearfix">
					<div class="date">
						<label class="month">NOV</label>
						<label class="date">23</label>
						<label class="day">SAT</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect yellow-color circle fa fa-plane"></i>Indianapolis to Paris<small>you are flying</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>saturday, nov 23, 2013</dd>
					</dl>
					<button class="btn-mini status">UPCOMMING</button>
				</div>
			</div>
			
			<div class="row">
				<div class="booking-info clearfix">
					<div class="date">
						<label class="month">NOV</label>
						<label class="date">30</label>
						<label class="day">SAT</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect yellow-color circle fa fa-plane"></i>England to Rome<small>you are flying</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>saturday, nov 30, 2013</dd>
					</dl>
					<button class="btn-mini status">UPCOMMING</button>
				</div>
			</div>
			
			<div class="row">
				<div class="booking-info clearfix">
					<div class="date">
						<label class="month">DEC</label>
						<label class="date">11</label>
						<label class="day">MON</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect blue-color circle fa fa-hotel"></i>Hilton Hotel & Resorts<small>2 adults staying</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>monday, dec 11, 2013</dd>	
					</dl>
					<button class="btn-mini status">UPCOMMING</button>
				</div>
			</div>
			
			<div class="row">
				<div class="booking-info clearfix">
					<div class="date">
						<label class="month">NOV</label>
						<label class="date">30</label>
						<label class="day">SAT</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect circle red-color fa fa-car"></i>Economy Car<small>you are driving</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>saturday, nov 30, 2013</dd>
					</dl>
					<button class="btn-mini status">UPCOMMING</button>
				</div>
			</div>
			
			<div class="row">
				<div class="booking-info clearfix">
					<div class="date">
						<label class="month">DEC</label>
						<label class="date">22</label>
						<label class="day">SUN</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect circle green-color fa fa-ship"></i>Baja Mexico<small>3 adults going on cruise</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>sunday, dec 22, 2013</dd>
					</dl>
					<button class="btn-mini status">UPCOMMING</button>
				</div>
			</div>
			
			<div class="row">
				<div class="booking-info clearfix cancelled">
					<div class="date">
						<label class="month">NOV</label>
						<label class="date">30</label>
						<label class="day">SAT</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect circle fa fa-plane"></i>England to Rome<small>you are flying</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>saturday, nov 30, 2013</dd>
					</dl>
					<button class="btn-mini status">CANCELLED</button>
				</div>
			</div>
			
			<div class="row">
				<div class="booking-info clearfix cancelled">
					<div class="date">
						<label class="month">NOV</label>
						<label class="date">30</label>
						<label class="day">SAT</label>
					</div>
					<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect circle fa fa-car"></i>Economy Car<small>you are driving</small></h4>
					<dl class="info">
						<dt>TRIP ID</dt>
						<dd>5754-8dk8-8ee</dd>
						<dt>booked on</dt>
						<dd>saturday, nov 30, 2013</dd>
					</dl>
					<button class="btn-mini status">CANCELLED</button>
				</div>
			</div>
			
		</div>
		</div>

		
                <!-- content -->

            </div>
            <!-- right panel -->

        <?php }?>

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
