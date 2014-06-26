<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 23:39:56
         compiled from "C:\xampp\htdocs\browsergame\app\Layout\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3047253a89eac12ae02-06273292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c24a2219c911ce9c70c133cb9f7c62a5093bce9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\browsergame\\app\\Layout\\templates\\profile.tpl',
      1 => 1403550136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3047253a89eac12ae02-06273292',
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
  'unifunc' => 'content_53a89eac198412_07838858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a89eac198412_07838858')) {function content_53a89eac198412_07838858($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
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
