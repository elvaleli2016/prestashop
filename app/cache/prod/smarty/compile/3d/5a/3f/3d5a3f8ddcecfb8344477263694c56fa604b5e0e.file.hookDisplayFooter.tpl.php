<?php /* Smarty version Smarty-3.1.19, created on 2017-08-28 18:32:46
         compiled from "C:\xampp\htdocs\prestashopCambio\themes\classic\modules\ps_legalcompliance\views\templates\hook\hookDisplayFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1072259a445ae4361f4-79648197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5a3f8ddcecfb8344477263694c56fa604b5e0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopCambio\\themes\\classic\\modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayFooter.tpl',
      1 => 1502749860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1072259a445ae4361f4-79648197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_links' => 0,
    'cms_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a445ae443339_76141557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a445ae443339_76141557')) {function content_59a445ae443339_76141557($_smarty_tpl) {?>

<div class="col-md-2 links wrapper">
  <h3 class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_eu_about_us_list" data-toggle="collapse">
    <span class="h3"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="collapse" id="footer_eu_about_us_list">
    <?php  $_smarty_tpl->tpl_vars['cms_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link']->key => $_smarty_tpl->tpl_vars['cms_link']->value) {
$_smarty_tpl->tpl_vars['cms_link']->_loop = true;
?>
      <li>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cms-page-link" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cms_link']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
 </a>
      </li>
    <?php } ?>
  </ul>
</div>
<?php }} ?>
