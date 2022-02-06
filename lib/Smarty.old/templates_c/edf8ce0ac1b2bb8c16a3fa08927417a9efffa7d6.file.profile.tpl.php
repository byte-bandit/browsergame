<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 23:41:30
         compiled from "C:\xampp\htdocs\browsergame\app\Views\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2637353ac91b1c97dd0-85183501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf8ce0ac1b2bb8c16a3fa08927417a9efffa7d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Views\\profile.tpl',
      1 => 1403818883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2637353ac91b1c97dd0-85183501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ac91b1cedce4_12276926',
  'variables' => 
  array (
    'profile' => 0,
    'player' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac91b1cedce4_12276926')) {function content_53ac91b1cedce4_12276926($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
