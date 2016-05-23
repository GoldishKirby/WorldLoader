<?php

namespace Goldish\WorldLoader;

use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;

class WorldLoader extends PluginBase {
  
  public function onEnable(){
     $this->getLogger()->info(TextFormat::AQUA . "WorldLoader loaded.");
         
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  	$cmd = strtolower($command->getName());
	switch($cmd){
		case "loadworlds":
		       foreach($this->getServer()->getLevels() as $level) {
         $this->getServer()->loadLevel($level);
                       }
        }
  }
  }
}
