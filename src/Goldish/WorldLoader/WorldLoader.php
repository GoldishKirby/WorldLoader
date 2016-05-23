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
                    $sender->sendMessage(TextFormat::AQUA . "[WorldLoader]" . TextFormat::YELLOW . " All worlds has been loaded.");
		       foreach($this->getServer()->getLevels() as $level) {
         $this->getServer()->loadLevel($level);
         break;
                       }
        }
  }
  }
}
