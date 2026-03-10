<?php

namespace App;

class Config
{
    private static ?Config $instance = null;
    private array $config;

    private function __construct()
    {
        $this->config = require __DIR__ . '/../config/config.php';
    }

    public static function getInstance(): static
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function get(string $key): mixed
    {
        return $this->config[$key] ?? null;
    }
}