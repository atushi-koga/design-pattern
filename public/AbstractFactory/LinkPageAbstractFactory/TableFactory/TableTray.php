<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\TableFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Tray;

class TableTray extends Tray
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
  <table>
    <tbody>{$itemHTML}</tbody>
  </table>
</div>
EOL;
    }
}