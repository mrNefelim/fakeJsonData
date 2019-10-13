<?php

namespace fakeJsonDataBundle\Order\Controller;

use App\Http\Controllers\Controller as BaseController;
use fakeJsonDataBundle\DTO\Response;
use fakeJsonDataBundle\Order\Service\Random;
use fakeJsonDataBundle\Service\RandomGeneratorList;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    /**
     * @var RandomGeneratorList
     */
    private $randomClientListGenerator;

    /**
     * @param RandomGeneratorList $randomClientListGenerator
     */
    public function __construct(RandomGeneratorList $randomClientListGenerator)
    {
        $this->randomClientListGenerator = $randomClientListGenerator->entity(new Random());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return new Response($this->randomClientListGenerator->generate($request));
    }
}
