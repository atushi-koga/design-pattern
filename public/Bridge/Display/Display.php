<?php
declare(strict_types=1);

namespace App\Bridge\Display;

class Display
{
    /**
     * @var DisplayImpl
     */
    private $displayImpl;

    public function __construct(DisplayImpl $displayImpl)
    {
        $this->displayImpl = $displayImpl;
    }

    protected function open(): void
    {
        $this->displayImpl->open();
    }

    protected function print(): void
    {
        $this->displayImpl->print();
    }

    protected function close(): void
    {
        $this->displayImpl->close();
    }

    public final function display(): void
    {
        $this->open();
        $this->print();
        $this->close();
    }
}