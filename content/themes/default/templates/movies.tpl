{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="movies-header">
    <div class="container">
        {$system['system_title']} <strong>{__("Movies")}</strong>
        <div class="row mt20">
            <div class="col-sm-6 col-sm-offset-3">
                <form class="js_search-form" data-handle="movies">
                    <div class="input-group">
                        <input name="query" type="text" class="form-control input-lg" placeholder='{__("Search for movies")}'>
                        <span class="input-group-btn">
                            <button class="btn btn-lg btn-danger" type="submit">{__("Search")}</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-3 offcanvas-sidebar">
            <!-- genres -->
            <div class="panel panel-default">
                <div class="panel-body with-nav">
                    <ul class="side-nav">
                        <li {if $view == "" || $view == "search"}class="active"{/if}>
                            <a href="{$system['system_url']}/movies">
                                {__("All")}
                            </a>
                        </li>
                        {foreach $genres as $_genre}
                            <li {if $view == "genre" && $genre['genre_id'] == $_genre['genre_id']}class="active"{/if}>
                                <a href="{$system['system_url']}/movies/genre/{$_genre['genre_id']}/{$_genre['genre_url']}">
                                    {__($_genre['genre_name'])}
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            <!-- genres -->
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-9 offcanvas-mainbar">

            {include file='_ads.tpl'}

            {if $view == "movie"}

                <div class="article-wrapper" style="border-radius: 3px;">

                    <div>
                        <div class="post-avatar">
                            <div class="post-avatar-picture" style="background-image:url({$movie['poster']});">
                            </div>
                        </div>
                        <div class="post-meta">
                            <h3 style="margin-top: 0px; margin-bottom: 5px;">{$movie['title']}</h3>
                            {if $movie['release_year']}
                                <span class="text-muted">{$movie['release_year']}</span>
                            {/if}
                            {if $movie['genres_list']}
                                {if $movie['release_year']} ‧ {/if}
                                {foreach $movie['genres_list'] as $_genre}
                                    <a href="{$system['system_url']}/movies/genre/{$_genre['genre_id']}/{$_genre['genre_url']}">
                                        {__($_genre['genre_name'])}
                                    </a>
                                    {if !$_genre@last}/{/if}
                                {/foreach}
                            {/if}
                            {if $movie['duration']}
                                {if $movie['genres_list']} ‧ {/if}
                                <span class="text-muted">{$movie['duration']} {__("minutes")}</span>
                            {/if}
                        </div>
                    </div>

                    <div style="margin: 20px -25px;">
                        {if $movie['source_type'] == "youtube"}
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{get_youtube_id($movie['source'], false)}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        {elseif $movie['source_type'] == "vimeo"}
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://player.vimeo.com/video/{get_vimeo_id($movie['source'])}" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        {elseif $movie['source_type'] == "link"}
                            <div>
                                <video style="width:100%;height:100%;" width="100%" height="100%" class="js_mediaelementplayer" controls="controls" preload="false">
                                    <source src="{$movie['source']}" type="video/mp4">
                                    <source src="{$movie['source']}" type="video/webm">
                                </video>
                            </div>
                        {elseif $movie['source_type'] == "uploaded"}
                            <div>
                                <video style="width:100%;height:100%;" width="100%" height="100%" class="js_mediaelementplayer" controls="controls" preload="false">
                                    <source src="{$system['system_uploads']}/{$movie['source']}" type="video/mp4">
                                    <source src="{$system['system_uploads']}/{$movie['source']}" type="video/webm">
                                </video>
                            </div>
                        {/if}
                    </div>

                    <div class="article-text mb20">
                        {$movie['description']}
                    </div>

                    {if {$movie['stars']}}
                        <div>
                            <strong>{__("Stars")}:</strong>
                            {foreach explode(',', $movie['stars']) as $_star}
                                <span class="text-primary">{$_star}</span>{if !$_star@last}, {/if}
                            {/foreach}
                        </div>
                    {/if}

                    {if $movie['release_year']}
                        <div class="mt10">
                            <strong>{__("Release")}:</strong> {$movie['release_year']}
                        </div>
                    {/if}

                    {if $movie['duration']}
                        <div class="mt10">
                            <strong>{__("Duration")}:</strong> {$movie['duration']} {__("minutes")}
                        </div>
                    {/if}

                    {if $movie['genres_list']}
                        <div class="article-tags mt10">
                            <ul>
                                <li>
                                    <strong>{__("Genres")}:</strong>
                                </li>
                                {foreach $movie['genres_list'] as $_genre}
                                    <li>
                                        <a href="{$system['system_url']}/movies/genre/{$_genre['genre_id']}/{$_genre['genre_url']}">
                                            {__($_genre['genre_name'])}
                                        </a>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    {/if}

                    {if $movie['imdb_url']}
                        <div class="mt10">
                            <strong>{__("IMDB")}:</strong> <a href="{$movie['imdb_url']}" target="_blank">{$movie['imdb_url']}</a>
                        </div>
                    {/if}
                    
                    <div class="mt10">
                        <strong>{__("Views")}:</strong> {$movie['views']}
                    </div>

                    <div class="mt10">
                        <strong>{__("Share")}:</strong> 
                        <a href="http://www.facebook.com/sharer.php?u={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-facebook" target="_blank">
                            <i class="fab fa-facebook-f fa-fw"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-rounded btn-twitter" target="_blank">
                            <i class="fab fa-twitter fa-fw"></i>
                        </a>
                        <a href="https://plus.google.com/share?url={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-google" target="_blank">
                            <i class="fab fa-google fa-fw"></i>
                        </a>
                        <a href="https://vk.com/share.php?url={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-vk" target="_blank">
                            <i class="fab fa-vk fa-fw"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-linkedin" target="_blank">
                            <i class="fab fa-linkedin fa-fw"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-whatsapp" target="_blank">
                            <i class="fab fa-whatsapp fa-fw"></i>
                        </a>
                        <a href="https://reddit.com/submit?url={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-reddit" target="_blank">
                            <i class="fab fa-reddit fa-fw"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={$system['system_url']}/movie/{$movie['movie_id']}/{$movie['movie_url']}" class="btn btn-sm btn-rounded btn-pinterest" target="_blank">
                            <i class="fab fa-pinterest fa-fw"></i>
                        </a>
                    </div>
                </div>

            {else}

                {if $view == "search"}
                    <div class="bs-callout bs-callout-warning mt0">
                        <!-- results counter -->
                        <strong class="text-primary">{$total}</strong> {__("results were found for the search for")} "<strong class="text-primary">{$query}</strong>"
                        <!-- results counter -->
                    </div>
                {/if}

                {if $movies}
                    <ul class="row">
                        {foreach $movies as $_movie}
                            <li class="col-md-4 col-sm-6">
                                <div class="movie-card">
                                    <a href="{$system['system_url']}/movie/{$_movie['movie_id']}/{$_movie['movie_url']}" class="movie-card-top">
                                        <div class="movie-picture" style="background-image:url('{$_movie['poster']}');"></div>
                                        <div class="movie-info">
                                            {if $_movie['genres_list'][0]}
                                                <div class="meta">{__($_movie['genres_list'][0]['genre_name'])}</div>
                                            {/if}
                                            {if $_movie['genres_list'][1]}
                                                <div class="meta">{__($_movie['genres_list'][1]['genre_name'])}</div>
                                            {/if}
                                            <div class="meta">
                                                <span class="btn btn-info">{__("Watch")}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="movie-card-bottom">
                                        <a href="{$system['system_url']}/movie/{$_movie['movie_id']}/{$_movie['movie_url']}" class="movie-title">{$_movie['title']}</a>
                                        <div class="movie-year">{if $_movie['release_year']}{$_movie['release_year']}{else}{__("N/A")}{/if}</div>
                                    </div>
                                </div>
                            </li>
                        {/foreach}
                    </ul>

                    {$pager}
                {else}
                    <p class="text-center text-muted">
                        {__("No movies to show")}
                    </p>
                {/if}

            {/if}
        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}