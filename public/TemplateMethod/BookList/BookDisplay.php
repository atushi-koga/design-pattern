<?php
declare(strict_types=1);

namespace App\TemplateMethod\BookList;

abstract class BookDisplay
{
    /**
     * @var array
     */
    protected $bookTitles;

    public function __construct(array $bookTitles)
    {
        $this->bookTitles = $bookTitles;
    }

    abstract protected function displayHeader(): string;

    abstract protected function displayBody(): string;

    abstract protected function displayFooter(): string;

    public function display(): string
    {
        return <<<EOL
{$this->displayHeader()}
{$this->displayBody()}
{$this->displayFooter()}
EOL;

    }
}