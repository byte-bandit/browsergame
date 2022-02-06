<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 23:47:32
         compiled from "C:\xampp\htdocs\browsergame\app\Views\Parts\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1667853ac6e38dea269-10185263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a6182c50df508aef1fc46de2e015450245bdc6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\Parts\\footer.tpl',
      1 => 1403819248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1667853ac6e38dea269-10185263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac6e38df5de0_55688272',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac6e38df5de0_55688272')) {function content_53ac6e38df5de0_55688272($_smarty_tpl) {?>            </div> <!-- panel-body -->
          </div> <!-- panel -->
        </div> <!-- col-md-6 -->
        <!-- Sidebar -->
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
          <div class="col-md-3">
            <?php echo $_smarty_tpl->getSubTemplate ("Parts/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
