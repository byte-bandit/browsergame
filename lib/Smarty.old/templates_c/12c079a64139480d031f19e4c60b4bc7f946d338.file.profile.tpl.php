<?php /* Smarty version Smarty-3.1.18, created on 2021-09-16 00:59:09
         compiled from "D:\Projects\browsergame\app\Views\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12798795614288cd82a049-07064391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c079a64139480d031f19e4c60b4bc7f946d338' => 
    array (
      0 => 'D:\\Projects\\browsergame\\app\\Views\\profile.tpl',
      1 => 1631749191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12798795614288cd82a049-07064391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile' => 0,
    'player' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_614288cd860f66_81273613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614288cd860f66_81273613')) {function content_614288cd860f66_81273613($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
      <form action="index.php?route=Profile&action=attack&player=<?php echo $_smarty_tpl->tpl_vars['profile']->value['player_id'];?>
" method="post">
        <input type="submit" value="Attack" name="attack"/>
      </form>
    </p>
  <?php }?>
<?php }?>
 
<?php echo $_smarty_tpl->getSubTemplate ("Parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
