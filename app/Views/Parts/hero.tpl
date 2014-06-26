<div class="panel panel-default">
  <div class="panel-body">
    <b>{$player.username}</b>
    <br>
    <img src="images/player/base/human_m.png" \>
    <ul class="nav nav-pills nav-stacked">
      <li>Level: {$player.level}</li>
      <li>Exp: {$player.exp}/{$player.expNext}</li>
      <li>Health {$player.health}/{$player.maxHealth}</li>
      <li>Energy {$player.energy}/{$player.maxEnergy}</li>
      <li>STR {$player.str}</li>
      <li>DEX {$player.dex}</li>
      <li>INT {$player.int}</li>
      <li>Gold {$player.money|number_format}</li>
    </ul>
    <div class="well">
      {if $player.pet}
        {$player.pet}
      {else}
        No pet
      {/if}
    </div>
  </div>
</div>