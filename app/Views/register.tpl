{include file="Parts/header.tpl"}
<form action="index.php?route=Register&action=register" method="post">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="email" name="email" placeholder="Email" class="form-control" required/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required maxlength="25"/>
  <input type="submit" value="Register" name="register" class="btn btn-default"/>
</form>
{include file="Parts/footer.tpl"}