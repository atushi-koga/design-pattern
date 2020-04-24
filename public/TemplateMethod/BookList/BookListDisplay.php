<?php
declare(strict_types=1);

namespace App\TemplateMethod\BookList;

class BookListDisplay extends BookDisplay
{
    protected function displayHeader(): string
    {
        return "<ul>";
    }

    protected function displayBody(): string
    {
        $body = "";
        foreach ($this->bookTitles as $title) {
            $body .= "<li>{$title}</li>";
        }

        return $body;
    }

    protected function displayFooter(): string
    {
        return "</ul>";
    }
}