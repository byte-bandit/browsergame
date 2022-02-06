<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 20:52:13
         compiled from "C:\xampp\htdocs\browsergame\app\Views\Parts\global_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2176553ac6bddd442a2-74626888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a3a6327e2fb1e91be520fe6e287eb434d6a7563' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\Parts\\global_footer.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2176553ac6bddd442a2-74626888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac6bdde7caf5_66606462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6bdde7caf5_66606462')) {function content_53ac6bdde7caf5_66606462($_smarty_tpl) {?>            </div> <!-- panel-body -->
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
