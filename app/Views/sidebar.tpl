<div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php?route=Home&action=index">Home</a><li>
      {if !$logged}
        <li><a href="index.php?route=Register&action=index">Register</a></li>
        <li><a href="index.php?route=Login&action=index">Login</a></li>
      {else}
        <li><a href="index.php?route=Inventory&action=index">Inventory</a></li>
        <li><a href="index.php?route=Train&action=index">Train</a></li>
        <li><a href="index.php?route=Forest&action=index">Forest</a></li>
        <li><a href="index.php?route=Shop&action=index">Shop</a></li>
        <li><a href="index.php?route=Profile&action=index">Profile</a></li>
        <li><a href="index.php?route=Rankings&action=index">Rankings</a></li>
        <li><a href="index.php?route=Logout&action=logout">Logout</a></li>
      {/if}
    </ul>
  </div>
</div>