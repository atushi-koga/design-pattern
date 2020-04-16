<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\ListFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Page;

class ListPage extends Page
{
    protected function makeHTML(): string
    {
        $contentHTML = "";
        foreach($this->contents as $content){
            $contentHTML .= $content->makeHTML();
        }

        return <<<EOL
<!doctype html>
<head>
  <title>{$this->title}</title>
</head>
<body>{$contentHTML}</body>
</html>
EOL;

    }
}