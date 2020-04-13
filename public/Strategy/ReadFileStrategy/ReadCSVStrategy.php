<?php
declare(strict_types=1);

namespace App\Strategy\ReadFileStrategy;

use DateTimeImmutable;
use Exception;
use stdClass;

class ReadCSVStrategy extends ReadFileStrategy
{
    /**
     * @param string $fileName
     * @return Item[]
     * @throws Exception
     */
    protected function getContent(string $fileName): array
    {
        $fp = fopen($fileName, 'r');

        // ヘッダ行を除外
        fgets($fp, 4096);

        $items = [];
        while ($buffer = fgets($fp, 4096)) {
            list($name, $code, $price, $releaseDate) = explode(",", $buffer);
            $items[] = new Item($name, $code, (int)$price, new DateTimeImmutable($releaseDate));
        }
        fclose($fp);

        return $items;
    }
}