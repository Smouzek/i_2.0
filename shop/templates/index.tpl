<div class="product_categories">
<h2>Категории товаров</h2>
    <div class="all-categories">
        {foreach from=$categories item=value}
            <a href="category.php?id={$value['category_id']}">
                <div class="all-categories__item">
                    <p>{$value['name']} ({$value['number']})</p>
                </div>
            </a>
        {/foreach}
    </div>
</div>