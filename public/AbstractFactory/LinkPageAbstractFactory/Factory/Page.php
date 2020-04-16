<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\Factory;

abstract class Page
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var Item[]
     */
    protected $contents = [];

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function add(Item $item): void
    {
        $this->contents[] = $item;
    }

    public function output(): void
    {
        echo $this->makeHtml();
    }

    abstract protected function makeHTML(): string;
}