<?php
declare(strict_types=1);

namespace App\Strategy\ReadFileStrategy;

class ReadFileContext
{
    /**
     * @var ReadFileStrategy
     */
    private $strategy;

    public function __construct(ReadFileStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return Item[]
     */
    public function action(): array
    {
        return $this->strategy->getContentOrFail();
    }
}