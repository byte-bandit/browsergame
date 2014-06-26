<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 21:06:38
         compiled from "layout\templates\global_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:770753a87abe44f3c5-48822922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99da8953c7c6fc00d6ad00d5673120fa933b1aed' => 
    array (
      0 => 'layout\\templates\\global_footer.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770753a87abe44f3c5-48822922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a87abe4570c8_69530014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a87abe4570c8_69530014')) {function content_53a87abe4570c8_69530014($_smarty_tpl) {?>            </div> <!-- panel-body -->
          </div> <!-- panel -->
        </div> <!-- col-md-6 -->
        <!-- Sidebar -->
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
          <div class="col-md-3">
            <?php echo $_smarty_tpl->getSubTemplate ("hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        <?php }?>
      </div> <!-- row -->
      <!-- footer -->
      <div class="panel panel-default">
        <div class="panel-body"> 
          Roguelike Browsergame Clone Engine Version 0.1.0 <?php echo date("Y");?>

        </div> <!-- panel-body -->
      </div> <!-- footer panel -->
    </div> <!-- content -->
  </body>
</html><?php }} ?>
