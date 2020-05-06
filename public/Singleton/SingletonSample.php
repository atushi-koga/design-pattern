<?php
declare(strict_types=1);

namespace App\Singleton;

class SingletonSample
{
    /**
     * @var self
     */
    private static $instance;
    /**
     * @var string
     */
    private $id;

    private function __construct()
    {
        $this->id = hash('sha256', strval(time()));
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            $instance = new self();
            self::$instance = $instance;
        }

        return self::$instance;
    }

    public function id(): string
    {
        return $this->id;
    }

    public final function __clone()
    {
        throw new \RuntimeException("can not clone against:" . get_class($this));
    }
}