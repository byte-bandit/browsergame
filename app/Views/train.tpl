{include file="Parts/header.tpl"}
<p>Train daily to gain stats. You can train again: {$whenCanTrain}.</p>
 
{if $whenCanTrain eq "now"}
  <form action="index.php?route=Train&action=train" method="post">
    <input type="submit" name="train" class="btn btn-default" value="Train now!"/>
  </form>
{/if}
{include file="Parts/footer.tpl"}