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
            <div class="box-tabs-wrapper clearfix">
			
                <ul class="nav pull-left flip">
				
                    <li {if $view == ""}class="active"{/if}>
                        <a href="{$system['system_url']}/mytrips">{__("Discover")}</a>
                    </li>
                    <li {if $view == "going"}class="active"{/if}>
                        <a href="{$system['system_url']}/mytrips/going">{__("Going")}</a>
                    </li>
                    <li {if $view == "interested"}class="active"{/if}>
                        <a href="{$system['system_url']}/mytrips/interested">{__("Interested")}</a>
                    </li>
                    <li {if $view == "invited"}class="active"{/if}>
                        <a href="{$system['system_url']}/mytrips/invited">{__("Invited")}</a>
                    </li>
                    <li {if $view == "manage"}class="active"{/if}>
                        <a href="{$system['system_url']}/mytrips/manage">{__("My Trips")}</a>
                    </li>
                </ul>
                {if $user->_data['user_group'] < 3 || $system['events_enabled']}
                    <div class="mt10 pull-right flip">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-url="#create-trip">
                            <i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs">{__("Create Trip")}</span>
                        </button>
                    </div>
                {/if}
            </div>
            <!-- tabs -->
			
			
            
            <!-- content -->
            <div>
                {if $events}
                    <ul class="row">
                        {foreach $events as $_event}
                            {include file='__feeds_event.tpl'}
                        {/foreach}
                    </ul>

                    <!-- see-more -->
                    {if count($events) >= $system['max_results_even']}
                        <div class="alert alert-post see-more js_see-more" data-get="{$get}">
                            <span>{__("See More")}</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                    {/if}
                    <!-- see-more -->
                {else}
                    <p class="text-center text-muted">
                        {__("No trips to show")}
                    </p>
                {/if}
            </div>
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}