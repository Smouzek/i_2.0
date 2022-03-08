<?php
/* Smarty version 3.1.38, created on 2022-03-08 13:31:56
  from 'C:\Programs\OpenServer\domains\shop\templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6227309c383aa3_01930365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4249f7969509778eef97d54c79e4629ebc7d9d82' => 
    array (
      0 => 'C:\\Programs\\OpenServer\\domains\\shop\\templates\\category.tpl',
      1 => 1646734052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6227309c383aa3_01930365 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error_message']->value !== '') {?>
    <p><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
<?php } else { ?>
    <a href="index.php">Назад</a>
    <br/>
    <h2 class="category-title"><?php echo $_smarty_tpl->tpl_vars['category_items']->value[0]['category_name'];?>
</h2>
    <div class="main-wrapper">
        <div class="category-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_items']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('a', (($_smarty_tpl->tpl_vars['key']->value-($_smarty_tpl->tpl_vars['key']->value%$_smarty_tpl->tpl_vars['items_on_page']->value))/$_smarty_tpl->tpl_vars['items_on_page']->value)+1);?>
                <div class="category-item page page<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
">
                    <a href="product.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['product_id'];?>
&category_id=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
">
                        <div class="category-item__preview">
                            <img src="pictures/<?php echo $_smarty_tpl->tpl_vars['value']->value['picture_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['alt'];?>
">
                        </div>
                        <div class="category-item__description">
                            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['category_name'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['product_name'];?>
</p>
                        </div>
                    </a>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
        <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
        <div class="paginator" id="pagination">
            <?php
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['item']->step = 1;$_smarty_tpl->tpl_vars['item']->total = (int) ceil(($_smarty_tpl->tpl_vars['item']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['item']->step));
if ($_smarty_tpl->tpl_vars['item']->total > 0) {
for ($_smarty_tpl->tpl_vars['item']->value = 1, $_smarty_tpl->tpl_vars['item']->iteration = 1;$_smarty_tpl->tpl_vars['item']->iteration <= $_smarty_tpl->tpl_vars['item']->total;$_smarty_tpl->tpl_vars['item']->value += $_smarty_tpl->tpl_vars['item']->step, $_smarty_tpl->tpl_vars['item']->iteration++) {
$_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->iteration === 1;$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;?>
                <p class="paginator__item" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
            <?php }
}
?>
        </div>
    <?php }
}?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
