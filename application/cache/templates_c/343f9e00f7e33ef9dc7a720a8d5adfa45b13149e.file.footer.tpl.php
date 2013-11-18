<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 21:42:34
         compiled from "application\views\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172155266c9820450a9-01408913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '343f9e00f7e33ef9dc7a720a8d5adfa45b13149e' => 
    array (
      0 => 'application\\views\\footer.tpl',
      1 => 1383658952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172155266c9820450a9-01408913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5266c9820a2cb2_40475995',
  'variables' => 
  array (
    'js_footer_url' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c9820a2cb2_40475995')) {function content_5266c9820a2cb2_40475995($_smarty_tpl) {?>

        <div id="footer">
            <hr>
                <div class="container">
                        <p>Copyright &copy; DNH Web 2013</p>
                </div>

        </div>
        <!-- Bootstrap -->
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_footer_url']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
            <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
        <?php } ?>
    </body>
</html><?php }} ?>
