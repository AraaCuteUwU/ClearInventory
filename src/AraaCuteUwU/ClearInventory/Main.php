
<?php

namespace AraaCuteUwU\ClearInventory;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\ItemFactory;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase {
	
	public function onEnable(): void {
		$this->getLogger()->info("Plugin Enable");
	}
	
	public function onCommand(CommandSender $player, Command $cmd, String $label, Array $args): bool {
		switch($cmd->getName()){
			case "clearinventory":
			if(!$player instanceof Player) {
				return true;
			}
			$count = 0;
			foreach($player->getInventory()->getContents() as $index => $item){
				$player->getInventory()->setItem($index, ItemFactory::air());
				$player->
				$count++;
			}
			$player->sendMessage(TF::GREEN . $count . " item(s) was cleared from your inventory");
			return true;
		}
	}
}
