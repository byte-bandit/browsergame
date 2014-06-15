<div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php">Home</a><li>
      {if !$logged}
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      {else}
        <li><a href="warehouse.php">Inventory</a></li>
        <li><a href="train.php">Train</a></li>
        <li><a href="forest.php">Forest</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="profile.php">My profile</a></li>
        <li><a href="rankings.php">Rankings</a></li>
        <li><a href="logout.php">Logout</a></li>
      {/if}
    </ul>
  </div>
</div>