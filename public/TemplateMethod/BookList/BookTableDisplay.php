<?php
declare(strict_types=1);

namespace App\TemplateMethod\BookList;

class BookTableDisplay extends BookDisplay
{
    protected function displayHeader(): string
    {
        return "<table>";
    }

    protected function displayBody(): string
    {
        $body = "";
        foreach ($this->bookTitles as $key => $title) {
            $body .= "<tr><th>{$key}</th><td>{$title}</td></tr>";
        }

        return $body;
    }

    protected function displayFooter(): string
    {
        return "</table>";
    }
}