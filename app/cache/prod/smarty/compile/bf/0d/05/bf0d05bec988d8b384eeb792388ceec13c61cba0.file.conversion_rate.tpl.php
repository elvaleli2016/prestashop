<?php /* Smarty version Smarty-3.1.19, created on 2017-08-28 18:32:50
         compiled from "C:\xampp\htdocs\prestashopCambio\admin\themes\default\template\controllers\currencies\conversion_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096559a445b2281605-01480936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0d05bec988d8b384eeb792388ceec13c61cba0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopCambio\\admin\\themes\\default\\template\\controllers\\currencies\\conversion_rate.tpl',
      1 => 1502749860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096559a445b2281605-01480936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_ACTIVE_CRONJOB_EXCHANGE_RATE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a445b2295c12_63202391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a445b2295c12_63202391')) {function content_59a445b2295c12_63202391($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-12">
		<?php if (Module::isInstalled("cronjobs")) {?>
			<?php $_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE'] = new Smarty_variable(Configuration::get('PS_ACTIVE_CRONJOB_EXCHANGE_RATE'), null, 0);?>
			<div id="currencyCronjobLiveExchangeRate" class="panel">
				<div class="panel-heading">
					<?php echo smartyTranslate(array('s'=>'Live exchange rates','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

					<div class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
						<label>
							<input type="checkbox" <?php echo 0!=$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? 'checked="checked"' : '';?>
><span></span>
						</label>
					</div>
					<div class="clearfix"></div>
				</div>
				<span class="status disabled <?php echo 0==$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"The exchange rates are not automatically updated",'d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</span>
				<span class="status enabled <?php echo 0!=$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"The exchange rates are automatically updated",'d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</span>
			</div>
    <?php } else { ?>
      <div id="currencyCronjobLiveExchangeRate" class="panel">
				<div class="panel-heading">
					<?php echo smartyTranslate(array('s'=>'Live exchange rates','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

					<div class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat"></div>
					<div class="clearfix"></div>
				</div>
				<span class="status disabled"><?php echo smartyTranslate(array('s'=>'Please install the %module_name% module before using this feature.','sprintf'=>array('%module_name%'=>'cronjobs'),'d'=>'Admin.International.Notification'),$_smarty_tpl);?>
</span>
			</div>
		<?php }?>
		<div class="panel">
			<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Update exchange rates','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</div>
			<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCurrencies'),'html','UTF-8');?>
" id="currency_form" method="post">
				<button type="submit" class="btn btn-default col-lg-12 col-xs-4" name="SubmitExchangesRates"><?php echo smartyTranslate(array('s'=>"Update",'d'=>'Admin.Global'),$_smarty_tpl);?>
</button>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php }} ?>
