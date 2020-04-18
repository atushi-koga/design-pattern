<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\TableFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Link;

class TableLink extends Link
{
    public function makeHTML(): string
    {
        return <<<HTML
<tr><a href="{$this->url}">{$this->caption}</a></tr>
HTML;

    }
}