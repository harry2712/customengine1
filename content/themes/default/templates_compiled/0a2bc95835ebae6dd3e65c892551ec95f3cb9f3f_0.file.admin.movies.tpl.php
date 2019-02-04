<?php
/* Smarty version 3.1.33, created on 2019-01-31 17:30:19
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.movies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5330ab647199_72838147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a2bc95835ebae6dd3e65c892551ec95f3cb9f3f' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.movies.tpl',
      1 => 1545977990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5330ab647199_72838147 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/movies/add_movie" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Movie");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "genres") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/movies/add_genre" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Genre");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_movie" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_movie") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/movies" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> <?php echo __("Go Back");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_genre" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_genre") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/movies/genres" class="btn btn-default">
                    <i class="fa fa-arrow-circle-left"></i> <?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-film pr5 panel-icon"></i>
        <strong><?php echo __("Movies");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_movie") {?> &rsaquo; <strong><?php echo __("Add New Movie");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_movie") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "genres") {?> &rsaquo; <strong><?php echo __("Genres");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_genre") {?> &rsaquo; <strong><?php echo __("Genres");?>
</strong> &rsaquo; <strong><?php echo __("Add New Genre");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_genre") {?> &rsaquo; <strong><?php echo __("Genres");?>
</strong> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['genre_name'];?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Source");?>
</th>
                            <th><?php echo __("Release");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>

                                </td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_url'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['poster'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

                                    </a>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "youtube") {?>
                                        <span class="label label-danger"><?php echo __("YouTube");?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "vimeo") {?>
                                        <span class="label label-info"><?php echo __("Vimeo");?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "link") {?>
                                        <span class="label label-default"><?php echo __("Link");?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "uploaded") {?>
                                        <span class="label label-success"><?php echo __("Uploaded");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['release_year']) {
echo $_smarty_tpl->tpl_vars['row']->value['release_year'];
} else {
echo __("N/A");
}?>
                                </td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="movie" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/movies/edit_movie/<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_movie") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=add_movie">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Movie Source");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="source_url">
                        <span class="help-block">
                            <?php echo __("From YouTube, Vimeo or site.com/movie.mp4");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Or Upload Movie");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="x-image">
                            <div class="x-image-success">
                                <?php echo __("Uploaded Successfully");?>

                            </div>
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
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
                            <?php echo __("Maximum file size is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_video_size'];
echo __("KB");?>
 <?php echo __("and allowed extensions are");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['video_extensions'];?>
<br>
                            <?php echo __("You can change the");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/uploads"><?php echo __("Uploads Settings");?>
</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Movie Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("IMDB");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="imdb_url">
                        <span class="help-block">
                            <?php echo __("IMDB Link, Example:");?>
 <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Movie Stars");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="stars" rows="3"></textarea>
                        <span class="help-block">
                            <?php echo __("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Release Year");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="release_year">
                        <span class="help-block">
                            <?php echo __("Movie release year, Example: 1995");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Duration");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="duration">
                        <span class="help-block">
                            <?php echo __("Movie duration in minutes, Example: 120");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Genres");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" multiple data-actions-box="true" name="movie_genres[]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genre_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['genre']->value['genre_name']);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <span class="help-block">
                            <?php echo __("You can select multiple genres for the movie");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Poster");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
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
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_movie") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=edit_movie&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['movie_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Movie Source");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="source_url" <?php if ($_smarty_tpl->tpl_vars['data']->value['source_type'] != 'uploaded') {?>value="<?php echo $_smarty_tpl->tpl_vars['data']->value['source'];?>
"<?php }?>>
                        <span class="help-block">
                            <?php echo __("From YouTube, Vimeo or site.com/movie.mp4");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Or Upload Movie");?>

                    </label>
                    <div class="col-sm-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['source_type'] == 'uploaded' && $_smarty_tpl->tpl_vars['data']->value['source']) {?>
                            <div class="x-image">
                                <div class="x-image-success" style="display: block;">
                                    <?php echo __("Uploaded Successfully");?>

                                </div>
                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                                <input type="hidden" class="js_x-image-input" name="source_upload" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['source'];?>
">
                            </div>
                        <?php } else { ?>
                            <div class="x-image">
                                <div class="x-image-success">
                                    <?php echo __("Uploaded Successfully");?>

                                </div>
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
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
                        <?php }?>
                        <span class="help-block">
                            <?php echo __("Maximum file size is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_video_size'];
echo __("KB");?>
 <?php echo __("and allowed extensions are");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['video_extensions'];?>
<br>
                            <?php echo __("You can change the");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/uploads"><?php echo __("Uploads Settings");?>
</a>
                        </span>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Movie Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("IMDB");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="imdb_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['imdb_url'];?>
">
                        <span class="help-block">
                            <?php echo __("IMDB Link, Example:");?>
 <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Movie Stars");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="stars" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['stars'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Release Year");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="release_year" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['release_year'];?>
">
                        <span class="help-block">
                            <?php echo __("Movie release year, Example: 1995");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Duration");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="duration" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['duration'];?>
">
                        <span class="help-block">
                            <?php echo __("Movie duration in minutes, Example: 120");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Genres");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" multiple data-actions-box="true" name="movie_genres[]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['movies_genres'], 'genre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
                                <option <?php if (in_array($_smarty_tpl->tpl_vars['genre']->value['genre_id'],$_smarty_tpl->tpl_vars['data']->value['genres'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genre_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['genre']->value['genre_name']);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <span class="help-block">
                            <?php echo __("You can select multiple genres for the movie");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Poster");?>

                    </label>
                    <div class="col-sm-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['poster'] == '') {?>
                            <div class="x-image">
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="poster">
                            </div>
                        <?php } else { ?>
                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['poster'];?>
')">
                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="poster" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['poster'];?>
">
                            </div>
                        <?php }?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "genres") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['genre_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['genre_name'];?>
</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="movie_genre" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['genre_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/movies/edit_genre/<?php echo $_smarty_tpl->tpl_vars['row']->value['genre_id'];?>
" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_genre") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=add_genre">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="genre_name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="genre_description" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_genre") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/movies.php?do=edit_genre&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['genre_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="genre_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['genre_name'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="genre_description" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['genre_description'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
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
    <?php }?>
</div><?php }
}
