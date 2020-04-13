<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

class DrawCommandInvoker
{
    /**
     * @var DrawMacroCommand
     */
    private $macroCommand;
    /**
     * @var Drawable
     */
    private $drawable;

    public function __construct(DrawMacroCommand $macroCommand, Drawable $drawable)
    {
        $this->macroCommand = $macroCommand;
        $this->drawable = $drawable;
    }

    public function mouseDragged(MouseEvent $event): void
    {
        $command = new DrawPointCommand($this->drawable, $event->point());
        $this->macroCommand->append($command);
        $command->execute();
    }

    public function repaint(): void
    {
        $this->macroCommand->execute();
    }
}