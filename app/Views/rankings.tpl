{include file="Parts/header.tpl"}
 
{foreach from = $rankings key = rank item = rankPlayer}
  <div class="panel panel-default">
    <div class="panel-body">
      {$rank + 1}
       - 
      <a href="index.php?route=Profile&action=index&player={$rankPlayer.player_id}">
        {$rankPlayer.username}
      </a>
    </div>
  </div>
{/foreach}
 
{include file="Parts/footer.tpl"}