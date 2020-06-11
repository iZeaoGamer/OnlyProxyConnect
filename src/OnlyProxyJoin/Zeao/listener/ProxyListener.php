<?php 
declare(strict_types=1);

namespace OnlyProxyJoin\Zeao\listener;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use OnlyProxyJoin\Zeao\Loader;

class ProxyListener implements Listener{
	
    private $plugin;
	
    public function __construct(Loader $plugin){
        $this->plugin = $plugin;
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		if($player->getXuid() !== ""){
			if($this->plugin->getConfig()->get("Send-To-Proxy-On-Kick")){
				$server = $this->plugin->getConfig()->get("Proxy-IP");
				$player->transfer($server, 19132);
				return;
			}else{
				$player->close("", TextFormat::colorize($this->plugin->getConfig()->get("Kick-Message")));
				return;
			}
		}
	}
}
