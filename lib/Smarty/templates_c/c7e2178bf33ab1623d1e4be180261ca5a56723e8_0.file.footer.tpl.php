<?php
/* Smarty version 4.0.0, created on 2022-01-25 10:11:58
  from 'D:\Projects\browsergame\app\Views\Parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61efcceede1cf5_93359419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e2178bf33ab1623d1e4be180261ca5a56723e8' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\Parts\\footer.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Parts/hero.tpl' => 1,
  ),
),false)) {
function content_61efcceede1cf5_93359419 (Smarty_Internal_Template $_smarty_tpl) {
?>            </div> <!-- panel-body -->
          </div> <!-- panel -->
        </div> <!-- col-md-6 -->
        <!-- Sidebar -->
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
          <div class="col-md-3">
            <?php $_smarty_tpl->_subTemplateRender("file:Parts/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
</html><?php }
}
