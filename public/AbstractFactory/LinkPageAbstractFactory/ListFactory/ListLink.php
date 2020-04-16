<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\ListFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Link;

class ListLink extends Link
{
    public function makeHTML(): string
    {
        return <<<EOL
<li>
  <a href="{$this->url}">{$this->caption}</a>
</li>
EOL;
    }
}