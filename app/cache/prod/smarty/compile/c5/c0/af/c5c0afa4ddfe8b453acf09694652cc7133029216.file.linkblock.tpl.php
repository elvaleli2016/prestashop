<?php /* Smarty version Smarty-3.1.19, created on 2017-08-28 18:32:46
         compiled from "C:\xampp\htdocs\prestashopCambio\themes\classic\modules\ps_linklist\views\templates\hook\linkblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2494759a445ae466059-69244441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5c0afa4ddfe8b453acf09694652cc7133029216' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopCambio\\themes\\classic\\modules\\ps_linklist\\views\\templates\\hook\\linkblock.tpl',
      1 => 1502749860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2494759a445ae466059-69244441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'linkBlocks' => 0,
    'linkBlock' => 0,
    '_expand_id' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a445ae480021_20968529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a445ae480021_20968529')) {function content_59a445ae480021_20968529($_smarty_tpl) {?>
<div class="col-md-4 links">
  <div class="row">
  <?php  $_smarty_tpl->tpl_vars['linkBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->key => $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->_loop = true;
?>
    <div class="col-md-6 wrapper">
      <h3 class="h3 hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
      <?php $_smarty_tpl->tpl_vars['_expand_id'] = new Smarty_variable(mt_rand(10,100000), null, 0);?>
      <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class="h3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse">
        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlock']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
          <li>
            <a
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['target'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
            >
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>

            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  <?php } ?>
  </div>
</div>
<?php }} ?>