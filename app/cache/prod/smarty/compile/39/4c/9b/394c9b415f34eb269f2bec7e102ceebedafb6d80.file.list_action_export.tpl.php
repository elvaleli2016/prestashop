<?php /* Smarty version Smarty-3.1.19, created on 2017-08-28 18:32:52
         compiled from "C:\xampp\htdocs\prestashopCambio\admin\themes\default\template\controllers\request_sql\list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43459a445b492ebc4-36762524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '394c9b415f34eb269f2bec7e102ceebedafb6d80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopCambio\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1502749860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43459a445b492ebc4-36762524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a445b4934498_43544575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a445b4934498_43544575')) {function content_59a445b4934498_43544575($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
