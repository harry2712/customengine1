<li class="col-md-3 col-sm-6">
    <div class="box">
        <a class="box-picture" href="{$system['system_url']}/games/{$_game['game_id']}/{$_game['title_url']}" style="background-image:url('{$_game['thumbnail']}');"></a>
        <div class="box-content">
            <a href="{$system['system_url']}/games/{$_game['game_id']}/{$_game['title_url']}" class="title">
                {$_game['title']}
            </a>
            <div class="text clearfix">
                {if $_game['played']}
                    <div class="mb5">
                        <i class="far fa-clock mr5"></i>{__("Played")}: <span class="js_moment" data-time="{$_game['last_played_time']}">{$_game['last_played_time']}</span>
                    </div>
                {/if}
                <a class="btn btn-primary" href="{$system['system_url']}/games/{$_game['game_id']}/{$_game['title_url']}">{__("Play")}</a>
            </div>
        </div>
    </div>
</li>