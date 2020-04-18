<?php
declare(strict_types=1);

namespace tests\AbstractFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Factory;
use PHPUnit\Framework\TestCase;

class LinkPageAbstractFactoryTest extends TestCase
{
    public function testListLink()
    {
        $factory = Factory::getFactory(1);
        $asahiLink = $factory->createLink('朝日新聞', 'https://www.asahi.com/');
        $yomiuriLink = $factory->createLink('読売新聞', 'https://www.yomiuri.co.jp/');
        $tray = $factory->createTray('新聞');
        $tray->add($asahiLink);
        $tray->add($yomiuriLink);
        $page = $factory->createPage('LinkPage', 'author');
        $page->add($tray);

        $expected = <<<HTML
<!doctype html>
  <head>
    <title>LinkPage</title>
  </head>
  <body>
    <div>
      <div>新聞</div>
      <ul>
        <li><a href="https://www.asahi.com/">朝日新聞</a></li>
        <li><a href="https://www.yomiuri.co.jp/">読売新聞</a></li>
      </ul>
    </div>
  </body>
</html>
HTML;

        ob_start();
        $page->output();
        $this->assertEquals(
            str_replace([' ', '　', "\t", "\n"], '', $expected),
            str_replace([' ', '　', "\t", "\n"], '', ob_get_clean())
        );
    }

    public function testTableLink()
    {
        $factory = Factory::getFactory(2);
        $asahiLink = $factory->createLink('朝日新聞', 'https://www.asahi.com/');
        $yomiuriLink = $factory->createLink('読売新聞', 'https://www.yomiuri.co.jp/');
        $tray = $factory->createTray('新聞');
        $tray->add($asahiLink);
        $tray->add($yomiuriLink);
        $page = $factory->createPage('TablePage', 'author');
        $page->add($tray);

        $expected = <<<HTML
<!doctype html>
  <head>
    <title>TablePage</title>
  </head>
  <body>
    <div>
      <div>新聞</div>
      <table>
        <tbody>
          <tr><a href="https://www.asahi.com/">朝日新聞</a></tr>
          <tr><a href="https://www.yomiuri.co.jp/">読売新聞</a></tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
HTML;

        ob_start();
        $page->output();
        $this->assertEquals(
            str_replace([' ', '　', "\t", "\n"], '', $expected),
            str_replace([' ', '　', "\t", "\n"], '', ob_get_clean())
        );
    }
}