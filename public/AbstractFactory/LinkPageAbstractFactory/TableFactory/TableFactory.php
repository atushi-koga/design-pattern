<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\TableFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Factory;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Link;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Page;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Tray;

class TableFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new TableLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new TableTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new TablePage($title, $author);
    }
}