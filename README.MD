## Description
This plugin has a Only Proxy Connect implementation, where if you join a specific server, and not the proxy, it'll kick you within the correct reason. This plugin also adds the feature to send players to the proxy IP. This can be changed in the config.yml.


## How does this plugin work?
We support WaterDog proxy. Waterdog, is a proxy, which is a fork of the well known Bungeecord for Java Edition. Waterdog doesn't just implement Java Edition support, but it also adds Bedrock edition support as well. (If you do it correctly.)

If a player decides to join the proxy server, the getAddress() changes to the proxy server IP. Though, the IP doesn't change of the player, but changes to the proxy IP. All proxy ips are very different, which is more reliable than getXUID(), since that can generate a fake XUID, which is bypassable. This is why I've decided to make this change. And for the better as well.


## Detailing the plugin
The getAddress() function changes to the player's IP, but it isn't their real IP. In a sense, the Proxy changes the Player's IP to the proxied IP, depending on location, and host you use.
Just note that The Server's ip and the proxy IP are different. For example: If you enter the IP: 10.10.10.10 as the server IP, this wouldn't be your proxy IP as to where you enter the Proxy-IP in the config.yml file. If you're planning to set a network, please make sure to check all the servers after making the proxy first before retaining the IP of the proxy.

## API methods:
There's two ways of implementing and retaining API methods within this plugin. 1. You can use:
```php
Loader::getAPI();
```
Which is an API static function, in which you can use for any future API methoding that doesn't add static functions.

2. You can go straight into the API methods. Since they're all static.
Here are the following API methods, and how they work:
```php
Loader::transferServer($player, (string)$serverName);
```
Arguments with the function:
`$player` is an instanceof Player::class.
`$serverName` is a string, and calls the server name that the proxy has configured.

This function allows you to transfer from one server to another. And the good news, is this doesn't require the Locating server screen, in which can take a while for the user. This API method introduces a way to instantly transfer from one server to another, by using the "Building terrain" screen, which is less buggy, and less likely to break than Locating server. Because "Building terrain" is a lot smoother, and quicker than the old methods.

```php
Loader::sendMessage((string)$playerName, (string)$message);
```
Arguments with this function:
`$playerName` is a string, which includes the Player name you want to transfer.
`$message` is a string text, message the specific player after or before transfer. So it's cross-compatible between servers within the proxy.

This function allows you to send a message to the specific player after or before transfer is complete (Most preferably after transfer is complete).


## Comparisons
Unlike other NoProxy plugins, we offer more configurable options. We offer support for many customisations, and options to automatically send you to the Proxy using Instant transfers. No, we don't use pocketmine's methods of transferring anymore. We simply use API methods to detect the player's transferring to one server and another. By doing this, the plugin's more reliable than other No-Proxy plugins. Want to use a OnlyProxyJoin plugin, but not configurable enough to your likings? Think no more! We offer it right here. Probably the most configurable OnlyProxyJoin plugin to ever exist on Pocketmine. (As research has been done).

## Requirements of this plugin
For the plugin to work functonality wise, you'll need to get the WaterDog proxy software. You can grab the latest download link using the link provided here: https://ci.codemc.org/job/yesdog/job/Waterdog/
