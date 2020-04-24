<?php
declare(strict_types=1);

namespace tests\TemplateMethod;

use App\TemplateMethod\BookList\BookListDisplay;
use App\TemplateMethod\BookList\BookTableDisplay;
use PHPUnit\Framework\TestCase;

class BookDisplayTest  extends TestCase
{
    public function testListDisplay()
    {
        $bookTitles = [
            'design pattern',
            'gang of four',
            'refactoring',
        ];
        $expectedContent = <<<EOL
<ul>
  <li>design pattern</li>
  <li>gang of four</li>
  <li>refactoring</li>
</ul>
EOL;
;

        $this->assertEquals(
            str_replace(["\n", " ",], '', $expectedContent),
            str_replace(["\n", " ",], '', (new BookListDisplay($bookTitles))->display())
        );
    }

    public function testTableDisplay()
    {
        $bookTitles = [
            'design pattern',
            'gang of four',
            'refactoring',
        ];
        $expectedContent = <<<EOL
<table>
  <tr><th>0</th><td>design pattern</td></tr>
  <tr><th>1</th><td>gang of four</td></tr>
  <tr><th>2</th><td>refactoring</td></tr>
</table>
EOL;
        ;

        $this->assertEquals(
            str_replace(["\n", " ",], '', $expectedContent),
            str_replace(["\n", " ",], '', (new BookTableDisplay($bookTitles))->display())
        );
    }
}