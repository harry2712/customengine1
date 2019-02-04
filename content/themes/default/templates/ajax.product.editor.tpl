<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title">
        <i class="fa fa-shopping-cart fa-fw"></i> {__("Edit Product")}
    </h5>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>{__("Product Name")}</label>
                    <input type="hidden" name="handle" value="product">
                    <input type="hidden" name="id" value="{$post['post_id']}">
                    <input name="name" type="text" class="form-control" value="{$post['product']['name']}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>{__("Price")}</label>
                    <input name="price" type="text" class="form-control" value="{$post['product']['price']}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>{__("Category")}</label>
                    <select name="category" class="form-control">
                        {foreach $market_categories as $category}
                            <option {if $post['product']['category_id'] == $category['category_id']}selected{/if} value="{$category['category_id']}">{__($category['category_name'])}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>{__("Status")}</label>
                    <select name="status" class="form-control">
                        <option {if $post['product']['status'] == "new"}selected{/if} value="new">{__("New")}</option>
                        <option {if $post['product']['status'] == "old"}selected{/if} value="old">{__("Used")}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>{__("Location")}</label>
            <input name="location" type="text" class="form-control js_geocomplete" value="{$post['product']['location']}">
        </div>
        <div class="form-group">
            <label>{__("Description")}</label>
            <textarea name="message" rows="5" dir="auto" class="form-control">{$post['text_plain']}</textarea>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">{__("Save")}</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">{__("Cancel")}</button>
    </div>
</form>