<?php /* Smarty version Smarty-3.1.15, created on 2013-11-18 22:58:24
         compiled from "application\views\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136115277c142cc2850-08065696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748c9c36c832bb313ddab93729e5c61e3e931f39' => 
    array (
      0 => 'application\\views\\main_page.tpl',
      1 => 1384786703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136115277c142cc2850-08065696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5277c142d08d61_52497986',
  'variables' => 
  array (
    'img_dir' => 0,
    'module_zone' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277c142d08d61_52497986')) {function content_5277c142d08d61_52497986($_smarty_tpl) {?>

<!-- CAROUSEL -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-color: #CCCCCC;"></div>
            <div class="carousel-caption">
                <h1>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
chrome.png" alt="chrome"> <strong>Important reminder :</strong><br>
                    <br>
                    It is recommanded to use the Google Chrome browser to access Modulo.
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-color: #CCCCCC;"></div>
            <div class="carousel-caption">
                <h1>
                    Here we should write some information about Modulo features.<br>
                    <br>
                    Note : What would be good too is to save all of this in the database !
                </h1>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>
                
<div id="wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 style="color: red;">Test Loading Module</h1>
                <div id="test_load_module">
                    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_zone']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
<br>
                    <?php } ?>
                </div>
            </div>
        </div>
                
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Welcome !</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>
                    Modulo is a common Collaboration and Learning Environment (CLE) in which teachers and students can interact with one another.<br>
                    The main purpose of this CLE is to provide institutions with a powerful and lightweight teaching environment. Moreover, Modulo is Responsive ! Wherever you are, you can keep on working on your stuff with your phone or tablet.<br>
                    Thanks to your web browser, you canc choose among different tools to guide you in building a customized web site.
                </p>
                <p>
                    Teachers can publish courses, create projects and homeworks, set a web page in which student can collaborate to an associative work, ...<br>
                    Students can read courses in which they are registered, upload their projects or homeworks, ...<br>
                    Both can create club page, share timetable, personal note and so on !
                </p>
                <p>
                    Modulo is developped by DNHweb (www.dnhweb.fr).
                </p>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
