<?php
/* Smarty version 3.1.38, created on 2022-03-08 13:31:58
  from 'C:\Programs\OpenServer\domains\shop\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6227309ef35602_78415338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac046ddc48d5863b6294fe44b40c94d18ecae3d4' => 
    array (
      0 => 'C:\\Programs\\OpenServer\\domains\\shop\\templates\\product.tpl',
      1 => 1646732337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6227309ef35602_78415338 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
">Назад</a>
<div class="layout">
    <div class="product">
        <div class="product__preview">
            <div class="product__carousel">
                <div class="product__carousel-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_info']->value['pictures'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <img src="pictures/<?php echo $_smarty_tpl->tpl_vars['value']->value['path_to_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['alt'];?>
">
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="product__next">
                    <span class="product__arrow noselect">></span>
                </div>
            </div>
            <div class="product__photo">
                <img src="pictures/<?php echo $_smarty_tpl->tpl_vars['product_info']->value['pictures'][0]['path_to_file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['pictures'][0]['alt'];?>
">
            </div>
        </div>

        <div class="product__description">
            <div class="product__title">
                <h2><?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_name'];?>
</h2>
            </div>

            <div class="product__categories">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_info']->value['categories'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="product__price">
                <div class="product__price-actual">
                    <span class="product__price-old"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['price'];?>
</span>
                    <span class="product__price-current price"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['discount_price'];?>
</span>
                </div>
                <div class="product__price-discount">
                    <span class="product__price-value price"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['promo_price'];?>
</span>
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
</div><?php }
}
