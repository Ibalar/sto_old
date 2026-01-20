<section class="page-content__breadcrumb page-breadcrumb__block">
    <div class="page-breadcrumb__container">
        <div class="page-breadcrumb__title">{$_modx->resource.pagetitle}</div>
        <div class="page-breadcrumb__row">
            {$modx->runSnippet('pdoCrumbs', [
            'showAtHome' => 0,
            'showHome' => 1,
            'outerClass' => 'nav nav-pills',
            'tpl' => '@INLINE <li class="page-breadcrumb__item"><a href="{$link}" class="page-breadcrumb__link">{$menutitle}</a></li>',
            'tplCurrent' => '@INLINE <li class="page-breadcrumb__item">{$menutitle}</li>',
            'tplWrapper' => '@INLINE <ol class="page-breadcrumb__list">{$output}</ol>',
            ])}
        </div>
    </div>
</section>