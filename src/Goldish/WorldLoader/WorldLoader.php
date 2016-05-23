<?php

namespace Goldish\WorldLoader;

use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;

class WorldLoader extends PluginBase {
  
  public function onEnable(){
     $this->getLogger()->info(TextFormat::AQUA . "All worlds has been automatically loaded.");
     foreach($this->getServer()->getLevels() as $level) {
         $this->getServer()->loadLevel($level);
     }
  }
