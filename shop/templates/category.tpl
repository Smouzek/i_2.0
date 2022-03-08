{if $error_message !== ""}
    <p>{$error_message}</p>
{else}
    <a href="index.php">Назад</a>
    <br/>
    <h2 class="category-title">{$category_items.0.category_name}</h2>
    <div class="main-wrapper">
        <div class="category-wrapper">
            {foreach from=$category_items key=key item=value}
                {assign var="a" value=(($key - ($key % $items_on_page)) / $items_on_page) + 1}
                <div class="category-item page page{$a}">
                    <a href="product.php?id={$value['product_id']}&category_id={$category_id}">
                        <div class="category-item__preview">
                            <img src="pictures/{$value['picture_path']}" alt="{$value['alt']}">
                        </div>
                        <div class="category-item__description">
                            <p>{$value['category_name']}</p>
                            <p>{$value['product_name']}</p>
                        </div>
                    </a>
                </div>
            {/foreach}
        </div>
    </div>
    {*Навигация по страницам*}
    {if $pages > 1}
        <div class="paginator" id="pagination">
            {for $item=1 to $pages}
                <p class="paginator__item" value="{$item}">{$item}</p>
            {/for}
        </div>
    {/if}
{/if}

{include file='footer.tpl'}