<?php /* Smarty version Smarty-3.1.19, created on 2017-08-28 18:32:52
         compiled from "C:\xampp\htdocs\prestashopCambio\admin\themes\default\template\controllers\referrers\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2036359a445b47ca937-22266404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff9f65cf9229f54e904cee5cbc406fc2f5a716b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopCambio\\admin\\themes\\default\\template\\controllers\\referrers\\calendar.tpl',
      1 => 1502749860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036359a445b47ca937-22266404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'action' => 0,
    'table' => 0,
    'identifier' => 0,
    'id' => 0,
    'translations' => 0,
    'datepickerFrom' => 0,
    'datepickerTo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a445b47eb318_96229785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a445b47eb318_96229785')) {function content_59a445b47eb318_96229785($_smarty_tpl) {?>

<div id="referrersContainer">
	<div id="calendar">
			<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['action']->value&&$_smarty_tpl->tpl_vars['table']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['identifier']->value&&$_smarty_tpl->tpl_vars['id']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
<?php }?>" method="post" id="calendar_form" name="calendar_form" class="form-horizontal">
				<div class="panel">
					<input type="submit" name="submitDateDay" class="btn btn-default submitDateDay" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
" />
					<input type="submit" name="submitDateMonth" class="btn btn-default submitDateMonth" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
" />
					<input type="submit" name="submitDateYear" class="btn btn-default submitDateYear" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
" />
					<input type="submit" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
-1" />
					<input type="submit" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
-1" />
					<input type="submit" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
-1" />
					<p>
						<span><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['From'])) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['From'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'From:','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></span>
						<input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['datepickerFrom']->value);?>
" class="datepicker" />
					</p>
					<p>
						<span><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['To'])) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['To'];?>
<?php } else { ?><span><?php echo smartyTranslate(array('s'=>'To:','d'=>'Admin.Global'),$_smarty_tpl);?>
</span><?php }?></span>
						<input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['datepickerTo']->value);?>
" class="datepicker" />
					</p>
					<button type="submit" name="submitDatePicker" id="submitDatePicker" class="btn btn-default">
						<i class="icon-save"></i> <?php if (isset($_smarty_tpl->tpl_vars['translations']->value['Save'])) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['Save'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl);?>
<?php }?>
					</button>
				</div>
			</form>

			<script type="text/javascript">
				$(document).ready(function() {
					if ($("form#calendar_form .datepicker").length > 0)
						$("form#calendar_form .datepicker").datepicker({
							prevText: '',
							nextText: '',
							dateFormat: 'yy-mm-dd'
						});
				});
			</script>
	</div>
<?php }} ?>
