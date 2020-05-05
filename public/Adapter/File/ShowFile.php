<?php
declare(strict_types=1);

namespace App\Adapter\File;

class ShowFile
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        if (!is_readable($filePath)) {
            throw new \InvalidArgumentException("file is not readable:{$filePath}");
        }
        $this->filePath = $filePath;
    }

    public function showPlain(): string
    {
        return file_get_contents($this->filePath, true);
    }

    public function showHighlight(): string
    {
        return highlight_file($this->filePath);
    }
}