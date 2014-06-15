{include file="global_header.tpl"}
 
<h4>Welcome, {$player.username}!</h4>
You're level {$player.level}<br/>
Experience {$player.exp}/{$player.expNext}<br/>
Health {$player.health}/{$player.maxHealth}<br/>
Energy {$player.energy}/{$player.maxEnergy}<br/>
STR {$player.str}<br/>
DEX {$player.dex}<br/>
INT {$player.int}<br/>
Money {$player.money|number_format}
 
{include file="global_footer.tpl"}