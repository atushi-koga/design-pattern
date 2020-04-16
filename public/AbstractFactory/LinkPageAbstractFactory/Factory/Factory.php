<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\Factory;

use App\AbstractFactory\LinkPageAbstractFactory\ListFactory\ListFactory;
use App\AbstractFactory\LinkPageAbstractFactory\TableFactory\TableFactory;
use InvalidArgumentException;

abstract class Factory
{
    public abstract function createLink(string $caption, string $url): Link;

    public abstract function createTray(string $caption): Tray;

    public abstract function createPage(string $title, string $author): Page;

    public static function getFactory(int $param): self
    {
        switch ($param) {
            case 1:
                return new ListFactory();
            case 2:
                return new TableFactory();
            default:
                throw new InvalidArgumentException('未定義のパラメータ');
        }
    }
}