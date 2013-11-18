<?php /* Smarty version Smarty-3.1.15, created on 2013-11-18 22:23:05
         compiled from "application\views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234195266c2f571b747-51383086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ecae1e06c072519e986ba112b80a7701dd6f776' => 
    array (
      0 => 'application\\views\\header.tpl',
      1 => 1384784582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234195266c2f571b747-51383086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5266c2f5759f59_13607625',
  'variables' => 
  array (
    'css_url' => 0,
    'css' => 0,
    'base_url' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c2f5759f59_13607625')) {function content_5266c2f5759f59_13607625($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Modulo">
        <meta name="author" content="DNH Web">
        <title>Modulo</title>
        <!-- CSS -->
        <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_url']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" rel="stylesheet">
        <?php } ?>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Modulo</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
information.png" alt="info"> About</a></li>
                        <li><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
help.png" alt="help"> Help</a></li>
                        <li>
                            <a href="">
                                <input type="button" value="Connection" class="btn-primary">
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav><?php }} ?>
