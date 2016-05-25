<?php

namespace Goldish\WorldLoader;

use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;
//You Forgot To Add:
use pocketmine\utils\TextFormat;

class WorldLoader extends PluginBase {
  
  	public function onEnable(){
		$this->getLogger()->info(TextFormat::AQUA . "WorldLoader loaded.");
         
		 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  			$cmd = strtolower($command->getName());
			switch($cmd){
				case "loadworlds":
	        	           $sender->sendMessage(TextFormat::AQUA . "[WorldLoader]" . TextFormat::YELLOW . " All worlds has been loaded.");
	                    
	                	    //lol i just want to simplify it
	                	    $levels = $this->getServer()->getLevels();
					foreach($levels as $level) {
	        			 $this->getServer()->loadLevel($level);
	                		}
                		break;
			}
		}
  	}	
}
