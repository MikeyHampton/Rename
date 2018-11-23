<?php
namespace Main;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements Listener{
    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("This Plugin Is Custom And Not Public You Can Buy This Plugin By Contacting Me On Discord: MikeyHampton#5530");
    }
    public function onDisable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("This Plugin Is Custom And Not Public You Can Buy This Plugin By Contacting Me On Discord: MikeyHampton#5530");
    }
}
