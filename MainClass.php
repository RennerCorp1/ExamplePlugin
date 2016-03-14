<?php

namespace ExamplePlugin;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase implements Listener{

	public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . "I've been loaded!");
	}

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new BroadcastPluginTask($this), 120);
		$this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
    }

	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
	}


   public function ScoreboardStats()
     $this->$Name = $players->getPlayer()->getName();
 		 $this->$Money = $this->EconomyS->mymoney($Name);
      $this->$Death = PlayerDeathEvent->Death(Death);
      $this->$Kills = PlayerKillsEvent->Kills(Kills)
      $this->$players->sendTip(" §b« §7ScoreKill §b »\n §eMEMBER:§b $Name !\n §aMoney:§f $Money §e\Kills:  $Kills \ Death: $Death ");
    
	
}
