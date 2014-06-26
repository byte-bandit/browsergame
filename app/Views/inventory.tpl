{include file="Parts/header.tpl"}
 
<h3>Equipment</h3>
 
<h4>First weapon</h4>
{$player.firstWeapon.name}<br/>
<h4>Second weapon</h4>
{$player.secondWeapon.name}
<h4>Helmet</h4>
{$player.helmet.name}
<h4>Armour</h4>
{$player.armour.name}<br/>
<h4>Gloves</h4>
{$player.gloves.name}<br/>
<h4>Boots</h4>
{$player.boots.name}
 
<hr/>
<h3>Items</h3>
{foreach from = $warehouse item = item}
  <h3>{$items[$item.item_id].name} X {$item.quantity}</h3>
  <h4>{$items[$item.item_id].description}</h4>
  
  {if $items[$item.item_id]["wearable"]}
  <form action="index.php?route=Inventory&action=wear_item" method="post">
    <input type="hidden" name="wear" value="{$item.item_id}"/>
    <input type="submit" value="Equip" class="btn btn-default"/>
  </form>
  {elseif $items[$item.item_id]["usable"]}
  <form action="index.php?route=Inventory&action=use_item" method="post">
    <input type="hidden" name="use" value="{$item.item_id}"/>
    <input type="submit" value="Use" class="btn btn-default"/>
  </form>
  {/if}
  
{foreachelse}
  You don't have any items
{/foreach}
 
{include file="Parts/footer.tpl"}