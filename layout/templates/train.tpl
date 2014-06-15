{include file="global_header.tpl"}
<p>Train daily to gain stats. You can train again: {$whenCanTrain}.</p>
 
{if $whenCanTrain eq "now"}
  <form method="post">
    <input type="submit" name="train" class="btn btn-default" value="Train now!"/>
  </form>
{/if}
{include file="global_footer.tpl"}