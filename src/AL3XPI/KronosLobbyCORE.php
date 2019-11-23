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

use pocketmine\command\Command;

use pocketmine\command\ComamndSender;

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
		$command = '1vs1 join';
		$this->getServer()->dispatchCommand($event->getPlayer(), $command); // Dispatch the command;
	 	}
    	 }
  	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    	$commandName = $command->getName();
    	if($commandName === "nick"){
	this->openNickForm($sender);
		
	}
      	return true;
    	}
    	return false;
  	}
}
