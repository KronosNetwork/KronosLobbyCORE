<?php

namespace KronosLobbyCORE;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

use pocketmine\event\player\PlayerItemHeldEvent;

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
   		$event->setJoinMessage(C::GREEN."[+]$name");
         }
	 public function onItemHeld(PlayerItemHeldEvent $event){
		if($item->getId() === Item::STICK){
		$command = '1vs1 join'; // You can get this command from config or whatever you want
		$this->getServer()->dispatchCommand($event->getPlayer(), $command); // Dispatch the command;
	 }
    }
}
