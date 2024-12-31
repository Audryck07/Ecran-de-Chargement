<?php

namespace Visuel;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class EcranDeChargement extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $player->sendMessage(TextFormat::YELLOW . "Bienvenue sur le serveur !");
        $player->sendMessage(TextFormat::AQUA . "Veuillez patienter pendant le chargement...");
    }
}
