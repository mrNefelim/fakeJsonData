<?php


namespace fakeJsonDataBundle\Service;


use fakeJsonDataBundle\Entity\EntityInterface;
use Illuminate\Http\Request;

class RandomGeneratorList
{
    /**
     * @var RandomGeneratorInterface
     */
    private $randomGenerator;

    public function entity(RandomGeneratorInterface $randomGenerator)
    {
        $this->randomGenerator = $randomGenerator;

        return $this;
    }

    /**
     * @param Request $request
     * @return EntityInterface[]
     */
    public function generate(Request $request)
    {
        $iterationCount = $request->id ?? 3;
        $list = array_map([$this, 'entityGenerate'], range(1, $iterationCount));

        return $list;
    }

    /**
     * @param int $id
     * @return EntityInterface
     */
    private function entityGenerate(int $id)
    {
        return $this->randomGenerator->generate()->setId($id);
    }
}

