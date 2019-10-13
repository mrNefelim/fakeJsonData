<?php


namespace fakeJsonDataBundle\Service;


use fakeJsonDataBundle\Entity\EntityInterface;

interface RandomGeneratorInterface
{
    public function generate(): EntityInterface;
}
