<div class="content-service__item">
    <div class="content-service-item__img">
        {if $_pls['tv.catalog_image']}
            <img src="{$_pls['tv.catalog_image']}" alt="{$pagetitle}">
        {else}
            <img src="{'template_url'|config}images/categories/category-1.jpg" alt="{$pagetitle}">
        {/if}
    </div>
    <div class="content-service-item__title">{$pagetitle}</div>
    <div class="content-service-item__button"><a href="{$id|url}" class="content-service-item__link">Подробнее</a></div>
</div>