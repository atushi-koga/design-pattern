<?php
declare(strict_types=1);

namespace App\Composite\OrganizationComposite;

abstract class Organization
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $name;

    public function __construct(string $code, string $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    abstract public function add(self $addition): self;

    public function dump(): string
    {
        return "{$this->code}:{$this->name}";
    }
}