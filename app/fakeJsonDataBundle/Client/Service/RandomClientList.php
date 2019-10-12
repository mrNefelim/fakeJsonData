<?php


namespace fakeJsonDataBundle\Client\Service;

use fakeJsonDataBundle\Client\Entity\Client;
use Illuminate\Http\Request;

class RandomClientList
{
    /**
     * @var RandomClient
     */
    private $randomClient;

    public function __construct(RandomClient $randomClient)
    {
        $this->randomClient = $randomClient;
    }

    /**
     * @param Request $request
     * @return Client[]
     */
    public function generate(Request $request)
    {
        $iterationCount = $request->id ?? 3;
        $list = array_map([$this, 'randomClient'], range(1, $iterationCount));

        return $list;
    }

    private function randomClient(int $id)
    {
        return $this->randomClient->generate()->setId($id);
    }
}
