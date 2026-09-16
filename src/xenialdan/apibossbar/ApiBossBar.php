<?php

declare(strict_types=1);

namespace xenialdan\apibossbar;

use pocketmine\plugin\PluginBase;

class ApiBossBar extends PluginBase
{
    protected function onEnable() : void
    {
        $this->getLogger()->info("apibossbar plugin enabled!");
    }

    protected function onDisable() : void
    {
        $this->getLogger()->info("apibossbar plugin disabled!");
    }
}