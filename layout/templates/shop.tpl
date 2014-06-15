{include file="global_header.tpl"}
 
<h4>Item shop</h4>
 
{foreach from = $items key = item_id item = item}
  {if $item.price}
    <div class="row">
      <div class="col-md-3 text-center">
        <br><br><img src="layout/images/{$item.image}"/>
      </div>
      <div class="col-md-9" style="border=1; border-radius=1em; background-color=#335599;">
        <h3>{$item.name}</h3>
        <p>{$item.description}</p>
        <h4>{$item.price|number_format} currency</h4>
        <form method="post">
          <input type="hidden" name="buy" value="{$item_id}"/>
          <input type="submit" value="Buy" class="btn btn-info"/>
        </form>
      </div>
    </div>
  {/if}
{/foreach}
 
{include file="global_footer.tpl"}