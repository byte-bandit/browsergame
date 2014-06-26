{include file="Parts/header.tpl"}

{if $monster}
<h3>{$monster.name}</h3>
<img src="images/{$monster.image}"/><br>
Attack: {$monster.strength}<br/>
Def: {$monster.defense}<br/><br/>

{if ! $report}
<form action="index.php?route=Forest&action=fight" method="post">
    <input type="submit" name="fight" value="Fight"/>
</form><br/><br/>
{/if}
{else}
<h4>{$map.name}</h4>
{/if}

{if $report}
<div class="well">
{$report}
</div>
{/if}

<form action="index.php?route=Forest&action=explore" method="post">
    <input type="submit" name="explore" value="Explore"/>
</form>

{include file="Parts/footer.tpl"}