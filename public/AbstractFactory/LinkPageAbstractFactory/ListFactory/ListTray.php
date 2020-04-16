<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\ListFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Tray;

class ListTray extends Tray
{
    public function makeHTML(): string
    {
        $itemHTML = "";
        foreach($this->tray as $item){
            $itemHTML .= $item->makeHTML();
        }

        return <<<EOL
<div>
  <div>{$this->caption}</div>
  <ul>{$itemHTML}</ul>
</div>
EOL;

    }
}