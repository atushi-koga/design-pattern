<?php
declare(strict_types=1);

namespace App\Builder\DocumentBuilder;

class TextDocumentBuilder implements DocumentBuilder
{
    /** @var string */
    private $title = "";
    private $body  = "";

    public function initialize(): void
    {
        $this->title = "";
        $this->body = "";
    }

    public function addTitle(string $title): void
    {
        $this->title = $title;
    }

    public function addParagraph(string $headline, string...$contents): void
    {
        $this->appendHeadline($headline);
        foreach ($contents as $content) {
            $this->appendContent($content);
        }
    }

    public function appendHeadline(string $headline): void
    {
        $this->append("{$headline}\n");
    }

    private function appendContent(string $content): void
    {
        $this->append("・{$content}\n");
    }

    private function append(string $item): void
    {
        $this->body .= $item;
    }

    public function build(): string
    {
        return <<<EOL
[{$this->title}]
{$this->body}
EOL;
    }
}