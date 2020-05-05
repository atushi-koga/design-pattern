<?php
declare(strict_types=1);

namespace App\Adapter\File;

class DisplayPlainFile implements DisplayPlainFileInterface
{
    /**
     * @var ShowFile
     */
    private $showFile;

    public function __construct(string $fileName)
    {
        $this->showFile = new ShowFile($fileName);
    }

    public function display(): string
    {
        return $this->showFile->showPlain();
    }
}