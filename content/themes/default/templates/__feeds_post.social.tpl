{if $system['social_share_enabled']}
    <div class="post-sharing x-hidden">
        <span class="btn btn-sm btn-rounded btn-default js_share" data-id="{$post['post_id']}">
            <i class="fa fa-share-square fa-fw"></i>
        </span>
        <a href="http://www.facebook.com/sharer.php?u={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-facebook" target="_blank">
            <i class="fab fa-facebook-f fa-fw"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-rounded btn-twitter" target="_blank">
            <i class="fab fa-twitter fa-fw"></i>
        </a>
        <a href="https://plus.google.com/share?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-google" target="_blank">
            <i class="fab fa-google fa-fw"></i>
        </a>
        <a href="https://vk.com/share.php?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-vk" target="_blank">
            <i class="fab fa-vk fa-fw"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-linkedin" target="_blank">
            <i class="fab fa-linkedin fa-fw"></i>
        </a>
        <a href="https://api.whatsapp.com/send?text={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-whatsapp" target="_blank">
            <i class="fab fa-whatsapp fa-fw"></i>
        </a>
        <a href="https://reddit.com/submit?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-reddit" target="_blank">
            <i class="fab fa-reddit fa-fw"></i>
        </a>
        <a href="https://pinterest.com/pin/create/button/?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-pinterest" target="_blank">
            <i class="fab fa-pinterest fa-fw"></i>
        </a>
    </div>
{/if}