<?php
/* Smarty version 3.1.33, created on 2019-01-30 12:57:45
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c519f4993f464_05629029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '752e7e10db7ed0a1e4c50aa8d96e829f1ca289e4' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/pages.tpl',
      1 => 1548853058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c519f4993f464_05629029 (Smarty_Internal_Template $_smarty_tpl) {
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
/pages"><?php echo __("Discover");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "liked") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/liked"><?php echo __("Liked Pages");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "manage") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/manage"><?php echo __("My Pages");?>
</a>
                    </li>
                </ul>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                    <div class="mt10 pull-right flip">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-url="#create-page">
                            <i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs"><?php echo __("Create Page");?>
</span>
                        </button>
                    </div>
                <?php }?>
            </div>-->
            <!-- tabs -->
			
			<!--<div class="row">
			
				<div class="col-md-2" style="background-color:#01b7f2;">
					<div class="col-md-4">
						<i id="icons" class="fa fa-hotel"></i>
					</div>
					<div class="col-md-8">
						<p>3200</p>
						<p>Hotel to Stay</p>
					</div>
				</div>
				<div class="col-md-2" style="background-color:#fdb714;">
					<div class="col-md-4">
						<i id="icons" class="fa fa-plane"></i>
					</div>
					<div class="col-md-8" style="padding-left: 0;">
						<p>4509</p>
						<p>Airlines to Travel</p>
					</div>
				</div>
				<div class="col-md-2" style="background-color:#e01a33;">
					<div class="col-md-4">
						<i id="icons" class="fa fa-car"></i>
					</div>
					<div class="col-md-8">
						<p>3250</p>
						<p>VIP Transport</p>
					</div>		
				</div>
				<div class="col-md-2" style="background-color:#98ce44;">
					<div class="col-md-4">
						<i id="icons" class="fa fa-ship"></i>
					</div>
					<div class="col-md-8" style="padding-left: 0;">
						<p>1570</p>
						<p>Celebrity Cruises</p>
					</div>
				</div>
			</div>-->

			<!--<div class"row">
				<h3>Hi Mam, Welcome to Judefly</h3>
			</div>
			<div class="row">
			<div class="col-md-2" id="c_red">
				<div class="col-md-4">
					<i id="icons" class="fa fa-hotel"></i>
				</div>
				<div class="col-md-8">
					<p>3200</p>
					<p>Hotels to Stay</p>
				</div>
			</div>
			<div class="col-md-2" id="c_green">
				<div class="col-md-4">
					<i id="icons" class="fa fa-plane"></i>
				</div>
				<div class="col-md-8">
					<p>4509</p>
					<p>Airlines to Travel</p>
				</div>
			</div>
			<div class="col-md-2" id="c_blue">
				<div class="col-md-4">
					<i id="icons" class="fa fa-car"></i>
				</div>
				<div class="col-md-8">
					<p>3250</p>
					<p>VIP Transport</p>
				</div>
			</div>
			<div class="col-md-2" id="c_orange">
				<div class="col-md-4">
					<i id="icons" class="fa fa-ship"></i>
				</div>
				<div class="col-md-8">
					<p>1570</p>
					<p>Celebrity Cruises</p>
				</div>
			</div>
		</div>
		
		<div class="container-fluid" id="row_alert">
			<div class="row">
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>This is your Dashboard, the place to check your Profile, respond to Reservation Requests, view upcoming Trip Information, and much more.<span><br/><br/>
						<a href="#">Learn How it Works -</a> Watch a short video that shows you how Travelo works.<br/><br/>
						<a href="#">Get Help -</a> Watch a short video that shows you how Travelo works.	
				</div>
			</div>
			
			<div class="row" id="row_alert">
				<div class="alert alert-info alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</span>
				</div>
			</div>
		</div>-->
		
		<link rel="stylesheet" type="text/css" href="./includes/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="./includes/assets/css/slick-theme.css">
		
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="container-fluid" style="background-color:white;">
  
  <div class"row" id="row_alert">
		<h3>Hi Mahesh, Welcome to Judefly</h3>
  </div>
  
  <section class="regular slider">
  
    <div id="c_red">
    <a href="#" style="color:white;">
        <div class="col-md-2s">
        <div class="col-md-4">
          <i id="icons" class="fa fa-hotel"></i>
        </div>
        <div class="col-md-8">
          <p>3200</p>
          <p>Hotels to Stay</p>
        </div>
      </div>
    <p style="margin-bottom: 0px;"><span style="font-size:0.8333em;color:white;float:left;padding-left: 10px;">VIEW HOTELS</span><i class="fa fa-long-arrow-right" style="padding-right: 10px;"></i></p>
    </a>
    </div>

    
     <div id="c_green">
   <a href="#" style="color:white;">
        <div class="col-md-2s">
        <div class="col-md-4">
          <i id="icons" class="fa fa-plane"></i>
        </div>
        <div class="col-md-8">
          <p>4509</p>
          <p>Airlines to Travel</p>
        </div>
      </div>
    <p style="margin-bottom: 0px;"><span style="font-size:0.8333em;color:white;float:left;padding-left: 10px;">VIEW FLIGHTS</span><i class="fa fa-long-arrow-right" style="padding-right: 10px;"></i></p>
    </a>
    </div>
    
      <div id="c_blue">
    <a href="#" style="color:white;">
        <div class="col-md-2s">
        <div class="col-md-4">
          <i id="icons" class="fa fa-car"></i>
        </div>
        <div class="col-md-8">
          <p>3250</p>
          <p>VIP Transport</p>
        </div>
      </div>
    <p style="margin-bottom: 0px;"><span style="font-size:0.8333em;color:white;float:left;padding-left: 10px;">VIEW CARS</span><i class="fa fa-long-arrow-right" style="padding-right: 10px;"></i></p>
    </a>
    </div>
    
    <div id="c_orange">
  <a href="#" style="color:white;">
        <div class="col-md-2s">
        <div class="col-md-4">
          <i id="icons" class="fa fa-ship"></i>
        </div>
        <div class="col-md-8">
          <p>1570</p>
          <p>Celebrity Cruises</p>
        </div>
      </div>
    <p style="margin-bottom: 0px;"><span style="font-size:0.8333em;color:white;float:left;padding-left: 10px;">VIEW CRUISES</span><i class="fa fa-long-arrow-right" style="padding-right: 10px;"></i></p>
    </a>
    </div>

    
     <div id="c_red">
   <a href="#" style="color:white;">
        <div class="col-md-2s">
        <div class="col-md-4">
          <i id="icons" class="fa fa-hotel"></i>
        </div>
        <div class="col-md-8">
          <p>1570</p>
          <p>Hotels to Stay</p>
        </div>
      </div>
    <p style="margin-bottom: 0px;"><span style="font-size:0.8333em;color:white;float:left;padding-left: 10px;">VIEW HOTELS</span><i class="fa fa-long-arrow-right" style="padding-right: 10px;"></i></p>
    </a>
    </div>
    
      <div id="c_green">
    <a href="#" style="color:white;">
        <div class="col-md-2s">
        <div class="col-md-4">
          <i id="icons" class="fa fa-hotel"></i>
        </div>
        <div class="col-md-8">
          <p>1570</p>
          <p>Hotels to Stay</p>
        </div>
      </div>
    <p style="margin-bottom: 0px;"><span style="font-size:0.8333em;color:white;float:left;padding-left: 10px;">VIEW HOTELS</span><i class="fa fa-long-arrow-right" style="padding-right: 10px;"></i></p>
    </a>
    </div>
    
  </section>
  
  <div class="container-fluid" id="row_alert">
			<div class="row">
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>This is your Dashboard, the place to check your Profile, respond to Reservation Requests, view upcoming Trip Information, and much more.<span><br/><br/>
						<a href="#">Learn How it Works -</a> Watch a short video that shows you how Travelo works.<br/><br/>
						<a href="#">Get Help -</a> Watch a short video that shows you how Travelo works.	
				</div>
			</div>
			
			<div class="row" id="row_alert">
				<div class="alert alert-info alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</span>
				</div>
			</div>
		</div>
		</div>
            
            <!-- content -->
            <div>
                <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
                    <ul class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>

                    <!-- see-more -->
                    <?php if (count($_smarty_tpl->tpl_vars['pages']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                        <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
">
                            <span><?php echo __("See More");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                    <?php }?>
                    <!-- see-more -->
                <?php } else { ?>
                    <!--<p class="text-center text-muted">
                        <?php echo __("No pages to show");?>

                    </p>-->
                <?php }?>
            </div>
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <!--<?php echo '<script'; ?>
 src="./includes/assets/js/slick.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>-->
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).on('ready', function() {
      /*$(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });*/
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        /*autoplay: true,*/
        slidesToScroll: 3
      });
      /*$(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });*/
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
