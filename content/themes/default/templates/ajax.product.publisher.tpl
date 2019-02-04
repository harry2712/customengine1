<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title">
        <i class="fa fa-shopping-cart fa-fw"></i> {__("Sell New Product")}
    </h5>
</div>
<form class="publisher-mini">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>{__("Product Name")}</label>
                    <input name="name" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>{__("Price")}</label>
                    <input name="price" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>{__("Category")}</label>
                    <select name="category" class="form-control">
                        {foreach $market_categories as $category}
                            <option value="{$category['category_id']}">{__($category['category_name'])}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>{__("Status")}</label>
                    <select name="status" class="form-control">
                        <option value="new">{__("New")}</option>
                        <option value="old">{__("Used")}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>{__("Location")}</label>
            <input name="location" type="text" value="{$post['product']['location']}" class="form-control js_geocomplete">
        </div>
        <div class="form-group">
            <label>{__("Description")}</label>
            <textarea name="message" rows="5" dir="auto" class="form-control">{$post['text_plain']}</textarea>
        </div>
        <div class="form-group">
            <label>{__("Photos")}</label>
            <div class="attachments clearfix" data-type="photos">
                <ul>
                    <li class="add">
                        <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                    </li>
                </ul>
            </div>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary js_publisher-product">{__("Publish")}</button>
    </div>
</form>