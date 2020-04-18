<?php
declare(strict_types=1);

namespace App\Builder\DocumentBuilder;

class DocumentDirector
{
    /**
     * @var DocumentBuilder
     */
    private $builder;

    public function __construct(DocumentBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createDocument(): string
    {
        $this->builder->addTitle('Greeting');
        $this->builder->addParagraph('朝から昼にかけて', 'おはようございます', 'こんにちは');
        $this->builder->addParagraph('夜に', 'こんばんは', 'おやすみなさい', 'さようなら');

        return $this->builder->build();
    }
}