<?php
declare(strict_types=1);

namespace tests\Composite;

use App\Composite\OrganizationComposite\Department;
use App\Composite\OrganizationComposite\Employee;
use PHPUnit\Framework\TestCase;

class OrganizationCompositeTest extends TestCase
{
    public function testComposite()
    {
        $sales1 = new Department('A001', '第一営業部', []);
        $sales1 = $sales1->add(new Employee('1001', '田中 一郎'));
        $sales1 = $sales1->add(new Employee('1002', '佐藤 一郎'));

        $sales2 = new Department('A002', '第二営業部', []);
        $sales2 = $sales2->add(new Employee('1003', '田中 二郎'));
        $sales2 = $sales2->add(new Employee('1004', '佐藤 二郎'));

        $sales3 = new Department('A003', '第三営業部', []);
        $sales3 = $sales3->add(new Employee('1005', '田中 三郎'));
        $sales3 = $sales3->add(new Employee('1006', '佐藤 三郎'));

        $salesDepartments = $sales1->add($sales2)
            ->add($sales3);

        $expectedContent = <<<EOL
A001:第一営業部
1001:田中 一郎
1002:佐藤 一郎
A002:第二営業部
1003:田中 二郎
1004:佐藤 二郎
A003:第三営業部
1005:田中 三郎
1006:佐藤 三郎
EOL;

        $this->assertEquals(
            str_replace(["\n", " ",], '', $expectedContent),
            str_replace(["\n", " ",], '', $salesDepartments->dump())
        );
    }
}