<?php
declare(strict_types=1);

namespace App\Composite\OrganizationComposite;

class Employee extends Organization
{
    public function add(Organization $addition): Organization
    {
        throw new \BadMethodCallException("追加出来ません");
    }
}