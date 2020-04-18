<?php
declare(strict_types=1);

namespace App\Builder\DocumentBuilder;

interface DocumentBuilder
{
    public function initialize(): void;

    public function addTitle(string $title): void;

    public function addParagraph(string $headline, string...$contents): void;

    public function build(): string;
}