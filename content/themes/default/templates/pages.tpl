{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            {include file='_sidebar.tpl'}
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">
			
            <!-- tabs -->
            <!--<div class="box-tabs-wrapper clearfix">
                <ul class="nav pull-left flip">
                    <li {if $view == ""}class="active"{/if}>
                        <a href="{$system['system_url']}/pages">{__("Discover")}</a>
                    </li>
                    <li {if $view == "liked"}class="active"{/if}>
                        <a href="{$system['system_url']}/pages/liked">{__("Liked Pages")}</a>
                    </li>
                    <li {if $view == "manage"}class="active"{/if}>
                        <a href="{$system['system_url']}/pages/manage">{__("My Pages")}</a>
                    </li>
                </ul>
                {if $user->_data['user_group'] < 3 || $system['pages_enabled']}
                    <div class="mt10 pull-right flip">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-url="#create-page">
                            <i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs">{__("Create Page")}</span>
                        </button>
                    </div>
                {/if}
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
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
                {if $pages}
                    <ul class="row">
                        {foreach $pages as $_page}
                            {include file='__feeds_page.tpl'}
                        {/foreach}
                    </ul>

                    <!-- see-more -->
                    {if count($pages) >= $system['max_results_even']}
                        <div class="alert alert-post see-more js_see-more" data-get="{$get}" data-uid="{$user->_data['user_id']}">
                            <span>{__("See More")}</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                    {/if}
                    <!-- see-more -->
                {else}
                    <!--<p class="text-center text-muted">
                        {__("No pages to show")}
                    </p>-->
                {/if}
            </div>
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <!--<script src="./includes/assets/js/slick.min.js" type="text/javascript" charset="utf-8"></script>-->
  <script type="text/javascript">
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
</script>

{include file='_footer.tpl'}