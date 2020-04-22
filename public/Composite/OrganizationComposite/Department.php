<?php
declare(strict_types=1);

namespace App\Composite\OrganizationComposite;

class Department extends Organization
{
    /**
     * @var Organization[]
     */
    private $organizations;

    public function __construct(string $code, string $name, array $organizations)
    {
        parent::__construct($code, $name);
        $this->organizations = $organizations;
    }

    public function add(Organization $addition): Organization
    {
        $stack = $this->organizations;
        $stack[] = $addition;
        return new self($this->code, $this->name, $stack);
    }

    public function dump(): string
    {
        $expression = parent::dump();
        foreach ($this->organizations as $organization) {
            $expression .= $organization->dump();
        }

        return $expression;
    }
}