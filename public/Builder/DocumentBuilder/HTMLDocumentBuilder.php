<?php
declare(strict_types=1);

namespace App\Builder\DocumentBuilder;

class HTMLDocumentBuilder implements DocumentBuilder
{
    /** @var string */
    private $head = "";
    /** @var string */
    private $body = "";

    public function initialize(): void
    {
        $this->head = "";
        $this->body = "";
    }

    public function addTitle(string $title): void
    {
        $this->head = $title;
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
        $this->append("<h2>{$headline}</h2>");
    }

    private function appendContent(string $content): void
    {
        $this->append("<div>{$content}</div>");
    }

    private function append(string $item): void
    {
        $this->body .= $item;
    }

    public function build(): string
    {
        return <<<HTML
<!doctype html>
<head>{$this->head}</head>
<body>{$this->body}</body>
</html>
HTML;
    }
}