<?php /* Smarty version Smarty-3.1.19, created on 2017-08-28 18:32:46
         compiled from "C:\xampp\htdocs\prestashopCambio\themes\classic\templates\catalog\_partials\miniatures\pack-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:545959a445aebdbea0-20579979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68f6fe0fa200d38ba24a5edd057a9d7e106fdf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopCambio\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1502749860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '545959a445aebdbea0-20579979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a445aebe9774_98270006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a445aebe9774_98270006')) {function content_59a445aebe9774_98270006($_smarty_tpl) {?>

  <article>
    <div class="card">
      <div class="pack-product-container">
        <div class="thumb-mask">
          <div class="mask">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <img
                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
              >
            </a>
          </div>
        </div>
        <div class="pack-product-name">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </div>
        <div class="pack-product-price">
          <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
        </div>
        <div class="pack-product-quantity">
          <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      </div>
    </div>
  </article>

<?php }} ?>
