<?php
/* Smarty version 3.1.38, created on 2022-03-08 13:31:55
  from 'C:\Programs\OpenServer\domains\shop\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6227309b209ef8_54384670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9dd1f8b5ed08d17d74e7f71469f35c2b0656de' => 
    array (
      0 => 'C:\\Programs\\OpenServer\\domains\\shop\\templates\\index.tpl',
      1 => 1646718480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6227309b209ef8_54384670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product_categories">
<h2>Категории товаров</h2>
    <div class="all-categories">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
">
                <div class="all-categories__item">
                    <p><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['value']->value['number'];?>
)</p>
                </div>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
