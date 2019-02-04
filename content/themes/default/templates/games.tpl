{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        {if $view == "game"}

            <!-- side panel -->
            <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
                {include file='_sidebar.tpl'}
            </div>
            <!-- side panel -->

            <div class="col-xs-12 offcanvas-mainbar">
                <div class="post">
                    <div class="post-body">
                        <div class="post-header mb0">
                            <div class="post-avatar">
                                <div class="post-avatar-picture" style="background-image:url({$game['thumbnail']});">
                                </div>
                            </div>
                            <div class="post-meta">
                                <!-- game name -->
                                <h3 style="margin-top: 5px; margin-bottom: 0;">{$game['title']}</h3>
                                <!-- game name -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <iframe frameborder="0" src="{$game['source']}" width="940" height="560"></iframe>
                </div>
            </div>

        {else}

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
                            <a href="{$system['system_url']}/games">{__("Discoversss")}</a>
                        </li>
                        <li {if $view == "played"}class="active"{/if}>
                            <a href="{$system['system_url']}/games/played">{__("Your Games")}</a>
                        </li>
                    </ul>
                </div>-->
                <!-- tabs -->
                
                <!-- content -->
                <!--<div>
                    {if count($games) > 0}
                        <ul class="row">
                            {foreach $games as $_game}
                                {include file='__feeds_game.tpl'}
                            {/foreach}
                        </ul>

                        <!-- see-more -->
                        {if count($games) >= $system['max_results_even']}
                            <div class="alert alert-post see-more js_see-more" data-get="{$get}">
                                <span>{__("See More")}</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                        {/if}
                        <!-- see-more -->
                    {else}
                        <p class="text-center text-muted">
                            {__("No games to show")}
                        </p>
                    {/if}
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

        {/if}

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}