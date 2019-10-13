<?php

namespace fakeJsonDataBundle\Client\Service;

use fakeJsonDataBundle\Client\Entity\Client;
use fakeJsonDataBundle\Entity\EntityInterface;
use fakeJsonDataBundle\Service\RandomGeneratorInterface;
use Illuminate\Support\Collection;

class Random implements RandomGeneratorInterface
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

    /**
     * @inheritDoc
     * @return Client
     */
    public function generate(): EntityInterface
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
