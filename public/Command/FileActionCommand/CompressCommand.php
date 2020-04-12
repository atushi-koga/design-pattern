<?php
declare(strict_types=1);

namespace App\Command\FileActionCommand;

class CompressCommand implements FileActionCommand
{
    /**
     * @var File
     */
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function execute(): void
    {
        $this->file->compress();
    }
}