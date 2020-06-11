## Description
This plugin has a No Proxy implementation, where if you join a specific server, and not the proxy, it'll kick you within the correct reason. This plugin also adds the feature to send players to the proxy IP. This can be changed in the config.yml.


## How does this plugin work?
We support WaterDog proxy. Waterdog, is a proxy, which is a fork of the well known Bungeecord for Java Edition. Waterdog doesn't just implement Java Edition support, but it also adds Bedrock edition support as well. (If you do it correctly.)

If a player decides to join via the proxy, then the Xbox Unique ID will be empty. It's empty because WaterDog requires Xbox Auth to false in server.properties. This simply disables checking for Xbox live authentication chain, which is used as an XUID to join the server. By default, if the player is authenticated to Xbox Live, the XUID is generated when on the server. If you disable Xbox Live auth in the server.properties, then XUID won't be generated because it's not checking to see if the player is authenticated to Xbox Live. You could also say this plugin is a anti-hack system, based on players being able to join using a direct ip, which can be used to hack into other people's accounts. (Possibly). In this plugin, we use XBox Unique Identity. It checks to see if it's empty or not. If it's not empty, it'll kick the player with the proxy disconnected message (Which you can change in the config.yml file.) Because the Proxy disables XUID because of how it authenticates players.


## Comparisons
Unlike other NoProxy plugins, we check for Xbox Unique Identity. Other plugins check for IP Addresses of the player, which is not reliable.

## Requirements of this plugin
For the plugin to work functonality wise, you'll need to get the WaterDog proxy software. You can grab the latest download link using the link provided here: https://ci.codemc.org/job/yesdog/job/Waterdog/
