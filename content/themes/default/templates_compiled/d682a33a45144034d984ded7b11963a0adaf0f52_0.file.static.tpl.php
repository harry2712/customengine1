<?php
/* Smarty version 3.1.33, created on 2019-02-02 11:38:32
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/static.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c558138bb8997_32901729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd682a33a45144034d984ded7b11963a0adaf0f52' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/static.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5c558138bb8997_32901729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="page-title">
    <?php echo $_smarty_tpl->tpl_vars['static']->value['page_title'];?>

</div>

<div class="container offcanvas">
    <div class="row">

	    <!-- side panel -->
	    <div class="col-xs-12 visible-xs-block offcanvas-sidebar mt20">
	        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	    </div>
	    <!-- side panel -->

	    <div class="col-xs-12 offcanvas-mainbar">
			<div class="row">
		        <div class="col-xs-10 col-xs-offset-1 text-readable ptb10">
		            <?php echo $_smarty_tpl->tpl_vars['static']->value['page_text'];?>

		        </div>
		    </div>
	    </div>
	    
	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
