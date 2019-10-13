<?php

namespace fakeJsonDataBundle\Order\Service;

use fakeJsonDataBundle\Entity\EntityInterface;
use fakeJsonDataBundle\Order\Entity\Order;
use fakeJsonDataBundle\Service\RandomGeneratorInterface;


class Random implements RandomGeneratorInterface
{
    /**
     * @inheritDoc
     */
    public function generate(): EntityInterface
    {
        return (new Order())
            ->setClientId($this->clientId())
            ->setSum($this->sum())
            ->setDate($this->date());
    }

    /**
     * @return string
     */
    public function clientId(): string
    {
        return rand(1, 100);
    }

    /**
     * @return int
     */
    public function sum(): int
    {
        return rand(100, 100000);
    }

    /**
     * @return string
     */
    public function date(): string
    {
        return date('Y-m-d');
    }
}
