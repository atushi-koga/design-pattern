<?php
declare(strict_types=1);

namespace App\Command\FileActionCommand;

class File
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function decompress(): void
    {
        echo "{$this->name}を展開しました\n";
    }

    public function compress(): void
    {
        echo "{$this->name}を圧縮しました\n";
    }

    public function create(): void
    {
        echo "{$this->name}を作成しました\n";
    }
}