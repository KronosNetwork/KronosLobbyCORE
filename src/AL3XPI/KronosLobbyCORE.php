<?php

namespace AL3XPI;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

class KronosLobbyCORE extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("KronosLobbyCORE by AL3XPI Loading");
          }
          public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		    $this->getLogger()->info("Enabled KronosLobbyCORE by AL3XPI");
          }
          public function onDisable(){
                    $this->getLogger()->info("KronosLobbyCORE by AL3XPI disabled");
          }
	  public function onJoin(PlayerJoinEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$this->getServer()->broadcastMessage(C::GREEN."[+]$name");
	}
}
