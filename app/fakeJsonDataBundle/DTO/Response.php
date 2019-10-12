<?php

namespace fakeJsonDataBundle\DTO;

use fakeJsonDataBundle\Entity\EntityInterface;
use Illuminate\Http\JsonResponse;

class Response extends JsonResponse
{
    /**
     * @inheritDoc
     * @param EntityInterface[] $entityList
     */
    public function __construct(array $entityList, int $status = 200, array $headers = [])
    {
        $entityList = array_map([$this, 'entityToArray'], $entityList);
        return parent::__construct($entityList, $status, $headers);
    }

    /**
     * @param EntityInterface $entity
     * @return mixed[]
     */
    private function entityToArray(EntityInterface $entity)
    {
        return $entity->info();
    }
}
