<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:00:36
         compiled from "layout/templates/global_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205254274539bfc9c8540e7-54629397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748a06b552cccb4c8bd6d1244b023bd16da88c2c' => 
    array (
      0 => 'layout/templates/global_footer.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205254274539bfc9c8540e7-54629397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfc9c859140_85560909',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfc9c859140_85560909')) {function content_539bfc9c859140_85560909($_smarty_tpl) {?>            </div> <!-- panel-body -->
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
