<?php
/* Smarty version 3.1.33, created on 2019-02-01 15:05:53
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/experiences.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5460517b4203_45537568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d90f0d6e349611747d6d7eb4dedeecdd84b5fed' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/experiences.tpl',
      1 => 1549033432,
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
function content_5c5460517b4203_45537568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <!--<div class="box-tabs-wrapper clearfix">
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
            </div>-->
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
                    <!--<p class="text-center text-muted">
                        <?php echo __("No events to show");?>

                    </p>-->
                <?php }?>
            </div>
			
			<!--<div class="row">
				<div class="alert alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="remove from wishlist" style="font-size:35px;">&times;</a>
					
				<div class="col-md-2">
					<img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/hotel_the_cliff_bay_spa_suite_800x600.jpg" alt="Image Alternative text" title="Street Yoga">
				</div>	
				<div class="col-md-5">
					<div class="rate" style="margin-top: 20px;">
						<i class="fa fa-star" style="font-size:15px;color:orange;"></i>
						<i class="fa fa-star" style="font-size:15px;color:orange;"></i>
						<i class="fa fa-star" style="font-size:15px;color:orange;"></i>
						<i class="fa fa-star" style="font-size:15px;color:orange;"></i>
						<i class="fa fa-star" style="font-size:15px;"></i>
						<span class="booking-item-rating-number"><b>4.2</b> of 5</span>
						<small>(886 reviews)</small>
						<h5>Street Yoga</h5>
						<h6><i class="fa fa-map-marker" style="font-size:15px;"></i> Flushing, NY (LaGuardia Airport (LGA))</p>
						<h6>Sodales tristique sodales risus rutrum aliquam suscipit imperdiet vivamus tristique morbi</p>
					</div>
				</div>	
	
				<div class="col-md-3">
					<span style="display:block;font-size: 12px;line-height: 1em;margin-top: 20px;">average</span>
					<span style="display:block;"><strong style="font-size:47px;font-weight: normal;color: #626262;line-height:1em;display: inline-block;margin-bottom: 12px;">$250</strong>/person</span>
					<span class="btn btn-primary">Add to Trip</span>
				</div>
				</div>
			</div>-->
			
			<div class="row" style="background-color:white;padding: 5px;">
			<div class="row" style="padding-left: 15px;">
				<h1>Experiences</h1>
			</div>
			<ul class="booking-list booking-list-wishlist">
				<li><span class="booking-item-wishlist-title"><i class="fa fa-bolt" style="font-size:15px;"></i> activity <span>added on July 15, 2014</span></span>
                            
                            <span class="booking-item" href="#">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/street_yoga_800x600.jpg" alt="Image Alternative text" title="Street Yoga">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-half-empty"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b>4.2</b> of 5</span><small>(886 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title"><a href="#">Street Yoga</a></h5>
                                        <p class="text-left booking-item-address"><i class="fa fa-map-marker" style="font-size:15px;"></i> Flushing, NY (LaGuardia Airport (LGA))</p>
                                        <p class="text-left booking-item-description">Sodales tristique sodales risus rutrum aliquam suscipit imperdiet vivamus tristique morbi</p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price-from">average</span><span class="booking-item-price">$143</span><span>/person</span>
                                    </div>
                                </div>
                            </span>
                        </li>
						
						<li><span class="booking-item-wishlist-title"><i class="fa fa-building-o" style="font-size:15px;"></i> hotel <span>added on July 15, 2014</span></span>
                            
                            <span class="booking-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/hotel_the_cliff_bay_spa_suite_800x600.jpg" alt="Image Alternative text" title="Street Yoga">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-half-empty"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b>4.2</b> of 5</span><small>(886 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title"><a href="#">Wellington Hotel</a></h5>
                                        <p class="text-left booking-item-address"><i class="fa fa-map-marker" style="font-size:15px;"></i>  New York, NY (Times Square)</p>
                                        <p class="text-left booking-item-description">Latest booking: 31 minutes ago</p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$265</span><span>/night</span>
                                    </div>
                                </div>
                            </span>
                        </li>
						
						<li><span class="booking-item-wishlist-title"><i class="fa fa-bolt"></i> activity <span>added on July 15, 2014</span></span>
                            
                           <span class="booking-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/pictures_at_the_museum_800x600.jpg" alt="Image Alternative text" title="Pictures at the museum">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-half-empty"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b>3.5</b> of 5</span><small>(405 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title"><a href="#">The Metropolitan Museum of Art</a></h5>
                                        <p class="text-left booking-item-address"><i class="fa fa-map-marker"></i> Brooklyn, NY (Brooklyn)</p>
                                        <p class="text-left booking-item-description">Nisi viverra eros feugiat rhoncus aliquet rhoncus elementum rhoncus a sollicitudin congue leo sociis blandit ornare</p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price-from">average</span><span class="booking-item-price">$61</span><span>/person</span>
                                    </div>
                                </div>
                            </span>
                        </li>
						
						<li><span class="booking-item-wishlist-title"><i class="fa fa-building-o"></i> hotel <span>added on July 15, 2014</span></span>
                            
                            <span class="booking-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/the_pool_800x600.jpg" alt="Image Alternative text" title="The pool">
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>10</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b>4.7</b> of 5</span><small>(837 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title"><a href="#">Grand Hyatt New York</a></h5>
                                        <p class="text-left booking-item-address"><i class="fa fa-map-marker"></i> New York, NY (Midtown East)</p><small class="booking-item-last-booked">Latest booking: Just now</small>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$305</span><span>/night</span>
                                    </div>
                                </div>
                            </span>
                        </li>
						
						<li><span class="booking-item-wishlist-title"><i class="fa fa-home"></i> vacation rental <span>added on July 15, 2014</span></span>
                            
                            <span class="booking-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/hotel_2_800x600.jpg" alt="Image Alternative text" title="hotel 2">
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>11</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b>3.6</b> of 5</span><small>(683 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title"><a href="#">Duplex Greenwich</a></h5>
                                        <p class="text-left booking-item-address"><i class="fa fa-map-marker"></i> New York, NY (Midtown East)</p>
                                        <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign">
                                            <li rel="tooltip" data-placement="top" title="" data-original-title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 6</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="" data-original-title="Bedrooms"><i class="im im-bed fa fa-bed"></i><span class="booking-item-feature-sign">x 3</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="" data-original-title="Bathrooms"><i class="im im-shower fa fa-shower"></i><span class="booking-item-feature-sign">x 2</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">$390</span><span>/night</span>
                                    </div>
                                </div>
                            </span>
                        </li>
						
						<li><span class="booking-item-wishlist-title"><i class="fa fa-home"></i> vacation rental <span>added on July 15, 2014</span></span>
                           
                            <span class="booking-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool">
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>11</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-half-empty"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b>3.5</b> of 5</span><small>(769 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title"><a href="#">Styish, Chic, Best of West Village</a></h5>
                                        <p class="text-left booking-item-address"><i class="fa fa-map-marker"></i> Ozone Park, NY (Kennedy Airport (JFK))</p>
                                        <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign">
                                            <li rel="tooltip" data-placement="top" title="" data-original-title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 5</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="" data-original-title="Bedrooms"><i class="im im-bed fa fa-bed"></i><span class="booking-item-feature-sign">x 2</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="" data-original-title="Bathrooms"><i class="im im-shower fa fa-shower"></i><span class="booking-item-feature-sign">x 2</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">$248</span><span>/night</span>
                                    </div>
                                </div>
                            </span>
                        </li>
						
						</ul>
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
