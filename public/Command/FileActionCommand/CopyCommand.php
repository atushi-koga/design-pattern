<?php
declare(strict_types=1);

namespace App\Command\FileActionCommand;

class CopyCommand implements FileActionCommand
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
        $new = new File("copy_of_{$this->file->name()}");
        $new->create();
    }
}