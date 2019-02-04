<div class="panel panel-default panel-messages" data-cid="{$conversation['conversation_id']}" data-color="{$conversation['color']}" >
    <div class="panel-heading clearfix">
        <div class="pull-right flip">
            <a class="btn btn-primary js_chat-new" href="{$system['system_url']}/messages/new">
                <i class="fa fa-comment"></i>
                {__("New Message")}
            </a>
            <button type="button" class="btn btn-danger js_delete-conversation">
                <i class="fa fa-trash-alt"></i>
                {__("Delete")}
            </button>
        </div>
        <div class="mt5">
            {if !$conversation['multiple_recipients']}
                {$conversation['name_html']}
            {else}
                <span title="{$conversation['name_list']}">{$conversation['name']}</span>
            {/if}
        </div>
    </div>
    <div class="panel-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="367px" data-slimScroll-start="bottom">
            {include file='ajax.chat.conversation.messages.tpl'}
        </div>
        <div class="chat-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>
                </li>
            </ul>
        </div>
        <div class="x-form chat-form">
            <div class="chat-form-message">
                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='{__("Write a message")}'></textarea>
            </div>
            <ul class="x-form-tools clearfix">
                <li class="x-form-tools-attach">
                    <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                </li>
                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="far fa-smile-wink fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me">
                    <i class="fa fa-circle fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-post js_post-message">
                    <i class="far fa-paper-plane fa-lg fa-fw"></i>
                </li>
            </ul>
        </div>
    </div>
</div>