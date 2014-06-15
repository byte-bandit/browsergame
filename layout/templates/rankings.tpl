{include file="global_header.tpl"}
 
{foreach from = $rankings key = rank item = rankPlayer}
  <div class="panel panel-default">
    <div class="panel-body">
      {$rank + 1}
       - 
      <a href="profile.php?player={$rankPlayer.player_id}">
        {$rankPlayer.username}
      </a>
    </div>
  </div>
{/foreach}
 
{include file="global_footer.tpl"}