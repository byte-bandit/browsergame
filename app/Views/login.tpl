{include file="Parts/header.tpl"}
<form action="index.php?route=Login&action=login" method="post" class="form-inline">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required/>
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
{include file="Parts/footer.tpl"}