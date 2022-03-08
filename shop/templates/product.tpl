<a href="category.php?id={$category_id}">Назад</a>
<div class="layout">
    <div class="product">
        <div class="product__preview">
            <div class="product__carousel">
                <div class="product__carousel-content">
                    {foreach from=$product_info.pictures key=key item=value}
                        <img src="pictures/{$value.path_to_file}" alt="{$value.alt}">
                    {/foreach}
                </div>
                <div class="product__next">
                    <span class="product__arrow noselect">></span>
                </div>
            </div>
            <div class="product__photo">
                <img src="pictures/{$product_info.pictures.0.path_to_file}" alt="{$product_info.pictures.0.alt}">
            </div>
        </div>

        <div class="product__description">
            <div class="product__title">
                <h2>{$product_info.product_name}</h2>
            </div>

            <div class="product__categories">
                {foreach from=$product_info.categories key=key item=value}
                    <a href="category.php?id={$value.category_id}">{$value.name}</a>
                {/foreach}
            </div>

            <div class="product__price">
                <div class="product__price-actual">
                    <span class="product__price-old">{$product_info.price}</span>
                    <span class="product__price-current price">{$product_info.discount_price}</span>
                </div>
                <div class="product__price-discount">
                    <span class="product__price-value price">{$product_info.promo_price}</span>
                    <span class="product__price-text">- с промокодом</span>
                </div>
            </div>

            <div class="product__info">
                <div class="product__info-item">
                    <img src="pictures/1.png" alt="#"/>
                    В наличии в магазине <a href="#">Lamoda</a>
                </div>
                <div class="product__info-item">
                    <img src="pictures/2.png" alt="#"/>
                    Бесплатная доставка
                </div>
            </div>

            <div class="product__counter">
                <div class="product__minus noselect">-</div>
                <div class="product__count">
                    <input value="0" type="text" class="product__count-part">
                </div>
                <div class="product__plus noselect">+</div>
            </div>

            <div class="product__actions">
                <button class="custom-btn custom-btn--blue" id="buy">купить</button>
                <button class="custom-btn">в избранное</button>
            </div>

            <div class="product__text">
                Рубашка Medicine выполнена из вискозной ткани с клетчатым узором.
                Детали: прямой крой; отложной воротник; планка и манжеты на пуговицах; карман на груди.
            </div>

            <div class="product__share">
                <span class="product__share-title">поделиться:</span>
                <div class="product__share-list">
                    <a href="#">
                        <img src="pictures/vk.png" alt="vk">
                    </a>
                    <a href="#">
                        <img src="pictures/google.png" alt="google">
                    </a>
                    <a href="#">
                        <img src="pictures/facebook.png" alt="facebook">
                    </a>
                    <a href="#">
                        <img src="pictures/twiter.png" alt="twiter">
                    </a>
                </div>
                <div class="product__share-count">
                    123
                </div>
            </div>
        </div>
    </div>
</div>