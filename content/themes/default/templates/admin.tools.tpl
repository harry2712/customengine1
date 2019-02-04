<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-toolbox pr5 panel-icon"></i>
        <strong>{__("Tools")}</strong>
        {if $sub_view == "faker"} &rsaquo; <strong>{__("Fake Users Generator")}</strong>{/if}
    </div>
    {if $sub_view == "faker"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/tools.php?do=faker">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Number of Users")}
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="users_num" value="10">
                        <span class="help-block">
                             {__("How many users you want to generate (Maximum is 1000 per request)")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        {__("Password")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="default_password">
                        <span class="help-block">
                             {__("This password will be used for all generated accounts (Default is 123456789)")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Random Pictures")}
                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="random_Avatar">
                            <input type="checkbox" name="random_Avatar" id="random_Avatar">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                             {__("Profile pictures will be generated randomly and may be dublicated")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Names Language")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="language">
                            {foreach $system['languages'] as $language}
                                {$parts = explode('_', $language['code'])}
                                <option {if $system['default_language']['language_id'] == $language['language_id']}selected{/if} value="{$parts[0]}_{strtoupper($parts[1])}">{$language['title']}</option>
                            {/foreach}
                        </select>
                        <span class="help-block">
                             {__("Select the language of generated account names")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-bolt"></i> {__("Generate")}</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    {/if}
</div>