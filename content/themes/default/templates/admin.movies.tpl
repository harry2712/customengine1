<div class="panel panel-default">
    <div class="panel-heading with-icon">
        {if $sub_view == ""}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/movies/add_movie" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Movie")}
                </a>
            </div>
        {elseif $sub_view == "genres"}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/movies/add_genre" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Genre")}
                </a>
            </div>
        {elseif $sub_view == "add_movie" || $sub_view == "edit_movie"}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/movies" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> {__("Go Back")}
                </a>
            </div>
        {elseif $sub_view == "add_genre" || $sub_view == "edit_genre"}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/movies/genres" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> {__("Go Back")}
                </a>
            </div>
        {/if}
        <i class="fa fa-film pr5 panel-icon"></i>
        <strong>{__("Movies")}</strong>
        {if $sub_view == "add_movie"} &rsaquo; <strong>{__("Add New Movie")}</strong>{/if}
        {if $sub_view == "edit_movie"} &rsaquo; <strong>{$data['title']}</strong>{/if}
        {if $sub_view == "genres"} &rsaquo; <strong>{__("Genres")}</strong>{/if}
        {if $sub_view == "add_genre"} &rsaquo; <strong>{__("Genres")}</strong> &rsaquo; <strong>{__("Add New Genre")}</strong>{/if}
        {if $sub_view == "edit_genre"} &rsaquo; <strong>{__("Genres")}</strong> &rsaquo; <strong>{$data['genre_name']}</strong>{/if}
    </div>
    {if $sub_view == ""}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Title")}</th>
                            <th>{__("Source")}</th>
                            <th>{__("Release")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                            <tr>
                                <td>
                                    {$row['movie_id']}
                                </td>
                                <td>
                                    <a target="_blank" href="{$system['system_url']}/movie/{$row['movie_id']}/{$row['movie_url']}">
                                        <img class="tbl-image" src="{$row['poster']}">
                                        {$row['title']}
                                    </a>
                                </td>
                                <td>
                                    {if $row['source_type'] == "youtube"}
                                        <span class="label label-danger">{__("YouTube")}</span>
                                    {elseif $row['source_type'] == "vimeo"}
                                        <span class="label label-info">{__("Vimeo")}</span>
                                    {elseif $row['source_type'] == "link"}
                                        <span class="label label-default">{__("Link")}</span>
                                    {elseif $row['source_type'] == "uploaded"}
                                        <span class="label label-success">{__("Uploaded")}</span>
                                    {/if}
                                </td>
                                <td>
                                    {if $row['release_year']}{$row['release_year']}{else}{__("N/A")}{/if}
                                </td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="movie" data-id="{$row['movie_id']}">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/movies/edit_movie/{$row['movie_id']}" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_movie"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=add_movie">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Movie Source")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="source_url">
                        <span class="help-block">
                            {__("From YouTube, Vimeo or site.com/movie.mp4")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Or Upload Movie")}
                    </label>
                    <div class="col-sm-9">
                        <div class="x-image">
                            <div class="x-image-success">
                                {__("Uploaded Successfully")}
                            </div>
                            <button type="button" class="close x-hidden js_x-image-remover" title='{__("Remove")}'>
                                <span>×</span>
                            </button>
                            <div class="x-image-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                            <input type="hidden" class="js_x-image-input" name="source_upload" value="">
                        </div>
                        <span class="help-block">
                            {__("Maximum file size is")} {$system['max_video_size']}{__("KB")} {__("and allowed extensions are")} {$system['video_extensions']}<br>
                            {__("You can change the")} <a target="_blank" href="{$system['system_url']}/admincp/settings/uploads">{__("Uploads Settings")}</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Movie Title")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Description")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("IMDB")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="imdb_url">
                        <span class="help-block">
                            {__("IMDB Link, Example:")} <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Movie Stars")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="stars" rows="3"></textarea>
                        <span class="help-block">
                            {__("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Release Year")}
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="release_year">
                        <span class="help-block">
                            {__("Movie release year, Example: 1995")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Duration")}
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="duration">
                        <span class="help-block">
                            {__("Movie duration in minutes, Example: 120")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Genres")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" multiple data-actions-box="true" name="movie_genres[]">
                            {foreach $genres as $genre}
                                <option value="{$genre['genre_id']}">{__($genre['genre_name'])}</option>
                            {/foreach}
                        </select>
                        <span class="help-block">
                            {__("You can select multiple genres for the movie")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Poster")}
                    </label>
                    <div class="col-sm-9">
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='{__("Remove")}'>
                                <span>×</span>
                            </button>
                            <div class="x-image-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="poster" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
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
    {elseif $sub_view == "edit_movie"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=edit_movie&id={$data['movie_id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Movie Source")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="source_url" {if $data['source_type'] != 'uploaded'}value="{$data['source']}"{/if}>
                        <span class="help-block">
                            {__("From YouTube, Vimeo or site.com/movie.mp4")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Or Upload Movie")}
                    </label>
                    <div class="col-sm-9">
                        {if $data['source_type'] == 'uploaded' && $data['source']}
                            <div class="x-image">
                                <div class="x-image-success" style="display: block;">
                                    {__("Uploaded Successfully")}
                                </div>
                                <button type="button" class="close js_x-image-remover" title='{__("Remove")}'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                                <input type="hidden" class="js_x-image-input" name="source_upload" value="{$data['source']}">
                            </div>
                        {else}
                            <div class="x-image">
                                <div class="x-image-success">
                                    {__("Uploaded Successfully")}
                                </div>
                                <button type="button" class="close x-hidden js_x-image-remover" title='{__("Remove")}'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                                <input type="hidden" class="js_x-image-input" name="source_upload" value="">
                            </div>
                        {/if}
                        <span class="help-block">
                            {__("Maximum file size is")} {$system['max_video_size']}{__("KB")} {__("and allowed extensions are")} {$system['video_extensions']}<br>
                            {__("You can change the")} <a target="_blank" href="{$system['system_url']}/admincp/settings/uploads">{__("Uploads Settings")}</a>
                        </span>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Movie Title")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" value="{$data['title']}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Description")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description" rows="3">{$data['description']}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("IMDB")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="imdb_url" value="{$data['imdb_url']}">
                        <span class="help-block">
                            {__("IMDB Link, Example:")} <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Movie Stars")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="stars" rows="3">{$data['stars']}</textarea>
                        <span class="help-block">
                            {__("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Release Year")}
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="release_year" value="{$data['release_year']}">
                        <span class="help-block">
                            {__("Movie release year, Example: 1995")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Duration")}
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="duration" value="{$data['duration']}">
                        <span class="help-block">
                            {__("Movie duration in minutes, Example: 120")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Genres")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" multiple data-actions-box="true" name="movie_genres[]">
                            {foreach $data['movies_genres'] as $genre}
                                <option {if in_array($genre['genre_id'], $data['genres'])}selected{/if} value="{$genre['genre_id']}">{__($genre['genre_name'])}</option>
                            {/foreach}
                        </select>
                        <span class="help-block">
                            {__("You can select multiple genres for the movie")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Poster")}
                    </label>
                    <div class="col-sm-9">
                        {if $data['poster'] == ''}
                            <div class="x-image">
                                <button type="button" class="close x-hidden js_x-image-remover" title='{__("Remove")}'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="poster">
                            </div>
                        {else}
                            <div class="x-image" style="background-image: url('{$system['system_uploads']}/{$data['poster']}')">
                                <button type="button" class="close js_x-image-remover" title='{__("Remove")}'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="poster" value="{$data['poster']}">
                            </div>
                        {/if}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
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
    {elseif $sub_view == "genres"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Title")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                            <tr>
                                <td>{$row['genre_id']}</td>
                                <td>{$row['genre_name']}</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="movie_genre" data-id="{$row['genre_id']}">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/movies/edit_genre/{$row['genre_id']}" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_genre"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=add_genre">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="genre_name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Description")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="genre_description" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
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
    {elseif $sub_view == "edit_genre"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=edit_genre&id={$data['genre_id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="genre_name" value="{$data['genre_name']}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Description")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="genre_description" rows="3">{$data['genre_description']}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
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