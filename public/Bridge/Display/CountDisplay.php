<?php
declare(strict_types=1);

namespace App\Bridge\Display;

class CountDisplay extends Display
{
    public function multiDisplay(int $count): void
    {
        $this->open();
        for ($i = 0; $i < $count; $i++) {
            $this->print();
        }
        $this->close();
    }
}