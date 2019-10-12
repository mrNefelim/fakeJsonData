<?php

namespace fakeJsonDataBundle\Client\Service;

use fakeJsonDataBundle\Client\Entity\Client;
use Illuminate\Support\Collection;

class RandomClient
{
    /**
     * @var  Collection
     */
    static $names;

    /**
     * @var Collection
     */
    static $surnames;

    public function __construct()
    {
        self::$names = collect(['Василий', 'Артем', 'Петр', 'Влад']);
        self::$surnames = collect(['Петров', 'Леонов', 'Листьев', 'Ильин']);
    }

    public function generate(): Client
    {
        return (new Client())
            ->setName($this->fullName())
            ->setPhone($this->number());
    }

    /**
     * @return string
     */
    public function fullName(): string
    {
        return $this->name() . ' ' . $this->surname();
    }

    /**
     * @return string
     */
    private function name(): string
    {
        return self::$names->random();
    }

    /**
     * @return string
     */
    private function surname(): string
    {
        return self::$surnames->random();
    }

    /**
     * @return string
     */
    public function number(): string
    {
        return sprintf('8927%s', rand(1000000, 9000000));
    }
}
