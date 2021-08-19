<?php
declare(strict_types=1);

namespace Test\Builder;

use App\Builder\DocumentBuilder\DocumentDirector;
use App\Builder\DocumentBuilder\HTMLDocumentBuilder;
use App\Builder\DocumentBuilder\TextDocumentBuilder;
use PHPUnit\Framework\TestCase;

class DocumentBuilderTest extends TestCase
{
    public function testTextDocument()
    {
        $builder = new TextDocumentBuilder();
        $director = new DocumentDirector($builder);
        $expectedContent = <<<EOL
[Greeting]
朝から昼にかけて
・おはようございます
・こんにちは
夜に
・こんばんは
・おやすみなさい
・さようなら
EOL;

         $this->assertEquals(
             str_replace([' ', '　', "\t", "\n"], '', $expectedContent),
             str_replace([' ', '　', "\t", "\n"], '', $director->createDocument())
         );
    }

    public function testHTMLDocument()
    {
        $builder = new HTMLDocumentBuilder();
        $director = new DocumentDirector($builder);
        $expectedContent = <<<EOL
<!doctype html>
<head>Greeting</head>
<body>
  <h2>朝から昼にかけて</h2>
  <div>おはようございます</div>
  <div>こんにちは</div>
  <h2>夜に</h2>
  <div>こんばんは</div>
  <div>おやすみなさい</div>
  <div>さようなら</div>
</body>
</html>
EOL;

        $this->assertEquals(
            str_replace([' ', '　', "\t", "\n"], '', $expectedContent),
            str_replace([' ', '　', "\t", "\n"], '', $director->createDocument())
        );
    }
}
