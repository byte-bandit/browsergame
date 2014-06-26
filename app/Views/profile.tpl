{include file="Parts/header.tpl"}
 
<h4>{$profile.username}</h4>
I am level {$profile.level}.<br/><br/>
Nice to meet you!
 
{if $profile.player_id != $player.player_id}
 
  {if $report}
    <div class="well">
      {$report}
    </div>
  {else}
    <p>
      <form action="index.php?route=Profile&action=attack&player={$profile.player_id}" method="post">
        <input type="submit" value="Attack" name="attack"/>
      </form>
    </p>
  {/if}
{/if}
 
{include file="Parts/footer.tpl"}