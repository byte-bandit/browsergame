{include file="global_header.tpl"}
<form method="post">
  <input type="text" name="username" placeholder="Username" class="form-control" required maxlength="25"/>
  <input type="email" name="email" placeholder="Email" class="form-control" required/>
  <input type="password" name="password" placeholder="Pass" class="form-control" required maxlength="25"/>
  <input type="submit" value="Register" name="register" class="btn btn-default"/>
</form>
{include file="global_footer.tpl"}