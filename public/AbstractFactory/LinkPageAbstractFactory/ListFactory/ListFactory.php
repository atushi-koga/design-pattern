<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\ListFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Factory;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Link;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Page;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Tray;

class ListFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new ListLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new ListTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new ListPage($title, $author);
    }
}