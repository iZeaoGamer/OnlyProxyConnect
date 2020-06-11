<?php 
declare(strict_types=1);

namespace OnlyProxyConnect\Zeao\listener;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use OnlyProxyConnect\Zeao\Loader;

class ProxyListener implements Listener{
	
    private $plugin;
	
    public function __construct(Loader $plugin){
        $this->plugin = $plugin;
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$ip = $this->plugin->getConfig()->get("Proxy-IP");
		if($player->getAddress() !== $ip){
			if($this->plugin->getConfig()->get("Send-To-Proxy-On-Kick")){
				$server = $this->plugin->getConfig()->get("Proxy-Name");
				Loader::transferServer($player, $server);
				//if($this->plugin->getConfig()->get("Send-Proxy-Error-Message")){
					$message = $this->plugin->getConfig()->get("Proxy-Message");
					Loader::sendMessage($player->getName(), TextFormat::colorize($message));
			//	}
				return;
			}else{
				$player->close("", TextFormat::colorize($this->plugin->getConfig()->get("Proxy-Message")));
				return;
			}
		}
	}
}
