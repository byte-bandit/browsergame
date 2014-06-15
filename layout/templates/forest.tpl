{include file="global_header.tpl"}
 
{if $monster}
  <h3>{$monster.name}</h3>
  <img src="layout/images/{$monster.image}"/><br>
  Attack: {$monster.strength}<br/>
  Def: {$monster.defense}<br/><br/>
  
  <form method="post">
    <input type="submit" name="fight" value="Fight"/>
  </form><br/><br/>
{else}
  <h4>{$map.name}</h4>
{/if}
 
{if $report}
  <div class="well">
    {$report}
  </div>
{/if}
 
<form method="post">
  <input type="submit" name="explore" value="Explore"/>
</form>
 
{include file="global_footer.tpl"}