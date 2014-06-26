<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 12:01:15
         compiled from "layout/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1502008009539bfff56785c4-65815466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd496719c7adef5faabc174f435d741cea2a7fe1d' => 
    array (
      0 => 'layout/templates/profile.tpl',
      1 => 1402833011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1502008009539bfff56785c4-65815466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539bfff56b2ad6_21170067',
  'variables' => 
  array (
    'profile' => 0,
    'player' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bfff56b2ad6_21170067')) {function content_539bfff56b2ad6_21170067($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<h4><?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
</h4>
I am level <?php echo $_smarty_tpl->tpl_vars['profile']->value['level'];?>
.<br/><br/>
Nice to meet you!
 
<?php if ($_smarty_tpl->tpl_vars['profile']->value['player_id']!=$_smarty_tpl->tpl_vars['player']->value['player_id']) {?>
 
  <?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
    <div class="well">
      <?php echo $_smarty_tpl->tpl_vars['report']->value;?>

    </div>
  <?php } else { ?>
    <p>
      <form method="post">
        <input type="submit" value="Attack" name="attack"/>
      </form>
    </p>
  <?php }?>
<?php }?>
 
<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
