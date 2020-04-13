<?php
declare(strict_types=1);

namespace App\Strategy\ReadFileStrategy;

use RuntimeException;

abstract class ReadFileStrategy
{
    /**
     * @var string
     */
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @param string $fileName
     * @return Item[]
     */
    protected abstract function getContent(string $fileName): array;

    /**
     * @return Item[]
     */
    public function getContentOrFail(): array
    {
        if (!is_readable($this->fileName)) {
            throw new RuntimeException("file {$this->fileName} is not readable");
        }

        return $this->getContent($this->fileName);
    }
}